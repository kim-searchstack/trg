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
        <div class="background_imgsubsector-single">
		<div class="blog-image-container">
			<img src="/wp-content/uploads/2022/07/data-stock.jpg" alt="" class="blog-image-banner">
		</div>
            <div class="banner_textwhite">
				<H1>TESTING 123</H1>
                <h1><?php the_title(''); ?></h1>
                <div class="single-meta-container">
                <?php if ( get_option( 'job_manager_enable_types' ) ) { ?>
                    <?php $types = wpjm_get_the_job_types(); ?>
                    <?php if ( ! empty( $types ) ) : foreach ( $types as $type ) : ?>

                        <li class="job-type <?php echo esc_attr( sanitize_title( $type->slug ) ); ?>"><img src="/wp-content/uploads/2021/04/icons8-send-job-list.svg" class="single-job-icon"><?php echo esc_html( $type->name ); ?></li>

                    <?php endforeach; endif; ?>
                <?php } ?>
                    <li class=" -single"><img src="/wp-content/uploads/2021/04/icons8-marker-1.svg" class="single-job-icon"><?php the_job_location(); ?></li>
                    <li class="date-posted"><img src="/wp-content/uploads/2021/04/icons8-calendar-1.svg" class="single-job-icon"><?php the_job_publish_date(); ?></li>
                </div>
            </div>
            <div class="bgs-shadow"></div>
        </div>
		<div class="social-share-block">
				<button class="button" data-sharer="twitter" data-title="<?php the_title(); ?>" data-hashtags="" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2022/07/icons8-twitter-8.svg" alt="twitter icon"></button>
				<button class="button" data-sharer="facebook" data-hashtag="hashtag" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2022/07/icons8-facebook-15.svg" alt="facebook icon"></button>
				<button class="button" data-sharer="linkedin" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2022/07/icons8-linkedin-13.svg" alt="linkedin icon"></button>
				<button class="button" data-sharer="email" data-title="<?php the_title(); ?>" data-url="<?php the_permalink() ?>/" data-subject="Check out this blog: <?php the_title(); ?>" data-to="some@email.com"><img src="/wp-content/uploads/2022/07/icons8-email-send-5.svg" alt="email icon"></button>
				<button class="button" data-sharer="whatsapp" data-title="<?php the_title(); ?>" data-url="<?php the_permalink() ?>"><img src="/wp-content/uploads/2022/07/icons8-whatsapp-9.svg" alt="whatsapp icon"></button>
			</div>
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

