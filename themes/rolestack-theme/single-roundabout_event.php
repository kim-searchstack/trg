<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <!-- Row 1 -->
    <div class="rb-headrow">
        <?php 
        $event_type = get_field('roundabout_type');
        $logo_url = '';

        // Check the event type and assign the corresponding logo URL
        switch($event_type) {
            case 'Agile':
            $logo_url = '/wp-content/uploads/2023/09/agile-roundabout.png';
            break;
            case 'Data':
            $logo_url = '/wp-content/uploads/2023/09/data-roundabout.png';
            break;
            case 'Engineering':
            $logo_url = '/wp-content/uploads/2023/09/engineering-roundabout.png';
            break;
            case 'UX':
            $logo_url = '/wp-content/uploads/2023/09/ux-roundabout.png';
            break;
            default:
                // Handle unexpected values or show a default logo
            break;
        }

        // Display the logo
        if($logo_url) {
            echo '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr($event_type) . ' Logo" class="roundabout-logo">';
        } else {
            // You might want to handle the situation where no logo URL is set.
            // Maybe display a default image or a text.
        }
        ?>
        <div class="rsp-text">
            <h1><?php the_field('roundabout_title'); ?></h1>
            <p> <img src="/wp-content/uploads/2023/10/icons8-rescheduling-a-task-1.svg" alt="" class="calendar-icon">
                <?php the_field('roundabout_date'); ?> - <?php the_field('roundabout_time'); ?> - <?php the_field('roundabout_time_end'); ?></p>
                <p> <img src="/wp-content/uploads/2023/10/icons8-location-12-1.svg" alt="" class="location-icon">
                   <a href="<?php the_field('location_url'); ?>"> <?php the_field('roundabout_location'); ?> </a></p>
               </div>
           </div>

           <!-- Row 2 -->
           <div class="ra-mb-row flex">
            <!-- Col1 -->
            <div class="ra_col_1">
                <h2>Event Information</h2>
                <hr>
                <p><?php the_content(''); ?></p>
            </div>
            <!-- Col2 -->
            <div class="ra_col_2">
                <h2>Hosted By</h2>
                <hr>
                <img src="<?php the_field('host_logo'); ?>" alt="Host Logo">
                <!-- Additional fields or buttons here -->
			<?php if( get_field('rsvp_link') ): ?>
				<div class="view_upcoming_event ">
				   <h2>RSVP</h2>
                <hr>
				<a href="<?php the_field('rsvp_link'); ?>"><button>
					Read More
					</button></a>
            </div>
				<?php endif; ?>
				</div>
        </div>

        <!-- Row 3 -->
        <?php if( get_field('speakers') ): ?>

            <div class="ra_speaker_row">
                <h2>Event Speakers</h2>
                <hr>
                <div class="speakers_flex">
                    <?php if( have_rows('speakers') ): ?>
                        <?php while( have_rows('speakers') ): the_row(); ?>
                            <div class="speaker-card">
                                <img src="<?php the_sub_field('speaker_image'); ?>" alt="<?php the_sub_field('speaker_name'); ?> Speaker Image" class="speaker_img">
                                <div class="speaker-text-box">
                                    <div class="linked-icon-speaker">
                                        <a href="<?php the_sub_field('linkedin_url'); ?>"> <img src="/wp-content/uploads/2023/10/linkedin-icon.svg" alt="" class="li-icon"> </a>
                                    </div>
                                    <p class="speaker-name"><?php the_sub_field('speaker_name'); ?></p>
                                    <p class="speaker-title"><?php the_sub_field('speaker_title'); ?></p>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- Be a Speaker Box -->
                    <!-- Add your code here -->
                </div>
            </div>
        <?php endif; ?>

        
        <!-- Row 4 -->
        <div class="ra_upcoming_event">
            <h2>Other Upcoming Events</h2>
            <hr>
            <!-- Custom Query for Other Upcoming Events -->
            <?php
            $args = array(
                'post_type' => 'roundabout_event',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
            // Add additional query args here (e.g. meta query for date)
            );
            $upcoming_events = new WP_Query($args);
            while ($upcoming_events->have_posts()) : $upcoming_events->the_post(); ?>
              <div class="all_event_cpt">
                <div class="col-md-2 image_event">
                    <?php
                    $image_url = "";
                    $option = get_field("roundabout_type");

                    if($option=="Agile"){
                      $image_url = "/wp-content/uploads/2023/09/agile-roundabout.png";
                  }
                  else if($option=="Data"){
                      $image_url = "/wp-content/uploads/2023/09/data-roundabout.png";
                  }
                  else if($option=="Engineering"){
                    $image_url = "/wp-content/uploads/2023/09/engineering-roundabout.png";
                }
                else if($option=="UX"){
                  $image_url = "/wp-content/uploads/2023/09/ux-roundabout.png";
              }

              ?>
              <img src="<?php echo $image_url; ?>">

          </div>
          <div class="col-md-5 title_eventcat">
            <div class="event_category_single">
                <?php the_field('roundabout_type'); ?>
            </div>
            <div class="event_title_single">
                <?php the_field('roundabout_title'); ?>
            </div>

        </div>
        <div class="col-md-3 date_venue_event">
            <div class="get_event_date_time">
                <?php the_field('roundabout_date'); ?> - <?php the_field('roundabout_time'); ?> 
            </div>
            <div class="event_loc_single">
                <a href="<?php the_field('location_url'); ?>"><?php the_field('roundabout_location'); ?></a>
            </div>
        </div>
        <div class="col-md-2 more_info_event">
            <a href="<?php the_permalink(); ?>">More Information <img src="/wp-content/uploads/2023/10/arrow_back.png"></a>
        </div>
        <a class="permanlonk_full_event" href="<?php the_permalink(); ?>"></a>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
