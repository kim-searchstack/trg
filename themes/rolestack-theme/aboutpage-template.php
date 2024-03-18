<?php
/**
 * Template Name: About Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<section class="page-banner">
    <div class="inner_page_banner">
       <div class="banner_left_page">
        <div class="left_babner_title animate-on-scroll" data-delay="1">
            <?php the_field('banner_main_title'); ?>
        </div>
        <div class="left_banner_desc animate-on-scroll" data-delay="2">
            <?php the_field('banner_desc'); ?>
        </div>
        <div class="banner_buttons animate-on-scroll" data-delay="3">
            <a href="<?php the_field('banner_button'); ?>"><button class="view_upcoming_btn">Get in contact</button></a>
        </div>
    </div> 
    <div class="right_banner_row animate-on-scroll" data-delay="4">
        <img src="<?php the_field('banner_image'); ?>">
    </div>
    <img src="/wp-content/uploads/2023/08/Group-2-4.svg" alt="" class="node-graphic-01">
    <img src="/wp-content/uploads/2023/08/Group-3-2.svg" alt="" class="node-graphic-02">
    <div class="gradient-sector"></div>
    <div class="noise-gen"></div>
</div>
</section>

<section class="about_section">
    <div class="inner_about_section">
        <div class="left_about_section animate-on-scroll" data-delay="4">
            <?php the_field('about_section'); ?>
            <div class="banner_buttons animate-on-scroll" data-delay="5">
                <a href="<?php the_field('banner_button'); ?>">
                    <button class="left-btn animate-on-scroll" data-delay="6">Get in touch</button>
                </a>
            </div>
        </div>
        <div class="right_about_sec animate-on-scroll" data-delay="7">
            <img src="<?php the_field('about_image'); ?>">
        </div>
    </div>
</section>

<section class="Our_Core_Values">
    <div class="inner_core_value">
        <div class="core_title animate-on-scroll" data-delay="8">
            Our <span style="color: #A79BF5;">Core Values</span><br> Driving our success?
        </div>
    </div>
    <div class="value-grid">
        <div class="value-block">
            <img src="/wp-content/uploads/2023/09/Group-127.svg" alt="" class="value-icon animate-on-scroll" data-delay="9">
            <p class="value-text animate-on-scroll" data-delay="10"> <span>We</span> do the right thing.</p>
        </div>
        <div class="value-block">
            <img src="/wp-content/uploads/2023/09/Group-131.svg" alt="" class="value-icon animate-on-scroll" data-delay="11">
            <p class="value-text animate-on-scroll" data-delay="12"> <span>We’re</span>  driven by curiosity.</p>
        </div>
        <div class="value-block">
            <img src="/wp-content/uploads/2023/09/Group-129.svg" alt="" class="value-icon animate-on-scroll" data-delay="13">
            <p class="value-text animate-on-scroll" data-delay="14"> <span>We</span> build meaningful connections.</p>
        </div>
        <div class="value-block">
            <img src="/wp-content/uploads/2023/09/Group-130.svg" alt="" class="value-icon animate-on-scroll" data-delay="14">
            <p class="value-text animate-on-scroll" data-delay="15"> And<span> We</span> LOVE it!</p>
        </div>
    </div>
</section>


<section class="trg_story">
    <div class="inner_trg_story">
        <div class="trg_title animate-on-scroll" data-delay="16">
            The trg <span style="color: #59CFAF;">Story</span>
        </div>
        <div class="trg_story_repeater">
         <?php if( have_rows('trg_story_repeater') ): ?>   
            <?php while( have_rows('trg_story_repeater') ): the_row(); ?>
                <div class="trg_story_info animate-on-scroll" data-delay="17" style="background-image: url(<?php the_sub_field('bg_image'); ?>)">
                    <div class="trg_story_inner">
                        <div class="year_trg animate-on-scroll" data-delay="18">
                            <?php the_sub_field('year'); ?>
                        </div>
                        <div class="title_trg animate-on-scroll" data-delay="19">
                            <?php the_sub_field('title'); ?>
                        </div>
                    </div>
                    <div class="trg_storyshadow"></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <div class="swipe-container">
            <p class="swipe-para">Swipe</p>
            <img src="https://www.trg-uk.com/wp-content/uploads/2023/12/icons8-swipe-right-gesture-1.svg" alt="" class="swipe-img">
        </div>
</div>
</section>

<section class="meet_team-row">
    <div class="inner_meet_team">
        <div class="inner_Opportunities_Await">
            <div class="opp_title animate-on-scroll" data-delay="18">Meet the Team</div>
            <div class="jobns_desc animate-on-scroll" data-delay="19">Meet the team driving the success of our clients and<br> candidates.</div>
        </div>
        <div class="team-contact-widget">
        <?php
           $post_objects = get_field('lead_solicitor');
           if( $post_objects ): ?>
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <div class="team-consultant-card">
                    <div class="team-tab-shadow"></div>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                    <div class="team_meet_row">
                        <div class="member_img"><img src="<?php the_field('member_image'); ?>"></div>
                        <div class="member_all_data">
                            <div class="social_media_team" data-delay="19">

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
                           <div class="teammember-name" data-delay="20"><?php the_field('member_name'); ?> </div>
                           <div class="teammember-title" data-delay="21"><?php the_field('member_position'); ?> </div>
                           <div class="member_description" data-delay="22"> <?php echo $excerpt = wp_trim_words( get_field('member_desc' ), $num_words = 150, $more = '...' ); ?></div>

                       </div>
                   </div>
               </div>
               <?php endforeach; ?>
         <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
     <?php endif; ?>
   </div>
</div>
</section>

<section class="Engage_Innovation">
    <div class="inner_Engage_Innovation">
        <div class="col-md-6 left_roundboutd animate-on-scroll" data-delay="23">
            <img src="<?php the_field('logo_roundbout'); ?>">
            <div class="engage_innovation_text animate-on-scroll" data-delay="24">
                <?php the_field('engage_innovation'); ?>
            </div>
            <a class="home_more_info animate-on-scroll" data-delay="25" href="<?php the_field('more_info_link'); ?>"><button>More information</button></a>
        </div>
        <div class="col-md-6 right_image_engage animate-on-scroll" data-delay="26">
            <img src="<?php the_field('right_image_engage'); ?>">
        </div>
    </div>
</section>

<?php get_footer(); ?>  