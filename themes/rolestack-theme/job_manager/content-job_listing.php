<?php
/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @since       1.0.0
 * @version     1.34.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;
?>

<div class="job-widget-card" <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_long ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_lat ); ?>">
	<?php if ( get_option( 'job_manager_enable_types' ) ) { ?>
		<?php $types = wpjm_get_the_job_types(); ?>
		<?php if ( ! empty( $types ) ) : foreach ( $types as $type ) : ?>
			<div class="job-type <?php //echo esc_attr( sanitize_title( $type->slug ) ); ?>"><?php //echo esc_html( $type->name ); ?></div>
		<?php endforeach; endif; ?>
	<?php } ?>
	<div class="job_category"><?php the_terms( $post->ID, 'job_listing_category', '', ' / ' ); ?></div>
	<div class="job-card-title"><?php the_title(''); ?></div>
	<div class="job-excerpt"><?php the_excerpt(__('(more…)')); ?></div>
	<div class="job-card-location">
		<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_location(); ?>
	</div>
	<div class="job-card-salary">
		<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_salary(); ?>
	</div>
	<div class="job-card-type">
		<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_type(); ?>
		<input style='display:none;' type='hidden' value='<?php  the_job_type(); ?>' class='job_type' />
		</div>
		<!-- <div class="job-card-date"><?php the_job_publish_date(); ?></div> -->
		<div class="view_role_btn">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(''); ?>">
				<button class="view_casestudy">View role </button>
			</a>
		</div>
	</div>