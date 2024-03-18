<?php
/**
 * Template Name: Candidate Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<div class="SubsectorMain_Banner">
    <div class="Subsectorinner_banner">
        <div class="background_imgsubsector" style="background-image: url(<?php the_field('background_image'); ?>)">
          <div class="page-banner_text">
            <h2><?php the_field('banner_heading'); ?></h2>
            <div class="lets_talk">
                <a href="<?php the_field('banner_buton_url'); ?>">
                    <button>Let’s talk</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ap-shadow"></div>
    <div class="custom-shape-divider-bottom-1658436464">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<div class="about_homepageApi_section candidate-about">
    <div class="inner_about_homepageApi">
       <div class="about_future_plan">
        We will help you find the<span style="color: #fc2740;"> right job</span> and plan your <span style="color: #fc2740;">future career.</span>
    </div>
    <div id="left_video_client" class="heading_api_section">
        <img src="/wp-content/uploads/2022/10/Line-4.svg">
        <?php the_field('challenge_text_home'); ?>
        <div class="lets_talk">
            <a href="<?php the_field('banner_buton_url'); ?>">
                <button>Let’s talk</button></a>
            </div>
        </div>
        <div class="homepage_popup_video">
            <div class="right_video_lightbox" style="background-image: url(<?php the_field('right_video_thumbnail') ?>);">
                <a href="<?php the_field('right_video_url'); ?>" data-lity>
                    <img class="play_btn_video" src="/wp-content/uploads/2022/10/icons8-play-button-circled-1.svg"></a>
                </div>
            </div>
        </div>
    </div>


    <div class="weguide_section">
        <div class="weguide_left">
            <?php if( have_rows('we_guide_you_repeater') ): ?>   
                <?php while( have_rows('we_guide_you_repeater') ): the_row(); ?>
                    <div class="we_guide-row" style="background-image: url(<?php the_sub_field('we_guide_bg_image'); ?>);">
                        <div class="hp-tab-shadow"></div>
                        <div class="we_guide_information">
                           <div class="we_guide_title">
                            <?php the_sub_field('we_guide_title'); ?>
                        </div>
                        <div class="we_guide_description">
                           <?php the_sub_field('we_guide_description'); ?>
                       </div>
                   </div>
               </div>
           <?php endwhile; ?>
       <?php endif; ?>
   </div>
   <div class="we_guide_you_right_description">
    <h2>We <span style="color: #fc2740;">guide you</span> every step of the way, making you ready for your <span style="color: #fc2740;">next step.</h2>

        <div class="guide_seprater">
            <img src="/wp-content/uploads/2022/10/Line-4-1.svg">
        </div>
        <?php the_field('we_guide_you_right_description'); ?>

        <div class="we_guide_you_lets_talk_url">
            <a href="<?php the_field('we_guide_you_lets_talk_url'); ?>">
                <button>Let’s talk</button></a>
            </div>
        </div>
    </div>


    <div class="single_testimonial">
        <div class="inner_single_testimonial">
            <div class="testimonial_quote">
                <?php the_field('single_testimonial_quote'); ?>
            </div>
            <div class="bottom_testionials">
                <div class="col-md-2">
                 <img src="<?php the_field('single_testimonial_person_image'); ?>">
             </div>
             <div class="col-md-10">
                <div class="auhor_name"> 
                  <?php the_field('single_testimonial_name'); ?>
              </div>
              <div class="autho_title">
                 <?php the_field('single_testimonial_position'); ?>
             </div> 
         </div> 
     </div>
 </div>

 <div class="testimonaial_bg" style="background: linear-gradient(142.29deg, #131C28 0%, rgba(19, 28, 40, 0) 200%), url(<?php the_field('single_testimonial_bg'); ?>);">
    <a href="<?php the_field('single_testimonial_video_link'); ?>" data-lity>
        <img class="play_btn_video" src="/wp-content/uploads/2022/10/icons8-play-button-circled-1.svg">
    </a>
</div>

</div>



<div class="Ourlatest_roles">
    <div class="Ourlatest_roles-row">
        <h3>Our latest roles</h3>
    </div>
    <div class="center_jobs_slider">
        <?php 
        $consultant = get_post_meta($post->ID,'consultant_title',true); //using 'true' here is vital
        // args
        $args = array(
            'numberposts'   => -1,
            'post_type'     => 'job_listing',
            'meta_key'      => 'consultant_label',
            'meta_value'    => $consultant
        );


        // query
        $the_query = new WP_Query( $args );

        ?>
        <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="job-widget-card" <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_long ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_lat ); ?>">
                    <?php if ( get_option( 'job_manager_enable_types' ) ) { ?>
                        <?php $types = wpjm_get_the_job_types(); ?>
                        <?php if ( ! empty( $types ) ) : foreach ( $types as $type ) : ?>
                            <div class="job-type <?php echo esc_attr( sanitize_title( $type->slug ) ); ?>"><?php echo esc_html( $type->name ); ?></div>
                        <?php endforeach; endif; ?>
                    <?php } ?>
                    <p class="job-card-title"><?php the_title(''); ?></p>
                    <div class="job-card-salary">
                        <img src="/wp-content/uploads/2022/10/icons8-money-1-2.svg">
                        <?php the_job_salary(); ?>
                    </div>
                    <p class="job-card-location">
                        <img src="/wp-content/uploads/2022/10/icons8-location-2.svg">
                        <?php the_job_location(); ?></p>
                        <p class="job-card-type">
                            <img src="/wp-content/uploads/2022/10/icons8-workspace-2.svg">
                            <?php the_job_type(); ?></p>
                            <!-- <div class="job-card-date"><?php the_job_publish_date(); ?></div> -->
                            <div class="job-excerpt"><?php the_excerpt(__('(more…)')); ?></div>
                            <button class="job-card-button">View role
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(''); ?>" class="job-widget-card-link"></a>
                            </button>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
            </div>


            <script type="text/javascript">
                $(document).ready(function(){
                    $('.center_jobs_slider').slick({
                        centerMode: true,
                        slidesToShow: 3,
                        autoplay: true,
                        arrows: true,
                        autoplaySpeed: 3000,

                        responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                arrows: true,
                                centerMode: true,
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: true,
                                centerMode: true,
                                slidesToShow: 1
                            }
                        }
                        ]
                    });
                });
            </script>
            <div class="view_all_roles">
                <a href="/jobs">
                    <button>View all roles</button>
                </a>
            </div>
        </div>

        <script src="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="/wp-content/themes/rolestack-theme/js/rellax.min.js"></script>
        <script>
            jQuery(document).ready(function(){
                var rellax = new Rellax('.rellax', {
                    center: true
                });
            });
        </script>
        <?php get_footer(); ?>