<?php
/**
 * Template Name: Blog Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>

<div class="SubsectorMain_Banner">
    <div class="Subsectorinner_banner">
        <div class="single_banner_image">
            <div class="solicitor-card-image">
                <img src="<?php the_field('team_member_image'); ?> ">
            </div>
            <div class="banner_right_description">
                <h1><?php the_field('team_member_name') ?></h1>
                <h2><?php the_field('team_member_position') ?></h2>
                <div class="single_social_medoaiteam">
                    <a href="mailto:<?php the_field('social_email'); ?>">
                        <img src="/wp-content/uploads/2022/11/Group-73.svg">Email: <?php the_field('social_email'); ?></a>
                        <a href="tel:<?php the_field('social_phone'); ?>">
                            <img src="/wp-content/uploads/2022/11/Group-74.svg">Call: <?php the_field('social_phone'); ?></a>
                            <a target="_blank" href="<?php the_field('social_linkedin'); ?>">
                                <img src="/wp-content/uploads/2022/11/Group-72.svg">Connect</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hp-tab-shadow"></div>
                <div class="custom-shape-divider-bottom-1658436464">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                    </svg>
                </div>
            </div>
            <div class="post-content-row">
               <div class="pcr-main">
                  <div class="post-content-block">

                     <?php the_content(''); ?>
                 </div>
             </div>
             <div class="pcr-sidebar">
                <h2>Consultant</h2>
                <div class="key-contact-widget">
                    <?php
                    $post_objects = get_field('display_consultant');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <div class="solicitor-card">
                                <img src="<?php the_field('solicitor_profile'); ?>" title="<?php the_field('solicitor_name'); ?>" class="solicitor-card-image">
                                <div class="sc-text-block">
                                    <p class="sc-name"><?php the_field('consultant_title'); ?></p>
                                    <p class="sc-title"><?php the_field('solicitor_title'); ?></p>
                                    <a href="tel:<?php the_field('solicitor_number'); ?>" class="sc-phone" title="<?php the_field('solicitor_number'); ?>"><?php the_field('solicitor_number'); ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>


        <?php get_footer(); ?>
