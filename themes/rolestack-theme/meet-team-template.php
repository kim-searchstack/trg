<?php
/**
 * Template Name: Meet Team Template
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


<section id="our_team" class="meet_team-row">
    <div class="inner_meet_team">
       <div class="team-contact-widget animate-on-scroll" data-delay="5">
           <?php
           $post_objects = get_field('lead_solicitor');
           if( $post_objects ): ?>
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                
                <div class="team-consultant-card animate-on-scroll" data-delay="6">
                    <div class="team-tab-shadow"></div>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                    <div class="team_meet_row animate-on-scroll" data-delay="7">
                        <div class="member_img animate-on-scroll" data-delay="8"><img src="<?php the_field('member_image'); ?>"></div>
                        <div class="member_all_data animate-on-scroll" data-delay="9">
                            <div class="social_media_team animate-on-scroll" data-delay="10">

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
                         <div class="teammember-name animate-on-scroll" data-delay="11"><?php the_field('member_name'); ?> </div>
                         <div class="teammember-title animate-on-scroll" data-delay="12"><?php the_field('member_position'); ?> </a> </div>
                         <div class="member_description animate-on-scroll" data-delay="13"><?php echo $excerpt = wp_trim_words( get_field('member_desc' ), $num_words = 150, $more = '...' ); ?></a></div>

                     </div>
                 </div>
             </div>
             
         <?php endforeach; ?>
         <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
     <?php endif; ?>
 </div>
</div>
</section>

<?php get_footer(); ?>