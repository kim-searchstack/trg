<?php
/**
 * Template Name: Sector Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<section class="page-banner">
    <div class="inner_page_banner">
       <div class="banner_left_page animate-on-scroll" data-delay="1">
        <img src="<?php the_field('sector_icon'); ?>" alt="" class="sector-icon">
        <div class="left_babner_title animate-on-scroll" data-delay="2">
            <?php the_field('banner_main_title'); ?>
        </div>
        <div class="left_banner_desc animate-on-scroll" data-delay="3">
            <?php the_field('banner_desc'); ?>
        </div>
        <div class="banner_buttons animate-on-scroll" data-delay="4">
            <a target="_blank" href="<?php the_field('banner_button'); ?>"><button class="view_upcoming_btn">Join Our Community</button></a>
        </div>
    </div> 
    <div class="right_banner_row animate-on-scroll" data-delay="5">
        <img src="<?php the_field('banner_image'); ?>">
    </div>
    <img src="/wp-content/uploads/2023/08/Group-2-4.svg" alt="" class="node-graphic-01">
    <img src="/wp-content/uploads/2023/08/Group-3-2.svg" alt="" class="node-graphic-02">
    <div class="gradient-sector"></div>
    <div class="noise-gen"></div>
</div>
</section>

<section class="about_Sector_Section">
    <div class="inner_Sector_sec">
        <div class="abut_Sector_left animate-on-scroll" data-delay="5">
            <?php the_field('about_sector'); ?>
            <div class="view_upcoming_event animate-on-scroll" data-delay="6">
                <a href="/contact/"><button class="view_upcoming_btn">Let's discuss your next hire</button></a>
            </div>
        </div>
        <div class="roles-place-container">
            <div class="inner_Roleswe_place animate-on-scroll" data-delay="7">
                Roles we place:
            </div>
            <div class="all_roles animate-on-scroll" data-delay="8">
                <?php if( have_rows('roles_we_place') ): ?>   
                    <?php while( have_rows('roles_we_place') ): the_row(); ?>
                        <button class="roles_uttons"><?php the_sub_field('title'); ?></button>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <div class="Roleswe_place">

        <div class="about_Sec-right">
            <div class="upciming-evebt">
                <div class="inner_upciming animate-on-scroll" data-delay="9">
                    Upcoming <?php the_title('') ?> Events
                </div>
                <div class="all_engering_events animate-on-scroll" data-delay="10">
                 <?php echo do_shortcode('[ecs-list-events limit="2" eventdetails="true" excerpt="150" venue="true" order="DESC"]'); ?>
             </div>
         </div>
         <div class="event_btn_bottom animate-on-scroll" data-delay="11">
            <a href="/events/"><button class="view_all_events">View all events</button></a>
        </div>
    </div>
</div>

<img src="/wp-content/uploads/2023/06/Mask-group1.png" alt="" class="trg-mark-icon">

</section>



<section class="all_jobs">
    <div class="inner_all_jobs">
        <div class="opp_title animate-on-scroll" data-delay="12">View all our <span style="color: #A79BF5;"><?php the_title('') ?></span> roles</div>
        <div class="all_jobs_home animate-on-scroll" data-delay="13">
            <?php echo do_shortcode('[jobs per_page="100" categories="'.get_field('live_role_shortcode').'"]'); ?>
        </div>
    </div>
</section>

<section class="sector_team-row">
    <div class="inner_sector_team-row">
        <div class="inner_Opportunities_Await animate-on-scroll" data-delay="14">
            <div class="col-md-6 meet_team_tile animate-on-scroll" data-delay="15">Meet our <br><span style="color: #A79BF5;"><?php the_title(); ?></span> team</div>
            <div class="col-md-6 button_all_team animate-on-scroll" data-delay="16"><a href="/meet-the-team/"><button>View our team</button></a> </div>
        </div>
        <div class="team-contact-widget">
          <?php
          $post_objects = get_field('sector_team');
          if( $post_objects ): ?>
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                
                <div class="team-consultant-card animate-on-scroll" data-delay="17">
                    <div class="team-tab-shadow"></div>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                    <div class="team_meet_row">
                        <div class="member_img animate-on-scroll" data-delay="18"><img src="<?php the_field('member_image'); ?>"></div>
                        <div class="member_all_data">
                            <div class="social_media_team animate-on-scroll" data-delay="19">

                                <?php if( get_field('member_linkedin') ): ?>
                                    <a target="_blank" href="<?php the_field('member_linkedin') ?>"><img src="/wp-content/uploads/2023/06/Group-24.png"></a>
                                <?php endif; ?>

                                <?php if( get_field('member_phone') ): ?>
                                 <a href="tel:<?php the_field('member_phone') ?>"><img src="/wp-content/uploads/2023/06/Group-47.png"></a>
                             <?php endif; ?>

                             <?php if( get_field('member_email') ): ?>
                                 <a href="mailto:<?php the_field('member_email') ?>"><img src="/wp-content/uploads/2023/06/Group-74.png"></a>
                             <?php endif; ?>

                         </div>
                         <div class="teammember-name animate-on-scroll" data-delay="20"><?php the_field('member_name'); ?></div>
                         <div class="teammember-title animate-on-scroll" data-delay="21"><?php the_field('member_position'); ?></div>
                         <div class="member_description animate-on-scroll" data-delay="22"><?php echo $excerpt = wp_trim_words( get_field('member_desc' ), $num_words = 150, $more = '...' ); ?></div>

                     </div>
                 </div>
             </div>
         <?php endforeach; ?>
         <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
     <?php endif; ?>
 </div>
</div>
</section>


<section id="sector_insight" class="Opportunities_Await">
    <div class="inner_Opportunities_Await">
        <div class="opp_title col-md-6 animate-on-scroll" data-delay="23">Latest <span style="color: #59CFAF;"><?php the_title(); ?> <br>Insights </span></div>
        <div class="col-md-6 button_all_team animate-on-scroll" data-delay="24"><a href="/insight-hub/"><button>View all insights</button></a> </div>

    </div>

    <div class="row_insight">
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => '3',
            'paged' => 1,
        );
        $blog_posts = new WP_Query( $args );
        ?>

        <?php if ( $blog_posts->have_posts() ) : ?>
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="insight-card animate-on-scroll" data-delay="25">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                    <div class="post_only">
                       <div class="services_category animate-on-scroll" data-delay="26">
                        <?php 
                        $category_detail=get_the_category( $post->ID );//$post->ID
                        foreach($category_detail as $cd){?>
                            <span><?php echo $cd->cat_name; ?></span>
                        <?php }
                        ?>
                    </div>
                    <div class="sc-name animate-on-scroll" data-delay="27"><?php the_title(); ?></div>
                    <div class="sc-title animate-on-scroll" data-delay="28"><?php $content = get_the_content(); ?>
                    <?php
                    preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                    echo $abstract[0] . '...';
                    ?> 
                </div>
                <div class="view_role_btn animate-on-scroll" data-delay="29">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <button class="view_casestudy animate-on-scroll" data-delay="30">Read article </button>
                    </a>
                </div>
                <div id="row-all-team" class="button_withicon casestudy_button animate-on-scroll" data-delay="31">
                    <a href="<?php the_permalink(); ?>" class="hph-link cs-link"></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
</section>

<?php get_footer(); ?>
