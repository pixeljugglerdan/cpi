<?php
/**
*  If 'Default Events Template' is selected in Settings -> The Events Calendar -> Theme Settings -> Events Template, 
*  then this file loads the page template for all for the individual 
*  event view.  Generally, this setting should only be used if you want to manually 
*  specify all the shell HTML of your ECP pages in this template file.  Use one of the other Theme 
*  Settings -> Events Template to automatically integrate views into your 
*  theme.
*
* You can customize this view by putting a replacement file of the same name (ecp-single-template.php) in the events/ directory of your theme.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }
?>
<?php get_header(); ?>
<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h2><a class="cpi-button" href="<?php bloginfo('url'); ?>/events/">Events</a> <?php echo $terms = get_the_term_list( $post->ID, 'casestudytype'); ?></h2></span>

</div>



<div id="container">
	<div id="content" class="tribe-events-event widecolumn">
		<?php the_post(); global $post; ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php include(tribe_get_current_template()); ?>
			<?php edit_post_link(__('Edit','tribe-events-calendar'), '<span class="edit-link">', '</span>'); ?>
		</div><!-- post -->
		<?php if(tribe_get_option('showComments','no') == 'yes'){ comments_template(); } ?>
	</div><!-- #content -->
</div><!--#container-->

<?php tribe_events_after_html(); ?>
<?php get_footer(); ?>
