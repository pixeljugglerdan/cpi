<?php
/*
Plugin Name: Gravity Forms MailChimp Add-On
Plugin URI: http://www.gravityforms.com
Description: Integrates Gravity Forms with MailChimp allowing form submissions to be automatically sent to your MailChimp account
Version: 1.5
Author: rocketgenius
Author URI: http://www.rocketgenius.com

------------------------------------------------------------------------
Copyright 2009 rocketgenius

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

add_action('init',  array('GFMailChimp', 'init'));
register_activation_hook( __FILE__, array("GFMailChimp", "add_permissions"));

class GFMailChimp {

    private static $path = "gravityformsmailchimp/mailchimp.php";
    private static $url = "http://www.gravityforms.com";
    private static $slug = "gravityformsmailchimp";
    private static $version = "1.5";
    private static $min_gravityforms_version = "1.5";

    //Plugin starting point. Will load appropriate files
    public static function init(){

        if(RG_CURRENT_PAGE == "plugins.php"){
            //loading translations
            load_plugin_textdomain('gravityformsmailchimp', FALSE, '/gravityformsmailchimp/languages' );

            add_action('after_plugin_row_' . self::$path, array('GFMailChimp', 'plugin_row') );

           //force new remote request for version info on the plugin page
            self::flush_version_info();
        }

        if(!self::is_gravityforms_supported()){
           return;
        }

        if(is_admin()){
            //loading translations
            load_plugin_textdomain('gravityformsmailchimp', FALSE, '/gravityformsmailchimp/languages' );

            add_filter("transient_update_plugins", array('GFMailChimp', 'check_update'));
            add_filter("site_transient_update_plugins", array('GFMailChimp', 'check_update'));

            add_action('install_plugins_pre_plugin-information', array('GFMailChimp', 'display_changelog'));

            //creates a new Settings page on Gravity Forms' settings screen
            if(self::has_access("gravityforms_mailchimp")){
                RGForms::add_settings_page("MailChimp", array("GFMailChimp", "settings_page"), self::get_base_url() . "/images/mailchip_wordpress_icon_32.png");
            }
        }

        //integrating with Members plugin
        if(function_exists('members_get_capabilities'))
            add_filter('members_get_capabilities', array("GFMailChimp", "members_get_capabilities"));

        //creates the subnav left menu
        add_filter("gform_addon_navigation", array('GFMailChimp', 'create_menu'));

        if(self::is_mailchimp_page()){

            //enqueueing sack for AJAX requests
            wp_enqueue_script(array("sack"));

            //loading data lib
            require_once(self::get_base_path() . "/data.php");

            //loading upgrade lib
            if(!class_exists("RGMailChimpUpgrade"))
                require_once("plugin-upgrade.php");

            //loading Gravity Forms tooltips
            require_once(GFCommon::get_base_path() . "/tooltips.php");
            add_filter('gform_tooltips', array('GFMailChimp', 'tooltips'));

            //runs the setup when version changes
            self::setup();

         }
         else if(in_array(RG_CURRENT_PAGE, array("admin-ajax.php"))){

            //loading data class
            require_once(self::get_base_path() . "/data.php");

            add_action('wp_ajax_rg_update_feed_active', array('GFMailChimp', 'update_feed_active'));
            add_action('wp_ajax_gf_select_mailchimp_form', array('GFMailChimp', 'select_mailchimp_form'));

        }
        else{
             //handling post submission.
            add_action("gform_post_submission", array('GFMailChimp', 'export'), 10, 2);
        }
    }

    public static function update_feed_active(){
        check_ajax_referer('rg_update_feed_active','rg_update_feed_active');
        $id = $_POST["feed_id"];
        $feed = GFMailChimpData::get_feed($id);
        GFMailChimpData::update_feed($id, $feed["form_id"], $_POST["is_active"], $feed["meta"]);
    }

    //--------------   Automatic upgrade ---------------------------------------------------

    public static function flush_version_info(){
        if(!class_exists("RGMailChimpUpgrade"))
            require_once("plugin-upgrade.php");

        RGMailChimpUpgrade::set_version_info(false);
    }

    public static function plugin_row(){
        if(!self::is_gravityforms_supported()){
            $message = sprintf(__("Gravity Forms " . self::$min_gravityforms_version . " is required. Activate it now or %spurchase it today!%s"), "<a href='http://www.gravityforms.com'>", "</a>");
            RGMailChimpUpgrade::display_plugin_message($message, true);
        }
        else{
            $version_info = RGMailChimpUpgrade::get_version_info(self::$slug, self::get_key(), self::$version);

            if(!$version_info["is_valid_key"]){
                $new_version = version_compare(self::$version, $version_info["version"], '<') ? __('There is a new version of Gravity Forms MailChimp Add-On available.', 'gravityformsmailchimp') .' <a class="thickbox" title="Gravity Forms MailChimp Add-On" href="plugin-install.php?tab=plugin-information&plugin=' . self::$slug . '&TB_iframe=true&width=640&height=808">'. sprintf(__('View version %s Details', 'gravityformsmailchimp'), $version_info["version"]) . '</a>. ' : '';
                $message = $new_version . sprintf(__('%sRegister%s your copy of Gravity Forms to receive access to automatic upgrades and support. Need a license key? %sPurchase one now%s.', 'gravityformsmailchimp'), '<a href="admin.php?page=gf_settings">', '</a>', '<a href="http://www.gravityforms.com">', '</a>') . '</div></td>';
                RGMailChimpUpgrade::display_plugin_message($message);
            }
        }
    }

    //Displays current version details on Plugin's page
    public static function display_changelog(){
        if($_REQUEST["plugin"] != self::$slug)
            return;

        //loading upgrade lib
        if(!class_exists("RGMailChimpUpgrade"))
            require_once("plugin-upgrade.php");

        RGMailChimpUpgrade::display_changelog(self::$slug, self::get_key(), self::$version);
    }

    public static function check_update($update_plugins_option){
        if(!class_exists("RGMailChimpUpgrade"))
            require_once("plugin-upgrade.php");

        return RGMailChimpUpgrade::check_update(self::$path, self::$slug, self::$url, self::$slug, self::get_key(), self::$version, $update_plugins_option);
    }

    private static function get_key(){
        if(self::is_gravityforms_supported())
            return GFCommon::get_key();
        else
            return "";
    }
    //---------------------------------------------------------------------------------------

    //Returns true if the current page is an Feed pages. Returns false if not
    private static function is_mailchimp_page(){
        $current_page = trim(strtolower(rgget("page")));
        $mailchimp_pages = array("gf_mailchimp");

        return in_array($current_page, $mailchimp_pages);
    }

    //Creates or updates database tables. Will only run when version changes
    private static function setup(){

        if(get_option("gf_mailchimp_version") != self::$version)
            GFMailChimpData::update_table();

        update_option("gf_mailchimp_version", self::$version);
    }

    //Adds feed tooltips to the list of tooltips
    public static function tooltips($tooltips){
        $mailchimp_tooltips = array(
            "mailchimp_contact_list" => "<h6>" . __("MailChimp List", "gravityformsmailchimp") . "</h6>" . __("Select the MailChimp list you would like to add your contacts to.", "gravityformsmailchimp"),
            "mailchimp_gravity_form" => "<h6>" . __("Gravity Form", "gravityformsmailchimp") . "</h6>" . __("Select the Gravity Form you would like to integrate with MailChimp. Contacts generated by this form will be automatically added to your MailChimp account.", "gravityformsmailchimp"),
            "mailchimp_welcome" => "<h6>" . __("Send Welcome Email", "gravityformsmailchimp") . "</h6>" . __("When this option is enabled, users will receive an automatic welcome email from MailChimp upon being added to your MailChimp list.", "gravityformsmailchimp"),
            "mailchimp_map_fields" => "<h6>" . __("Map Fields", "gravityformsmailchimp") . "</h6>" . __("Associate your MailChimp merge variables to the appropriate Gravity Form fields by selecting.", "gravityformsmailchimp"),
            "mailchimp_optin_condition" => "<h6>" . __("Opt-In Condition", "gravityformsmailchimp") . "</h6>" . __("When the opt-in condition is enabled, form submissions will only be exported to MailChimp when the condition is met. When disabled all form submissions will be exported.", "gravityformsmailchimp"),
            "mailchimp_double_optin" => "<h6>" . __("Double Opt-In", "gravityformsmailchimp") . "</h6>" . __("When the double opt-in option is enabled, MailChimp will send a confirmation email to the user and will only add them to your MailChimp list upon confirmation.", "gravityformsmailchimp")

        );
        return array_merge($tooltips, $mailchimp_tooltips);
    }

    //Creates MailChimp left nav menu under Forms
    public static function create_menu($menus){

        // Adding submenu if user has access
        $permission = self::has_access("gravityforms_mailchimp");
        if(!empty($permission))
            $menus[] = array("name" => "gf_mailchimp", "label" => __("MailChimp", "gravityformsmailchimp"), "callback" =>  array("GFMailChimp", "mailchimp_page"), "permission" => $permission);

        return $menus;
    }

    public static function settings_page(){

        if(!class_exists("RGMailChimpUpgrade"))
            require_once("plugin-upgrade.php");

        if(rgpost("uninstall")){
            check_admin_referer("uninstall", "gf_mailchimp_uninstall");
            self::uninstall();

            ?>
            <div class="updated fade" style="padding:20px;"><?php _e(sprintf("Gravity Forms MailChimp Add-On have been successfully uninstalled. It can be re-activated from the %splugins page%s.", "<a href='plugins.php'>","</a>"), "gravityformsmailchimp")?></div>
            <?php
            return;
        }
        else if(rgpost("gf_mailchimp_submit")){
            check_admin_referer("update", "gf_mailchimp_update");
            $settings = array("username" => stripslashes($_POST["gf_mailchimp_username"]), "password" => stripslashes($_POST["gf_mailchimp_password"]), "apikey" => $_POST["gf_mailchimp_apikey"]);

            //Clearing out username and password if API Key is valid
            if((!empty($settings["username"]) || !empty($settings["password"])) && !empty($settings["apikey"]) && self::is_valid_login($settings["apikey"])){
                $settings["username"] = $settings["password"] = "";
            }

            update_option("gf_mailchimp_settings", $settings);
        }
        else{
            $settings = get_option("gf_mailchimp_settings");
        }

        //feedback for username/password
        if(!empty($settings["username"]) || !empty($settings["password"])){
            $is_valid = self::is_valid_login($settings["username"], $settings["password"]);
            if($is_valid){
                $message = __("Valid username and password.", "gravityformsmailchimp");
                $class = "valid_credentials";
            }
            else{
                $message = __("Invalid username and/or password. Please try another combination.", "gravityformsmailchimp");
                $class = "invalid_credentials";
            }
        }

        //feedback for api key
        $feedback_image = "";
        $is_valid_apikey = false;
        if(!empty($settings["apikey"])){
            $is_valid_apikey = self::is_valid_login($settings["apikey"]);
            $icon = $is_valid_apikey ? self::get_base_url() . "/images/tick.png" : self::get_base_url() . "/images/stop.png";
            $feedback_image = "<img src='{$icon}' />";
        }

        //if username is blank, hide username/password fields
        if(empty($settings["username"]) || $is_valid_apikey){
            $hidden_class = "hidden";
            $settings["username"] = "";
            $settings["password"] = "";
        }

        ?>
        <style>
            .valid_credentials{color:green;}
            .invalid_credentials{color:red;}
        </style>

        <form method="post" action="">
            <?php wp_nonce_field("update", "gf_mailchimp_update") ?>
            <h3><?php _e("MailChimp Account Information", "gravityformsmailchimp") ?></h3>
            <p style="text-align: left;">
                <?php _e(sprintf("MailChimp makes it easy to send email newsletters to your customers, manage your subscriber lists, and track campaign performance. Use Gravity Forms to collect customer information and automatically add them to your MailChimp subscriber list. If you don't have a MailChimp account, you can %ssign up for one here%s", "<a href='http://www.mailchimp.com/' target='_blank'>" , "</a>"), "gravityformsmailchimp") ?>
            </p>

            <table class="form-table">
                <tr>
                    <th scope="row"><label for="gf_mailchimp_apikey"><?php _e("MailChimp API Key", "gravityformsmailchimp"); ?></label> </th>
                    <td>
                        <input type="text" id="gf_mailchimp_apikey" name="gf_mailchimp_apikey" value="<?php echo esc_attr($settings["apikey"]) ?>" size="50"/>
                        <?php echo $feedback_image?>
                    </td>
                </tr>
                <tr class="<?php echo $hidden_class ?>" style="margin-top:10px;">
                    <td colspan="2">
                        <h3><?php _e("Legacy API Credentials"); ?></h3>
                        <?php _e("The following API authentication method has been deprecated. <br/>You may need to use the API key above in order for MailChimp to function properly.", "gravityformsmailchimp") ?>
                    </td>
                </tr>
                <tr class="<?php echo $hidden_class ?>">
                    <th scope="row"><label for="gf_mailchimp_username"><?php _e("Username", "gravityformsmailchimp"); ?></label> </th>
                    <td><input type="text" id="gf_mailchimp_username" name="gf_mailchimp_username" value="<?php echo esc_attr($settings["username"]) ?>"/></td>
                </tr>
                <tr class="<?php echo $hidden_class ?>">
                    <th scope="row"><label for="gf_mailchimp_password"><?php _e("Password", "gravityformsmailchimp"); ?></label> </th>
                    <td><input type="password" id="gf_mailchimp_password" name="gf_mailchimp_password" value="<?php echo esc_attr($settings["password"]) ?>"/></td>
                </tr>
                <tr class="<?php echo $hidden_class ?>">
                    <td colspan="2" class="<?php echo $class ?>"><?php echo $message ?></td>
                </tr>
                <tr>
                    <td colspan="2" ><input type="submit" name="gf_mailchimp_submit" class="button-primary" value="<?php _e("Save Settings", "gravityformsmailchimp") ?>" /></td>
                </tr>
            </table>
        </form>

        <form action="" method="post">
            <?php wp_nonce_field("uninstall", "gf_mailchimp_uninstall") ?>
            <?php if(GFCommon::current_user_can_any("gravityforms_mailchimp_uninstall")){ ?>
                <div class="hr-divider"></div>

                <h3><?php _e("Uninstall MailChimp Add-On", "gravityformsmailchimp") ?></h3>
                <div class="delete-alert"><?php _e("Warning! This operation deletes ALL MailChimp Feeds.", "gravityformsmailchimp") ?>
                    <?php
                    $uninstall_button = '<input type="submit" name="uninstall" value="' . __("Uninstall MailChimp Add-On", "gravityformsmailchimp") . '" class="button" onclick="return confirm(\'' . __("Warning! ALL MailChimp Feeds will be deleted. This cannot be undone. \'OK\' to delete, \'Cancel\' to stop", "gravityformsmailchimp") . '\');"/>';
                    echo apply_filters("gform_mailchimp_uninstall_button", $uninstall_button);
                    ?>
                </div>
            <?php } ?>
        </form>
        <?php
    }

    public static function mailchimp_page(){
        $view = rgar($_GET,"view");
        if($view == "edit")
            self::edit_page($_GET["id"]);
        else
            self::list_page();
    }

    //Displays the mailchimp feeds list page
    private static function list_page(){
        if(!self::is_gravityforms_supported()){
            die(__(sprintf("MailChimp Add-On requires Gravity Forms %s. Upgrade automatically on the %sPlugin page%s.", self::$min_gravityforms_version, "<a href='plugins.php'>", "</a>"), "gravityformsmailchimp"));
        }

        if(rgpost("action") == "delete"){
            check_admin_referer("list_action", "gf_mailchimp_list");

            $id = absint($_POST["action_argument"]);
            GFMailChimpData::delete_feed($id);
            ?>
            <div class="updated fade" style="padding:6px"><?php _e("Feed deleted.", "gravityformsmailchimp") ?></div>
            <?php
        }
        else if (!empty($_POST["bulk_action"])){
            check_admin_referer("list_action", "gf_mailchimp_list");
            $selected_feeds = $_POST["feed"];
            if(is_array($selected_feeds)){
                foreach($selected_feeds as $feed_id)
                    GFMailChimpData::delete_feed($feed_id);
            }
            ?>
            <div class="updated fade" style="padding:6px"><?php _e("Feeds deleted.", "gravityformsmailchimp") ?></div>
            <?php
        }

        ?>
        <div class="wrap">
            <img alt="<?php _e("MailChimp Feeds", "gravityformsmailchimp") ?>" src="<?php echo self::get_base_url()?>/images/mailchip_wordpress_icon_32.png" style="float:left; margin:15px 7px 0 0;"/>
            <h2><?php _e("MailChimp Feeds", "gravityformsmailchimp"); ?>
            <a class="button add-new-h2" href="admin.php?page=gf_mailchimp&view=edit&id=0"><?php _e("Add New", "gravityformsmailchimp") ?></a>
            </h2>


            <form id="feed_form" method="post">
                <?php wp_nonce_field('list_action', 'gf_mailchimp_list') ?>
                <input type="hidden" id="action" name="action"/>
                <input type="hidden" id="action_argument" name="action_argument"/>

                <div class="tablenav">
                    <div class="alignleft actions" style="padding:8px 0 7px; 0">
                        <label class="hidden" for="bulk_action"><?php _e("Bulk action", "gravityformsmailchimp") ?></label>
                        <select name="bulk_action" id="bulk_action">
                            <option value=''> <?php _e("Bulk action", "gravityformsmailchimp") ?> </option>
                            <option value='delete'><?php _e("Delete", "gravityformsmailchimp") ?></option>
                        </select>
                        <?php
                        echo '<input type="submit" class="button" value="' . __("Apply", "gravityformsmailchimp") . '" onclick="if( jQuery(\'#bulk_action\').val() == \'delete\' && !confirm(\'' . __("Delete selected feeds? ", "gravityformsmailchimp") . __("\'Cancel\' to stop, \'OK\' to delete.", "gravityformsmailchimp") .'\')) { return false; } return true;"/>';
                        ?>
                    </div>
                </div>
                <table class="widefat fixed" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" id="cb" class="manage-column column-cb check-column" style=""><input type="checkbox" /></th>
                            <th scope="col" id="active" class="manage-column check-column"></th>
                            <th scope="col" class="manage-column"><?php _e("Form", "gravityformsmailchimp") ?></th>
                            <th scope="col" class="manage-column"><?php _e("MailChimp List", "gravityformsmailchimp") ?></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col" id="cb" class="manage-column column-cb check-column" style=""><input type="checkbox" /></th>
                            <th scope="col" id="active" class="manage-column check-column"></th>
                            <th scope="col" class="manage-column"><?php _e("Form", "gravityformsmailchimp") ?></th>
                            <th scope="col" class="manage-column"><?php _e("MailChimp List", "gravityformsmailchimp") ?></th>
                        </tr>
                    </tfoot>

                    <tbody class="list:user user-list">
                        <?php

                        $settings = GFMailChimpData::get_feeds();
                        if(is_array($settings) && sizeof($settings) > 0){
                            foreach($settings as $setting){
                                ?>
                                <tr class='author-self status-inherit' valign="top">
                                    <th scope="row" class="check-column"><input type="checkbox" name="feed[]" value="<?php echo $setting["id"] ?>"/></th>
                                    <td><img src="<?php echo self::get_base_url() ?>/images/active<?php echo intval($setting["is_active"]) ?>.png" alt="<?php echo $setting["is_active"] ? __("Active", "gravityformsmailchimp") : __("Inactive", "gravityformsmailchimp");?>" title="<?php echo $setting["is_active"] ? __("Active", "gravityformsmailchimp") : __("Inactive", "gravityformsmailchimp");?>" onclick="ToggleActive(this, <?php echo $setting['id'] ?>); " /></td>
                                    <td class="column-title">
                                        <a href="admin.php?page=gf_mailchimp&view=edit&id=<?php echo $setting["id"] ?>" title="<?php _e("Edit", "gravityformsmailchimp") ?>"><?php echo $setting["form_title"] ?></a>
                                        <div class="row-actions">
                                            <span class="edit">
                                            <a title="Edit this setting" href="admin.php?page=gf_mailchimp&view=edit&id=<?php echo $setting["id"] ?>" title="<?php _e("Edit", "gravityformsmailchimp") ?>"><?php _e("Edit", "gravityformsmailchimp") ?></a>
                                            |
                                            </span>

                                            <span class="edit">
                                            <a title="<?php _e("Delete", "gravityformsmailchimp") ?>" href="javascript: if(confirm('<?php _e("Delete this feed? ", "gravityformsmailchimp") ?> <?php _e("\'Cancel\' to stop, \'OK\' to delete.", "gravityformsmailchimp") ?>')){ DeleteSetting(<?php echo $setting["id"] ?>);}"><?php _e("Delete", "gravityformsmailchimp")?></a>

                                            </span>
                                        </div>
                                    </td>
                                    <td class="column-date"><?php echo $setting["meta"]["contact_list_name"] ?></td>
                                </tr>
                                <?php
                            }
                        }
                        else if(self::get_api()){
                            ?>
                            <tr>
                                <td colspan="4" style="padding:20px;">
                                    <?php _e(sprintf("You don't have any MailChimp feeds configured. Let's go %screate one%s!", '<a href="admin.php?page=gf_mailchimp&view=edit&id=0">', "</a>"), "gravityformsmailchimp"); ?>
                                </td>
                            </tr>
                            <?php
                        }
                        else{
                            ?>
                            <tr>
                                <td colspan="4" style="padding:20px;">
                                    <?php _e(sprintf("To get started, please configure your %sMailChimp Settings%s.", '<a href="admin.php?page=gf_settings&addon=MailChimp">', "</a>"), "gravityformsmailchimp"); ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
        <script type="text/javascript">
            function DeleteSetting(id){
                jQuery("#action_argument").val(id);
                jQuery("#action").val("delete");
                jQuery("#feed_form")[0].submit();
            }
            function ToggleActive(img, feed_id){
                var is_active = img.src.indexOf("active1.png") >=0
                if(is_active){
                    img.src = img.src.replace("active1.png", "active0.png");
                    jQuery(img).attr('title','<?php _e("Inactive", "gravityformsmailchimp") ?>').attr('alt', '<?php _e("Inactive", "gravityformsmailchimp") ?>');
                }
                else{
                    img.src = img.src.replace("active0.png", "active1.png");
                    jQuery(img).attr('title','<?php _e("Active", "gravityformsmailchimp") ?>').attr('alt', '<?php _e("Active", "gravityformsmailchimp") ?>');
                }

                var mysack = new sack("<?php echo admin_url("admin-ajax.php")?>" );
                mysack.execute = 1;
                mysack.method = 'POST';
                mysack.setVar( "action", "rg_update_feed_active" );
                mysack.setVar( "rg_update_feed_active", "<?php echo wp_create_nonce("rg_update_feed_active") ?>" );
                mysack.setVar( "feed_id", feed_id );
                mysack.setVar( "is_active", is_active ? 0 : 1 );
                mysack.encVar( "cookie", document.cookie, false );
                mysack.onError = function() { alert('<?php _e("Ajax error while updating feed", "gravityformsmailchimp" ) ?>' )};
                mysack.runAJAX();

                return true;
            }
        </script>
        <?php
    }

    private static function is_valid_login($username_or_apikey, $password=null){
        if($password){
            if(!class_exists("MCAPI_Legacy")){
                require_once("api/MCAPI_Legacy.class.php");
            }
            $api = new MCAPI_Legacy(trim($username_or_apikey), trim($password));
        }
        else{
            if(!class_exists("MCAPI")){
                require_once("api/MCAPI.class.php");
            }
            $api = new MCAPI(trim($username_or_apikey), trim($password));
            $api->lists();
        }
        $GLOBALS["mc_api_key"] = null;

        return $api->errorCode ? false : true;
    }

    private static function get_api(){

        //global mailchimp settings
        $settings = get_option("gf_mailchimp_settings");

        if(!empty($settings["username"]) && !empty($settings["password"])){
            if(!class_exists("MCAPI_Legacy")){
                require_once("api/MCAPI_Legacy.class.php");
            }

            $api = new MCAPI_Legacy(trim($settings["username"]), trim($settings["password"]));
        }
        else if(!empty($settings["apikey"])){
            if(!class_exists("MCAPI")){
                require_once("api/MCAPI.class.php");
            }

            $api = new MCAPI($settings["apikey"]);
        }

        if(!$api || $api->errorCode)
            return null;

        return $api;
    }

    private static function edit_page(){
        ?>
        <style>
            .mailchimp_col_heading{padding-bottom:2px; border-bottom: 1px solid #ccc; font-weight:bold;}
            .mailchimp_field_cell {padding: 6px 17px 0 0; margin-right:15px;}
            .gfield_required{color:red;}

            .feeds_validation_error{ background-color:#FFDFDF;}
            .feeds_validation_error td{ margin-top:4px; margin-bottom:6px; padding-top:6px; padding-bottom:6px; border-top:1px dotted #C89797; border-bottom:1px dotted #C89797}

            .left_header{float:left; width:200px;}
            .margin_vertical_10{margin: 10px 0;}
            #mailchimp_doubleoptin_warning{padding-left: 5px; padding-bottom:4px; font-size: 10px;}
        </style>
        <script type="text/javascript">
            var form = Array();
        </script>
        <div class="wrap">
            <img alt="<?php _e("MailChimp", "gravityformsmailchimp") ?>" style="margin: 15px 7px 0pt 0pt; float: left;" src="<?php echo self::get_base_url() ?>/images/mailchip_wordpress_icon_32.png"/>
            <h2><?php _e("MailChimp Feed", "gravityformsmailchimp") ?></h2>

        <?php
        //getting MailChimp API
        $api = self::get_api();

        //ensures valid credentials were entered in the settings page
        if(!$api){
            ?>
            <div><?php echo sprintf(__("We are unable to login to MailChimp with the provided credentials. Please make sure they are valid in the %sSettings Page%s", "gravityformsmailchimp"), "<a href='?page=gf_settings&addon=MailChimp'>", "</a>"); ?></div>
            <?php
            return;
        }

        //getting setting id (0 when creating a new one)
        $id = !empty($_POST["mailchimp_setting_id"]) ? $_POST["mailchimp_setting_id"] : absint($_GET["id"]);
        $config = empty($id) ? array("meta" => array("double_optin" => true), "is_active" => true) : GFMailChimpData::get_feed($id);

        if(!isset($config["meta"]))
            $config["meta"] = array();

        //getting merge vars from selected list (if one was selected)
        $merge_vars = rgempty("contact_list_id", $config["meta"]) ? array() : $api->listMergeVars($config["meta"]["contact_list_id"]);

        //updating meta information
        if(rgpost("gf_mailchimp_submit")){

            list($list_id, $list_name) = explode("|:|", stripslashes($_POST["gf_mailchimp_list"]));
            $config["meta"]["contact_list_id"] = $list_id;
            $config["meta"]["contact_list_name"] = $list_name;
            $config["form_id"] = absint($_POST["gf_mailchimp_form"]);

            $is_valid = true;
            $merge_vars = $api->listMergeVars($config["meta"]["contact_list_id"]);
            $field_map = array();
            foreach($merge_vars as $var){
                $field_name = "mailchimp_map_field_" . $var["tag"];
                $mapped_field = stripslashes($_POST[$field_name]);
                if(!empty($mapped_field)){
                    $field_map[$var["tag"]] = $mapped_field;
                }
                else{
                    unset($field_map[$var["tag"]]);
                    if($var["req"] == "Y")
                    $is_valid = false;
                }
            }

            $config["meta"]["field_map"] = $field_map;
            $config["meta"]["double_optin"] = rgpost("mailchimp_double_optin") ? true : false;
            $config["meta"]["welcome_email"] = rgpost("mailchimp_welcome_email") ? true : false;

            $config["meta"]["optin_enabled"] = rgpost("mailchimp_optin_enable") ? true : false;
            $config["meta"]["optin_field_id"] = $config["meta"]["optin_enabled"] ? rgpost("mailchimp_optin_field_id") : "";
            $config["meta"]["optin_operator"] = $config["meta"]["optin_enabled"] ? rgpost("mailchimp_optin_operator") : "";
            $config["meta"]["optin_value"] = $config["meta"]["optin_enabled"] ? rgpost("mailchimp_optin_value") : "";

            if($is_valid){
                $id = GFMailChimpData::update_feed($id, $config["form_id"], $config["is_active"], $config["meta"]);
                ?>
                <div class="updated fade" style="padding:6px"><?php echo sprintf(__("Feed Updated. %sback to list%s", "gravityformsmailchimp"), "<a href='?page=gf_mailchimp'>", "</a>") ?></div>
                <input type="hidden" name="mailchimp_setting_id" value="<?php echo $id ?>"/>
                <?php
            }
            else{
                ?>
                <div class="error" style="padding:6px"><?php echo __("Feed could not be updated. Please enter all required information below.", "gravityformsmailchimp") ?></div>
                <?php
            }
        }

        ?>
        <form method="post" action="">
            <input type="hidden" name="mailchimp_setting_id" value="<?php echo $id ?>"/>
            <div class="margin_vertical_10">
                <label for="gf_mailchimp_list" class="left_header"><?php _e("MailChimp list", "gravityformsmailchimp"); ?> <?php gform_tooltip("mailchimp_contact_list") ?></label>
                <?php

                //getting all contact lists
                $lists = $api->lists();
                if(isset($lists["data"]) && isset($lists["total"]))
                    $lists = $lists["data"];

                if (!$lists){
                    echo __("Could not load MailChimp contact lists. <br/>Error: ", "gravityformsmailchimp") . $api->errorMessage;
                }
                else{
                    ?>
                    <select id="gf_mailchimp_list" name="gf_mailchimp_list" onchange="SelectList(jQuery(this).val());">
                        <option value=""><?php _e("Select a MailChimp List", "gravityformsmailchimp"); ?></option>
                    <?php
                    foreach ($lists as $list){
                        $selected = $list["id"] == $config["meta"]["contact_list_id"] ? "selected='selected'" : "";
                        ?>
                        <option value="<?php echo esc_attr($list['id']) . "|:|" . esc_attr($list['name']) ?>" <?php echo $selected ?>><?php echo esc_html($list['name']) ?></option>
                        <?php
                    }
                    ?>
                  </select>
                <?php
                }
                ?>
            </div>

            <div id="mailchimp_form_container" valign="top" class="margin_vertical_10" <?php echo empty($config["meta"]["contact_list_id"]) ? "style='display:none;'" : "" ?>>
                <label for="gf_mailchimp_form" class="left_header"><?php _e("Gravity Form", "gravityformsmailchimp"); ?> <?php gform_tooltip("mailchimp_gravity_form") ?></label>

                <select id="gf_mailchimp_form" name="gf_mailchimp_form" onchange="SelectForm(jQuery('#gf_mailchimp_list').val(), jQuery(this).val());">
                <option value=""><?php _e("Select a form", "gravityformsmailchimp"); ?> </option>
                <?php
                $forms = RGFormsModel::get_forms();
                foreach($forms as $form){
                    $selected = absint($form->id) == $config["form_id"] ? "selected='selected'" : "";
                    ?>
                    <option value="<?php echo absint($form->id) ?>"  <?php echo $selected ?>><?php echo esc_html($form->title) ?></option>
                    <?php
                }
                ?>
                </select>
                &nbsp;&nbsp;
                <img src="<?php echo GFMailChimp::get_base_url() ?>/images/loading.gif" id="mailchimp_wait" style="display: none;"/>
            </div>
            <div id="mailchimp_field_group" valign="top" <?php echo empty($config["meta"]["contact_list_id"]) || empty($config["form_id"]) ? "style='display:none;'" : "" ?>>
                <div id="mailchimp_field_container" valign="top" class="margin_vertical_10" >
                    <label for="mailchimp_fields" class="left_header"><?php _e("Map Fields", "gravityformsmailchimp"); ?> <?php gform_tooltip("mailchimp_map_fields") ?></label>

                    <div id="mailchimp_field_list">
                    <?php
                    if(!empty($config["form_id"])){

                        //getting list of all MailChimp merge variables for the selected contact list
                        if(empty($merge_vars))
                            $merge_vars = $api->listMergeVars($list_id);

                        //getting field map UI
                        echo self::get_field_mapping($config, $config["form_id"], $merge_vars);

                        //getting list of selection fields to be used by the optin
                        $form_meta = RGFormsModel::get_form_meta($config["form_id"]);
                        $selection_fields = GFCommon::get_selection_fields($form_meta, $config["meta"]["optin_field_id"]);
                    }
                    ?>
                    </div>
                </div>

                <div id="mailchimp_optin_container" valign="top" class="margin_vertical_10">
                    <label for="mailchimp_optin" class="left_header"><?php _e("Opt-In Condition", "gravityformsmailchimp"); ?> <?php gform_tooltip("mailchimp_optin_condition") ?></label>
                    <div id="mailchimp_optin">
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" id="mailchimp_optin_enable" name="mailchimp_optin_enable" value="1" onclick="if(this.checked){jQuery('#mailchimp_optin_condition_field_container').show('slow');} else{jQuery('#mailchimp_optin_condition_field_container').hide('slow');}" <?php echo rgar($config["meta"],"optin_enabled") ? "checked='checked'" : ""?>/>
                                    <label for="mailchimp_optin_enable"><?php _e("Enable", "gravityformsmailchimp"); ?></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="mailchimp_optin_condition_field_container" <?php echo !rgar($config["meta"],"optin_enabled") ? "style='display:none'" : ""?>>
                                        <div id="mailchimp_optin_condition_fields" <?php echo empty($selection_fields) ? "style='display:none'" : ""?>>
                                            <?php _e("Export to MailChimp if ", "gravityformsmailchimp") ?>

                                            <select id="mailchimp_optin_field_id" name="mailchimp_optin_field_id" class='optin_select' onchange='jQuery("#mailchimp_optin_value").html(GetFieldValues(jQuery(this).val(), "", 20));'><?php echo $selection_fields ?></select>
                                            <select id="mailchimp_optin_operator" name="mailchimp_optin_operator" />
                                                <option value="is" <?php echo rgar($config["meta"], "optin_operator") == "is" ? "selected='selected'" : "" ?>><?php _e("is", "gravityformsmailchimp") ?></option>
                                                <option value="isnot" <?php echo rgar($config["meta"], "optin_operator") == "isnot" ? "selected='selected'" : "" ?>><?php _e("is not", "gravityformsmailchimp") ?></option>
                                            </select>
                                            <select id="mailchimp_optin_value" name="mailchimp_optin_value" class='optin_select'>
                                            </select>

                                        </div>
                                        <div id="mailchimp_optin_condition_message" <?php echo !empty($selection_fields) ? "style='display:none'" : ""?>>
                                            <?php _e("To create an Opt-In condition, your form must have a drop down, checkbox or multiple choice field.", "gravityform") ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <script type="text/javascript">
                        <?php
                        if(!empty($config["form_id"])){
                            ?>
                            //creating Javascript form object
                            form = <?php echo GFCommon::json_encode($form_meta)?> ;

                            //initializing drop downs
                            jQuery(document).ready(function(){
                                var selectedField = "<?php echo str_replace('"', '\"', $config["meta"]["optin_field_id"])?>";
                                var selectedValue = "<?php echo str_replace('"', '\"', $config["meta"]["optin_value"])?>";
                                SetOptin(selectedField, selectedValue);
                            });
                        <?php
                        }
                        ?>
                    </script>
                </div>

                <div id="mailchimp_options_container" valign="top" class="margin_vertical_10">
                    <label for="mailchimp_options" class="left_header"><?php _e("Options", "gravityformsmailchimp"); ?></label>
                    <div id="mailchimp_options">
                        <table>
                            <tr><td><input type="checkbox" name="mailchimp_double_optin" id="mailchimp_double_optin" value="1" <?php echo rgar($config["meta"],"double_optin") ? "checked='checked'" : "" ?> onclick="var element = jQuery('#mailchimp_doubleoptin_warning'); if(this.checked){element.hide('slow');} else{element.show('slow');}"/> <?php _e("Double Opt-In" , "gravityformsmailchimp") ?>  <?php gform_tooltip("mailchimp_double_optin") ?> <br/><span id='mailchimp_doubleoptin_warning' <?php echo rgar($config["meta"], "double_optin") ? "style='display:none'" : "" ?>>(<?php _e("Abusing this may cause your MailChimp account to be suspended.", "gravityformsmailchimp") ?>)</span></td></tr>
                            <tr><td><input type="checkbox" name="mailchimp_welcome_email" id="mailchimp_welcome_email" value="1" <?php echo rgar($config["meta"],"welcome_email") ? "checked='checked'" : "" ?>/> <?php _e("Send Welcome Email" , "gravityformsmailchimp") ?> <?php gform_tooltip("mailchimp_welcome") ?></td></tr>
                        </table>
                    </div>
                </div>

                <div id="mailchimp_submit_container" class="margin_vertical_10">
                    <input type="submit" name="gf_mailchimp_submit" value="<?php echo empty($id) ? __("Save", "gravityformsmailchimp") : __("Update", "gravityformsmailchimp"); ?>" class="button-primary"/>
                    <input type="button" value="<?php _e("Cancel", "gravityformsmailchimp"); ?>" class="button" onclick="javascript:document.location='admin.php?page=gf_mailchimp'" />
                </div>
            </div>
        </form>
        </div>
        <script type="text/javascript">

            function SelectList(listId){
                if(listId){
                    jQuery("#mailchimp_form_container").slideDown();
                    jQuery("#gf_mailchimp_form").val("");
                }
                else{
                    jQuery("#mailchimp_form_container").slideUp();
                    EndSelectForm("");
                }
            }

            function SelectForm(listId, formId){
                if(!formId){
                    jQuery("#mailchimp_field_group").slideUp();
                    return;
                }

                jQuery("#mailchimp_wait").show();
                jQuery("#mailchimp_field_group").slideUp();

                var mysack = new sack("<?php bloginfo( 'wpurl' ); ?>/wp-admin/admin-ajax.php" );
                mysack.execute = 1;
                mysack.method = 'POST';
                mysack.setVar( "action", "gf_select_mailchimp_form" );
                mysack.setVar( "gf_select_mailchimp_form", "<?php echo wp_create_nonce("gf_select_mailchimp_form") ?>" );
                mysack.setVar( "list_id", listId);
                mysack.setVar( "form_id", formId);
                mysack.encVar( "cookie", document.cookie, false );
                mysack.onError = function() {jQuery("#mailchimp_wait").hide(); alert('<?php _e("Ajax error while selecting a form", "gravityformsmailchimp") ?>' )};
                mysack.runAJAX();

                return true;
            }

            function SetOptin(selectedField, selectedValue){

                //load form fields
                jQuery("#mailchimp_optin_field_id").html(GetSelectableFields(selectedField, 20));
                var optinConditionField = jQuery("#mailchimp_optin_field_id").val();

                if(optinConditionField){
                    jQuery("#mailchimp_optin_condition_message").hide();
                    jQuery("#mailchimp_optin_condition_fields").show();
                    jQuery("#mailchimp_optin_value").html(GetFieldValues(optinConditionField, selectedValue, 20));
                }
                else{
                    jQuery("#mailchimp_optin_condition_message").show();
                    jQuery("#mailchimp_optin_condition_fields").hide();
                }
            }

            function EndSelectForm(fieldList, form_meta){
                //setting global form object
                form = form_meta;

                if(fieldList){

                    SetOptin("","");

                    jQuery("#mailchimp_field_list").html(fieldList);
                    jQuery("#mailchimp_field_group").slideDown();

                }
                else{
                    jQuery("#mailchimp_field_group").slideUp();
                    jQuery("#mailchimp_field_list").html("");
                }
                jQuery("#mailchimp_wait").hide();
            }

            function GetFieldValues(fieldId, selectedValue, labelMaxCharacters){
                if(!fieldId)
                    return "";

                var str = "";
                var field = GetFieldById(fieldId);
                if(!field || !field.choices)
                    return "";

                var isAnySelected = false;

                for(var i=0; i<field.choices.length; i++){
                    var fieldValue = field.choices[i].value ? field.choices[i].value : field.choices[i].text;
                    var isSelected = fieldValue == selectedValue;
                    var selected = isSelected ? "selected='selected'" : "";
                    if(isSelected)
                        isAnySelected = true;

                    str += "<option value='" + fieldValue.replace(/'/g, "&#039;") + "' " + selected + ">" + TruncateMiddle(field.choices[i].text, labelMaxCharacters) + "</option>";
                }

                if(!isAnySelected && selectedValue){
                    str += "<option value='" + selectedValue.replace(/'/g, "&#039;") + "' selected='selected'>" + TruncateMiddle(selectedValue, labelMaxCharacters) + "</option>";
                }

                return str;
            }

            function GetFieldById(fieldId){
                for(var i=0; i<form.fields.length; i++){
                    if(form.fields[i].id == fieldId)
                        return form.fields[i];
                }
                return null;
            }

            function TruncateMiddle(text, maxCharacters){
                if(text.length <= maxCharacters)
                    return text;
                var middle = parseInt(maxCharacters / 2);
                return text.substr(0, middle) + "..." + text.substr(text.length - middle, middle);
            }

            function GetSelectableFields(selectedFieldId, labelMaxCharacters){
                var str = "";
                var inputType;
                for(var i=0; i<form.fields.length; i++){
                    fieldLabel = form.fields[i].adminLabel ? form.fields[i].adminLabel : form.fields[i].label;
                    inputType = form.fields[i].inputType ? form.fields[i].inputType : form.fields[i].type;
                    if(inputType == "checkbox" || inputType == "radio" || inputType == "select"){
                        var selected = form.fields[i].id == selectedFieldId ? "selected='selected'" : "";
                        str += "<option value='" + form.fields[i].id + "' " + selected + ">" + TruncateMiddle(fieldLabel, labelMaxCharacters) + "</option>";
                    }
                }
                return str;
            }

        </script>

        <?php

    }

    public static function add_permissions(){
        global $wp_roles;
        $wp_roles->add_cap("administrator", "gravityforms_mailchimp");
        $wp_roles->add_cap("administrator", "gravityforms_mailchimp_uninstall");
    }

    //Target of Member plugin filter. Provides the plugin with Gravity Forms lists of capabilities
    public static function members_get_capabilities( $caps ) {
        return array_merge($caps, array("gravityforms_mailchimp", "gravityforms_mailchimp_uninstall"));
    }

    public static function disable_mailchimp(){
        delete_option("gf_mailchimp_settings");
    }

    public static function select_mailchimp_form(){

        check_ajax_referer("gf_select_mailchimp_form", "gf_select_mailchimp_form");
        $form_id =  intval(rgpost("form_id"));
        list($list_id, $list_name) =  explode("|:|", rgpost("list_id"));
        $setting_id =  intval(rgpost("setting_id"));

        $api = self::get_api();
        if(!$api)
            die("EndSelectForm();");

        //getting list of all MailChimp merge variables for the selected contact list
        $merge_vars = $api->listMergeVars($list_id);

        //getting configuration
        $config = GFMailChimpData::get_feed($setting_id);

        //getting field map UI
        $str = self::get_field_mapping($config, $form_id, $merge_vars);

        //fields meta
        $form = RGFormsModel::get_form_meta($form_id);
        //$fields = $form["fields"];
        die("EndSelectForm('" . str_replace("'", "\'", $str) . "', " . GFCommon::json_encode($form) . ");");
    }

    private static function get_field_mapping($config, $form_id, $merge_vars){

        //getting list of all fields for the selected form
        $form_fields = self::get_form_fields($form_id);

        $str = "<table cellpadding='0' cellspacing='0'><tr><td class='mailchimp_col_heading'>" . __("List Fields", "gravityformsmailchimp") . "</td><td class='mailchimp_col_heading'>" . __("Form Fields", "gravityformsmailchimp") . "</td></tr>";
        if(!isset($config["meta"]))
            $config["meta"] = array("field_map" => "");

        foreach($merge_vars as $var){
            $selected_field = rgar($config["meta"]["field_map"], $var["tag"]);
            $required = $var["req"] == "Y" ? "<span class='gfield_required'>*</span>" : "";
            $error_class = $var["req"] == "Y" && empty($selected_field) && !empty($_POST["gf_mailchimp_submit"]) ? " feeds_validation_error" : "";
            $str .= "<tr class='$error_class'><td class='mailchimp_field_cell'>" . $var["name"]  . " $required</td><td class='mailchimp_field_cell'>" . self::get_mapped_field_list($var["tag"], $selected_field, $form_fields) . "</td></tr>";
        }
        $str .= "</table>";

        return $str;
    }

    public static function get_form_fields($form_id){
        $form = RGFormsModel::get_form_meta($form_id);
        $fields = array();

        //Adding default fields
        array_push($form["fields"],array("id" => "date_created" , "label" => __("Entry Date", "gravityformsmailchimp")));
        array_push($form["fields"],array("id" => "ip" , "label" => __("User IP", "gravityformsmailchimp")));
        array_push($form["fields"],array("id" => "source_url" , "label" => __("Source Url", "gravityformsmailchimp")));

        if(is_array($form["fields"])){
            foreach($form["fields"] as $field){
                if(is_array(rgar($field, "inputs"))){

                    //If this is an address field, add full name to the list
                    if(RGFormsModel::get_input_type($field) == "address")
                        $fields[] =  array($field["id"], GFCommon::get_label($field) . " (" . __("Full" , "gravityformsmailchimp") . ")");

                    foreach($field["inputs"] as $input)
                        $fields[] =  array($input["id"], GFCommon::get_label($field, $input["id"]));
                }
                else if(!rgar($field,"displayOnly")){
                    $fields[] =  array($field["id"], GFCommon::get_label($field));
                }
            }
        }
        return $fields;
    }

    private static function get_address($entry, $field_id){
        $street_value = str_replace("  ", " ", trim($entry[$field_id . ".1"]));
        $street2_value = str_replace("  ", " ", trim($entry[$field_id . ".2"]));
        $city_value = str_replace("  ", " ", trim($entry[$field_id . ".3"]));
        $state_value = str_replace("  ", " ", trim($entry[$field_id . ".4"]));
        $zip_value = trim($entry[$field_id . ".5"]);
        $country_value = GFCommon::get_country_code(trim($entry[$field_id . ".6"]));

        $address = $street_value;
        $address .= !empty($address) && !empty($street2_value) ? "  $street2_value" : $street2_value;
        $address .= !empty($address) && (!empty($city_value) || !empty($state_value)) ? "  $city_value" : $city_value;
        $address .= !empty($address) && !empty($city_value) && !empty($state_value) ? "  $state_value" : $state_value;
        $address .= !empty($address) && !empty($zip_value) ? "  $zip_value" : $zip_value;
        $address .= !empty($address) && !empty($country_value) ? "  $country_value" : $country_value;

        return $address;
    }

    public static function get_mapped_field_list($variable_name, $selected_field, $fields){
        $field_name = "mailchimp_map_field_" . $variable_name;
        $str = "<select name='$field_name' id='$field_name'><option value=''></option>";
        foreach($fields as $field){
            $field_id = $field[0];
            $field_label = esc_html(GFCommon::truncate_middle($field[1], 40));

            $selected = $field_id == $selected_field ? "selected='selected'" : "";
            $str .= "<option value='" . $field_id . "' ". $selected . ">" . $field_label . "</option>";
        }
        $str .= "</select>";
        return $str;
    }

    public static function export($entry, $form){
        //Login to MailChimp
        $api = self::get_api();
        if(!$api)
            return;

        //loading data class
        require_once(self::get_base_path() . "/data.php");

        //getting all active feeds
        $feeds = GFMailChimpData::get_feed_by_form($form["id"], true);
        foreach($feeds as $feed){
            //only export if user has opted in
            if(self::is_optin($form, $feed))
                self::export_feed($entry, $form, $feed, $api);
        }
    }

    public static function export_feed($entry, $form, $feed, $api){

        $double_optin = $feed["meta"]["double_optin"] ? true : false;
        $send_welcome = $feed["meta"]["welcome_email"] ? true : false;
        $email_field_id = $feed["meta"]["field_map"]["EMAIL"];
        $email = rgar($entry, $email_field_id);

        $merge_vars = array('');
        foreach($feed["meta"]["field_map"] as $var_tag => $field_id){

            $field = RGFormsModel::get_field($form, $field_id);
            if($field_id == intval($field_id) && RGFormsModel::get_input_type($field) == "address") //handling full address
                $merge_vars[$var_tag] = self::get_address($entry, $field_id);
            else if($var_tag != "EMAIL") //ignoring email field as it will be handled separatelly
                $merge_vars[$var_tag] = rgar($entry, $field_id);
        }

        $retval = $api->listSubscribe($feed["meta"]["contact_list_id"], $email, $merge_vars, "html", $double_optin, false, true, $send_welcome );

    }

    public static function uninstall(){

        //loading data lib
        require_once(self::get_base_path() . "/data.php");

        if(!GFMailChimp::has_access("gravityforms_mailchimp_uninstall"))
            die(__("You don't have adequate permission to uninstall MailChimp Add-On.", "gravityformsmailchimp"));

        //droping all tables
        GFMailChimpData::drop_tables();

        //removing options
        delete_option("gf_mailchimp_settings");
        delete_option("gf_mailchimp_version");

        //Deactivating plugin
        $plugin = "gravityformsmailchimp/mailchimp.php";
        deactivate_plugins($plugin);
        update_option('recently_activated', array($plugin => time()) + (array)get_option('recently_activated'));
    }

    public static function is_optin($form, $settings){
        $config = $settings["meta"];
        $operator = $config["optin_operator"];

        $field = RGFormsModel::get_field($form, $config["optin_field_id"]);
        $field_value = RGFormsModel::get_field_value($field, array());
        $is_value_match = RGFormsModel::is_value_match($field_value, $config["optin_value"]);

        return  !$config["optin_enabled"] || empty($field) || ($operator == "is" && $is_value_match) || ($operator == "isnot" && !$is_value_match);
    }


    private static function is_gravityforms_installed(){
        return class_exists("RGForms");
    }

    private static function is_gravityforms_supported(){
        if(class_exists("GFCommon")){
            $is_correct_version = version_compare(GFCommon::$version, self::$min_gravityforms_version, ">=");
            return $is_correct_version;
        }
        else{
            return false;
        }
    }

    protected static function has_access($required_permission){
        $has_members_plugin = function_exists('members_get_capabilities');
        $has_access = $has_members_plugin ? current_user_can($required_permission) : current_user_can("level_7");
        if($has_access)
            return $has_members_plugin ? $required_permission : "level_7";
        else
            return false;
    }

    //Returns the url of the plugin's root folder
    protected function get_base_url(){
        return plugins_url(null, __FILE__);
    }

    //Returns the physical path of the plugin's root folder
    protected function get_base_path(){
        $folder = basename(dirname(__FILE__));
        return WP_PLUGIN_DIR . "/" . $folder;
    }


}


if(!function_exists("rgget")){
function rgget($name, $array=null){
    if(!isset($array))
        $array = $_GET;

    if(isset($array[$name]))
        return $array[$name];

    return "";
}
}

if(!function_exists("rgpost")){
function rgpost($name, $do_stripslashes=true){
    if(isset($_POST[$name]))
        return $do_stripslashes ? stripslashes_deep($_POST[$name]) : $_POST[$name];

    return "";
}
}

if(!function_exists("rgar")){
function rgar($array, $name){
    if(isset($array[$name]))
        return $array[$name];

    return '';
}
}


if(!function_exists("rgempty")){
function rgempty($name, $array = null){
    if(!$array)
        $array = $_POST;

    $val = rgget($name, $array);
    return empty($val);
}
}


if(!function_exists("rgblank")){
function rgblank($text){
    return empty($text) && strval($text) != "0";
}
}
?>
