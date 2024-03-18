<?php
/**
 * Single view job meta box.
 *
 * Hooked into single_job_listing_start priority 20
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-single-job_listing-meta.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @since       1.14.0
 * @version     1.28.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;
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
                    <ul class="job-listing-meta meta">
                        <?php if ( is_position_filled() ) : ?>
                            <li class="position-filled"><?php _e( 'This position has been filled', 'wp-job-manager' ); ?></li>
                        <?php elseif ( ! candidates_can_apply() && 'preview' !== $post->post_status ) : ?>
                            <li class="listing-expired"><?php _e( 'Applications have closed', 'wp-job-manager' ); ?></li>
                        <?php endif; ?>
                        <?php do_action( 'single_job_listing_meta_end' ); ?>
                    </ul>
                    <?php do_action( 'single_job_listing_meta_after' ); ?>
                    <?php the_content(''); ?>
                    <?php if ( $apply = get_the_job_application_method() ) :
                        if ( $apply->type === 'url' ) {
                            $application_href = $apply->url;
                        } elseif ( $apply->type === 'email' ) {
                            $application_href = sprintf( 'mailto:%1$s%2$s', $apply->email, '?subject=' . rawurlencode( $apply->subject )  );
                        }
                        ?>
                        <div class="application">
                            <a class="application_button button" href="<?php echo $application_href; ?>"><?php _e( 'Apply for job', 'wp-job-manager' ); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="pcr-sidebar">
                <h2>Consultant</h2>
                <div class="single-consultant-block">
                    <?php
                    $post_objects = get_field('display_consultant');
                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <div class="job-consultant-card">
                                <img src="<?php the_field('consulatnt_banner_right_image'); ?>" title="<?php the_field('consultant_title'); ?>" class="solicitor-card-image">
                                <div class="sc-text-block">
                                    <p class="sc-name"><?php the_field('consultant_title'); ?></p>
                                    <p class="sc-title"><?php the_field('consultant_position'); ?></p>
                                    <a href="tel:<?php the_field('social_media_phone'); ?>" class="sc-phone" title="<?php the_field('social_media_phone'); ?>"><?php the_field('social_media_phone'); ?></a>
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
