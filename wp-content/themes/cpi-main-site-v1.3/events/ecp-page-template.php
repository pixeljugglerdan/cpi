<?php
/**
*  If 'Default Events Template' is selected in Settings -> The Events Calendar -> Theme Settings -> Events Template, 
*  then this file loads the page template for all ECP views except for the individual 
*  event view.  Generally, this setting should only be used if you want to manually 
*  specify all the shell HTML of your ECP pages in this template file.  Use one of the other Theme 
*  Settings -> Events Template to automatically integrate views into your 
*  theme.
*
* You can customize this view by putting a replacement file of the same name (ecp-page-template.php) in the events/ directory of your theme.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }

?>	
<?php get_header(); ?>

<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h2>Events</h2></span>



		<div id='tribe-events-calendar-header' class="clearfix">
		<span class='tribe-events-calendar-buttons'> 
			<a class='tribe-events-button-on' href='<?php echo tribe_get_listview_link(); ?>'><?php _e('Event List', 'tribe-events-calendar'); ?></a>
			<a class='tribe-events-button-on' href='<?php echo tribe_get_gridview_link(); ?>'><?php _e('Calendar', 'tribe-events-calendar'); ?></a>
		</span>

		</div><!--tribe-events-calendar-header-->


</div>
<section id="page-full">
<?php tribe_events_before_html(); ?>
<?php include(tribe_get_current_template()); ?>
<?php tribe_events_after_html(); ?>
</section>
<?php get_footer(); ?>