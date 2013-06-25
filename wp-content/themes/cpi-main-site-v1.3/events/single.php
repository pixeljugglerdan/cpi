<?php
/*
 * The template for displaying events in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
		

<section id="page">
	
	<div id="share">
			<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_email"></a>
<a class="addthis_button_linkedin"></a>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone" g:plusone:count="false"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8fd85e198820c8"></script>
<!-- AddThis Button END -->

	</div>
	
	<h1><?php the_title(); ?></h1>


    	<?php
/**
* A single event.  This displays the event title, description, meta, and 
* optionally, the Google map for the event.
*
* You can customize this view by putting a replacement file of the same name (single.php) in the events/ directory of your theme.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }
?>
<span class="back"><a href="<?php echo tribe_get_events_link(); ?>"><?php _e('&laquo; Back to Events', 'tribe-events-calendar'); ?></a></span>				
<?php
	$gmt_offset = (get_option('gmt_offset') >= '0' ) ? ' +' . get_option('gmt_offset') : " " . get_option('gmt_offset');
 	$gmt_offset = str_replace( array( '.25', '.5', '.75' ), array( ':15', ':30', ':45' ), $gmt_offset );
 	if (strtotime( tribe_get_end_date(get_the_ID(), false, 'Y-m-d G:i') . $gmt_offset ) <= time() ) { ?><div class="event-passed"><?php  _e('This event has passed.', 'tribe-events-calendar'); ?></div><?php } ?>

<div id="tribe-events-event-meta" itemscope itemtype="http://schema.org/Event">
	<dl class="column">
		<?php if (tribe_get_start_date() !== tribe_get_end_date() ) { ?>
			<dt class="event-label event-label-start"><?php _e('Start:', 'tribe-events-calendar'); ?></dt> 
			<dd class="event-meta event-meta-start"><meta itemprop="startDate" content="<?php echo tribe_get_start_date( null, false, 'Y-m-d-h:i:s' ); ?>"/><?php echo tribe_get_start_date(); ?></dd>
			<dt class="event-label event-label-end"><?php _e('End:', 'tribe-events-calendar'); ?></dt>
			<dd class="event-meta event-meta-end"><meta itemprop="endDate" content="<?php echo tribe_get_end_date( null, false, 'Y-m-d-h:i:s' ); ?>"/><?php echo tribe_get_end_date(); ?></dd>						
		<?php } else { ?>
			<dt class="event-label event-label-date"><?php _e('Date:', 'tribe-events-calendar'); ?></dt> 
			<dd class="event-meta event-meta-date"><meta itemprop="startDate" content="<?php echo tribe_get_start_date( null, false, 'Y-m-d-h:i:s' ); ?>"/><?php echo tribe_get_start_date(); ?></dd>
		<?php } ?>
		<?php if ( tribe_get_cost() ) : ?>
			<dt class="event-label event-label-cost"><?php _e('Cost:', 'tribe-events-calendar'); ?></dt>
			<dd itemprop="price" class="event-meta event-meta-cost"><?php echo tribe_get_cost(); ?></dd>
		<?php endif; ?>
		<?php tribe_meta_event_cats(); ?>
		<?php if ( tribe_get_organizer_link( get_the_ID(), false, false ) ) : ?>
			<dt class="event-label event-label-organizer"><?php _e('Organizer:', 'tribe-events-calendar'); ?></dt>
			<dd class="vcard author event-meta event-meta-author"><span class="fn url"><?php echo tribe_get_organizer_link(); ?></span></dd>
      <?php elseif (tribe_get_organizer()): ?>
			<dt class="event-label event-label-organizer"><?php _e('Organizer:', 'tribe-events-calendar'); ?></dt>
			<dd class="vcard author event-meta event-meta-author"><span class="fn url"><?php echo tribe_get_organizer(); ?></span></dd>
		<?php endif; ?>
		<?php if ( tribe_get_organizer_phone() ) : ?>
			<dt class="event-label event-label-organizer-phone"><?php _e('Phone:', 'tribe-events-calendar'); ?></dt>
			<dd itemprop="telephone" class="event-meta event-meta-phone"><?php echo tribe_get_organizer_phone(); ?></dd>
		<?php endif; ?>
		<?php if ( tribe_get_organizer_email() ) : ?>
			<dt class="event-label event-label-email"><?php _e('Email:', 'tribe-events-calendar'); ?></dt>
			<dd itemprop="email" class="event-meta event-meta-email"><a href="mailto:<?php echo tribe_get_organizer_email(); ?>"><?php echo tribe_get_organizer_email(); ?></a></dd>
		<?php endif; ?>
		<dt class="event-label event-label-updated"><?php _e('Updated:', 'tribe-events-calendar'); ?></dt>
		<dd class="event-meta event-meta-updated"><span class="date updated"><?php the_date(); ?></span></dd>
		<?php if ( class_exists('TribeEventsRecurrenceMeta') && function_exists('tribe_get_recurrence_text') && tribe_is_recurring_event() ) : ?>
			<dt class="event-label event-label-schedule"><?php _e('Schedule:', 'tribe-events-calendar'); ?></dt>
         <dd class="event-meta event-meta-schedule"><?php echo tribe_get_recurrence_text(); ?> 
            <?php if( class_exists('TribeEventsRecurrenceMeta') && function_exists('tribe_all_occurences_link')): ?>(<a href='<?php tribe_all_occurences_link(); ?>'>See all</a>)<?php endif; ?>
         </dd>
		<?php endif; ?>
	</dl>
	
  

</div>



<div class="entry-content">

<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?>
	
	<div class="summary"><?php the_content(); ?></div>
	<?php if (function_exists('tribe_get_ticket_form') && tribe_get_ticket_form()) { tribe_get_ticket_form(); } ?>		
</div>
<?php if( function_exists('tribe_get_single_ical_link') ): ?>
   <a class="ical single" href="<?php echo tribe_get_single_ical_link(); ?>"><?php _e('iCal Import', 'tribe-events-calendar'); ?></a>
<?php endif; ?>
<?php if( function_exists('tribe_get_gcal_link') ): ?>
   <a href="<?php echo tribe_get_gcal_link(); ?>" class="gcal-add" title="<?php _e('Add to Google Calendar', 'tribe-events-calendar'); ?>"><?php _e('+ Google Calendar', 'tribe-events-calendar'); ?></a>
<?php endif; ?>
<div style="clear:both"></div>



    </section>
    
    <aside>

    	<div class="aside-box">
    	
    	<div id="tribe-events-event-meta" style="border:none;padding:0;" itemscope itemtype="http://schema.org/Event">
    	<dl class="" itemprop="location" itemscope itemtype="http://schema.org/Place">
		<?php if(tribe_get_venue()) : ?>
		<dt class="event-label event-label-venue"><?php _e('Venue:', 'tribe-events-calendar'); ?></dt> 
		<dd itemprop="name" class="event-meta event-meta-venue">
			<?php if( class_exists( 'TribeEventsPro' ) ): ?>
				<?php tribe_get_venue_link( get_the_ID(), class_exists( 'TribeEventsPro' ) ); ?>
			<?php else: ?>
				<?php echo tribe_get_venue( get_the_ID() ); ?>
			<?php endif; ?>
		</dd>
		<?php endif; ?>
		<?php if(tribe_get_phone()) : ?>
		<dt class="event-label event-label-venue-phone"><?php _e('Phone:', 'tribe-events-calendar'); ?></dt> 
			<dd itemprop="telephone" class="event-meta event-meta-venue-phone"><?php echo tribe_get_phone(); ?></dd>
		<?php endif; ?>
		<?php if( tribe_address_exists( get_the_ID() ) ) : ?>
		<dt class="event-label event-label-address">
			<?php _e('Address:', 'tribe-events-calendar') ?><br />
			<?php if( tribe_show_google_map_link( get_the_ID() ) ) : ?>
				<a class="gmap" itemprop="maps" href="<?php echo tribe_get_map_link(); ?>" title="<?php _e('Click to view a Google Map', 'tribe-events-calendar'); ?>" target="_blank"><?php _e('Google Map', 'tribe-events-calendar' ); ?></a>
			<?php endif; ?>
		</dt>
			<dd class="event-meta event-meta-address">
			<?php echo tribe_get_full_address( get_the_ID() ); ?>
			</dd>
		<?php endif; ?>
	</dl>
	
	
	   	<?php if( function_exists('tribe_the_custom_fields') && tribe_get_custom_fields( get_the_ID() ) ): ?>
	  	<?php tribe_the_custom_fields( get_the_ID() ); ?>
	<?php endif; ?>
	
	
	<?php if( tribe_embed_google_map( get_the_ID() ) ) : ?>
<?php if( tribe_address_exists( get_the_ID() ) ) { echo tribe_get_embedded_map(); } ?>
<?php endif; ?>
	</div>
    	</div>
    </aside>
	
<?php get_footer(); ?>