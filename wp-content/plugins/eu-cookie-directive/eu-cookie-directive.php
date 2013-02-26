<?php
/*
Plugin Name:  EU Cookie Directive
Plugin URI:   http://www.kinocreative.co.uk
Description:  A plugin to display a notification to the user about the usage of cookies on the site. It allows the site admin to easily conform with the <a href='http://www.ico.gov.uk/news/latest_news/2011/must-try-harder-on-cookies-compliance-says-ico-13122011.aspx'>EU Cookie Directive</a>.
Version:      1.1.4
Author:       Richard Telford, Chris Thompson
Author URI:   http://www.kinocreative.co.uk

Copyright (C) 2011-2012, Richard Telford
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of Joost de Valk or Yoast nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

class EU_Cookie_Directive
{
	var $plugin_name 		= "EU Cookie Directive";
	var $plugin_shortname 	= "ecd";
	var $plugin_version		= "1.1.4";
	
	var $unknown_cookies 	= array();
	
	var $cookie_message		= "We use cookies to ensure that we give you the best experience on our website. If you continue without changing your settings, we’ll assume that you are happy to receive all cookies on the BBC website. However, if you would like to, you can change your cookie settings at any time. To find out more about the cookies we use, see our <a href='/privacy/'>privacy policy</a>.";
	var $cookies = array(
		array(
			"name"			=> "wp-settings-3",
			"description" 	=> "",
			"group"			=> "WordPress"
		),
		
		array(
			"name"			=> "wp-settings-time-3",
			"description" 	=> "",
			"group"			=> "WordPress"
		),
				
		array(
			"name"			=> "wordpress_test_cookie",
			"description" 	=> "",
			"group"			=> "WordPress"
		),
		
		array(
			"name"			=> "__utma",
			"description" 	=> "",
			"group"			=> "Google Analytics"
		),
		
		array(
			"name"			=> "__utmb",
			"description" 	=> "",
			"group"			=> "Google Analytics"
		),
		
		array(
			"name"			=> "__utmc",
			"description" 	=> "",
			"group"			=> "Google Analytics"
		),
		
		array(
			"name"			=> "__utmv",
			"description" 	=> "",
			"group"			=> "Google Analytics"
		),
		
		array(
			"name"			=> "__utmz",
			"description" 	=> "",
			"group"			=> "Google Analytics"
		),
	);
	
	private $plugin_dir, $plugin_url;
	
	function EU_Cookie_Directive()
	{
		$this->__construct();
	}
	function __construct()
	{
		$this->plugin_dir = str_replace("\\", "/", dirname(__FILE__));
		$this->plugin_url = plugins_url()."/".basename(dirname(__FILE__));
		
		
		if(!is_admin() && !strstr($_SERVER['REQUEST_URI'], "wp-login.php"))
			add_action("init", 					array(&$this, "init"));
			
		add_action('admin_init', 			array(&$this, "admin_init"));
		add_action('admin_menu', 			array(&$this, "admin_menu"));
		add_action("wp_dashboard_setup", 	array(&$this, "wp_dashboard_setup"));
	}
	
	function init()
	{
		$this->enqueue_styles();
		
		// THIS WILL HANDLE COOKIE CHECKING / SETTING VIA JAVASCRIPT
		$this->enqueue_scripts();
		
		// THIS WILL HANDLE COOKIE CHECKING / SETTING VIA PHP
		$this->check_cookies();
		
	}
	
	function check_cookies()
	{
		
		// GET ECD COOKIE
		$ecd_cookie = $_COOKIE['ecd_opt_in'];
		
		// IF ECD COOKIE NOT SET
		if(!$ecd_cookie)
		{
			// CLEAR COOKIES
			foreach($_COOKIE as $k=>$v)
			{
				unset($_COOKIE[$v['name']]);
			}
		}
	}
	
	function admin_init()
	{
		// SET DEFAULTS
	    if( !get_option( $this->plugin_shortname . 'settings' ) )
	    {
			add_option($this->plugin_shortname."settings", array("cookie_message" => $this->cookie_message, "cookies" => $this->cookies));
	    }	 
	 	$this->register_settings();
		$this->enqueue_admin_scripts();
		
	}
	
	function wp_dashboard_setup()
	{
		
		// SEE IF THERE ARE ANY UNKNOWN COOKIES BEFORE ADDING THE UNKNOWN COOKIES WIDGET
		$settings = get_option( $this->plugin_shortname . 'settings' );
		if(is_array($settings['cookies']))
		{
			foreach($settings['cookies'] as $x)
			{
				if(!empty($x['name']))
					$cookie_names[] = $x['name'];
			}
		}
		
		if(is_array($_COOKIE))
		{
			foreach($_COOKIE as $k=>$v)
			{
				if(!in_array($k, $cookie_names))
				{
					$this->unknown_cookies[] = $k;
				}
			}
		}
		
		if($this->unknown_cookies)
			wp_add_dashboard_widget('dashboard_widget', 'EU Cookie Directive Plugin', array(&$this, 'unknown_cookies_detected_dashboard_widget'));
		
	
	}
	
	function ecd_cookie_table($atts)
	{
		$settings = get_option("ecdsettings");
		if(is_array($settings['cookies']))
		{
			ob_start();
			?>
			<table id="ecd-cookie-table">
				<tr>
					<th>Name</th>
					<th>Group</th>
					<th>Description</th>
				</tr>
			<?php
			foreach($settings['cookies'] as $x)
			{
				if(!empty($x['name']))
				{
					?>
					<tr >
						<td><?php print $x['name']; ?></td>
						<td><?php print $x['group']; ?></td>
						<td><?php print $x['description']; ?></td>
					</tr>
					<?php
				}	
				$i++;
			}
			?>
			</table>
			<?php
			$string=ob_get_contents();
  			ob_end_clean();
			
		}
	
		return $string;
	}
	
	function unknown_cookies_detected_dashboard_widget()
	{
		//print_r($this->unknown_cookies);
		if(is_array($this->unknown_cookies))
		{
			?>
			<p>The following cookies were detected and are not declared:</p>
			<ul>
			<?php
			foreach($this->unknown_cookies as $x)
			{
				?>
				<li><?php print $x; ?></li>
				<?php
			}
			?>
			</ul>
			<p>To declare a cookie go to Settings > EU Cookie Directive.</p>
			<?php
		}
	}
	
	function enqueue_admin_scripts()
	{
		wp_deregister_script("eu-cookie-directive-admin");
		wp_register_script( 'eu-cookie-directive-admin', "{$this->plugin_url}/admin.js", array("jquery"), null, true);
		wp_enqueue_script( 'eu-cookie-directive-admin' );
	}
	
	function admin_menu()
	{
	    add_options_page('Settings', $this->plugin_name, 'manage_options', "ecd_options_page_slug", array(&$this, "ecd_options_page_callback"));
	}

	function enqueue_styles()
	{
		wp_deregister_style("eu-cookie-directive");
		wp_register_style('eu-cookie-directive', "{$this->plugin_url}/style.css");
		wp_enqueue_style( 'eu-cookie-directive');
	}
	
	function enqueue_scripts()
	{
		wp_deregister_script("eu-cookie-directive");
		wp_register_script( 'eu-cookie-directive', "{$this->plugin_url}/script.js", array("jquery"), null, true);
		wp_enqueue_script( 'eu-cookie-directive' );			
		wp_localize_script( 'eu-cookie-directive', 'ecd_params', get_option($this->plugin_shortname."settings"));
		wp_localize_script( 'eu-cookie-directive', 'ecd_cookies', $this->cookies );
	}
	
	function enqueue_admin_styles()
	{
		//wp_register_style('gpfeedback-admin-css', get_bloginfo("template_url")."/plugins/gp-feedback/admin.css");
		//wp_enqueue_style( 'gpfeedback-admin-css');
	}
	
	function clear_cookies()
	{
		// SHOULD USE THE OPTIONS INSTEAD OF HARD CODE	
		foreach($this->cookies as $k=>$v)
		{
			if(isset($_COOKIE[$v['name']]))
			{
				unset($_COOKIE[$v['name']]);
				//print "Clearing '{$x}' cookie<br/>";
			}
		}
		
		//print_r(get_option($this->plugin_shortname."settings"));
		
	}
	
	
	
	
	
	function register_settings()
	{
	    // flag our settings
	    register_setting(
	        $this->plugin_shortname . 'settings',   		// group
	        $this->plugin_shortname . 'settings',   		// name of options
	        array(&$this, 'ecd_validate_settings')   		// validation callback
	    );
	
	    add_settings_section(
	        $this->plugin_shortname . 'options',    		// section ID
        	'Settings',                   					// title
	        array(&$this,'ecd_edit_options'),       		// display callback
	        $this->plugin_shortname . '_options_page_slug'  // page name (do_settings_sections)
	    );
	
	    // BE REALLY NICE TO GRAB AN ARRAY OF OPTIONS AND LOOP THROUGH THEM
	    add_settings_field(
	        $this->plugin_shortname . '_cookie_message',		// unique field ID
	        'Cookie message',                      				// title
	        array(&$this, 'ecd_settings_field_cookie_message'),   		// input box display callback
	        $this->plugin_shortname . '_options_page_slug', // page name (as above)
	        $this->plugin_shortname . 'options'     		// first arg to add_settings_section
	    );
		
		add_settings_field(
	        $this->plugin_shortname . '_cookies',		// unique field ID
	        'Cookies',                      				// title
	        array(&$this, 'ecd_settings_field_cookies'),   		// input box display callback
	        $this->plugin_shortname . '_options_page_slug', // page name (as above)
	        $this->plugin_shortname . 'options'     		// first arg to add_settings_section
	    );
	}
		
	function ecd_options_page_callback()
	{
		?>
		<div class="wrap">
			<div class="icon32" id="icon-options-general"></div> 
			<h2><?php print $this->plugin_name; ?></h2>
			<form method="post" action="options.php"> 
				
				<?php settings_fields($this->plugin_shortname . 'settings' ); ?>
				<?php do_settings_sections( $this->plugin_shortname ."_options_page_slug" ); ?>
				
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
				</p>
				
			</form>
		</div>
		<?php
	}
	
	function ecd_edit_options()
	{  }
	
	function ecd_validate_settings($input)
	{
	   return $input;
	}

	function ecd_settings_field_cookie_message()
	{
		$settings = get_option( $this->plugin_shortname . 'settings' );
	    ?>
	    <div>
	        <label for="<?php echo $this->plugin_shortname . 'settings[cookie_message]'; ?>">
	        	<textarea style="width: 600px; height: 100px" id="<?php echo $this->plugin_shortname . 'settings[cookie_message]'; ?>" name="<?php echo $this->plugin_shortname . 'settings[cookie_message]'; ?>"><?php echo $settings['cookie_message']; ?></textarea>
	        </label>
	    </div>
		<?php
	}
	
	function ecd_settings_field_cookies()
	{
		$settings = get_option( $this->plugin_shortname . 'settings' );
		
		//print_r($settings);
	    ?>
	    <div>
	    	<table id="<?php print $this->plugin_shortname."-cookie-table"; ?>">
	    		<tr>
	    			<th>Name</th>
	    			<th>Usage</th>
	    			<th>Description</th>
	    			<th></th>
	    		</tr>
	        <?php
	        // GO THROUGH LIST OF COOKIES - NEED TO ADD DESCRIPTIONS FOR THEM
	        $i=0;
	        foreach($settings['cookies'] as $x)
			{
				if(!empty($x['name']))
				{
					?>
					<tr id="<?php print $i; ?>">
						<td><?php print $x['name']; ?><input type="hidden" name="<?php print $this->plugin_shortname . "settings[cookies][{$i}][name]"; ?>" value="<?php print $x['name']; ?>" placeholder="Cookie name"></td>
						<td><?php print $x['group']; ?><input type="hidden" name="<?php print $this->plugin_shortname . "settings[cookies][{$i}][group]"; ?>" value="<?php print $x['group']; ?>" placeholder="Cookie group"></td>
						<td><textarea name="<?php print $this->plugin_shortname."settings[cookies][{$i}][description]"; ?>" placeholder="Cookie description"><?php print $x['description']; ?></textarea></td>
						<td><a href="#" class="ecd-remove-cookie-row">remove</a></td>
					</tr>
					<?php
				}	
				$i++;
			}
	        ?>
	       		<tr id="<?php print $i; ?>" class="hide">
					<td><input type="text" name="<?php print $this->plugin_shortname . "settings[cookies][{$i}][name]"; ?>" value="" placeholder="Cookie name"></td>
					<td><input type="text" name="<?php print $this->plugin_shortname . "settings[cookies][{$i}][group]"; ?>" value="" placeholder="Cookie group"></td>
					<td><textarea name="<?php print $this->plugin_shortname."settings[cookies][{$i}][description]"; ?>" placeholder="Cookie description"></textarea></td>
					<td></td>
				</tr>
	       </table>
	       
	       <p><a id="<?php print $this->plugin_shortname."-add-cookie-row"; ?>" href="#">Add cookie</a></p>
	       
	    </div>
		<?php
	}
}

if(defined('ABSPATH') && defined('WPINC'))
{
	$eu_cookie_directive = new EU_Cookie_Directive();
	add_shortcode('ecd-cookie-table', array("EU_Cookie_Directive", "ecd_cookie_table"));
}
?>