<?php
/**
 * Filters in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filters.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @version     1.33.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

wp_enqueue_script( 'wp-job-manager-ajax-filters' );

do_action( 'job_manager_job_filters_before', $atts );
?>

<form class="job_filters">
	<?php do_action( 'job_manager_job_filters_start', $atts ); ?>

	<div class="search_jobs">
		<?php do_action( 'job_manager_job_filters_search_jobs_start', $atts ); ?>

		<div class="search_keywords">
			<label for="search_keywords"><?php esc_html_e( 'Keywords', 'wp-job-manager' ); ?></label>
			<input style='' type="text" name="search_keywords" id="search_keywords" placeholder="<?php esc_attr_e( 'Keywords', 'wp-job-manager' ); ?>" value="<?php echo esc_attr( $keywords ); ?>" />
			<?php
				$args = array(
					'taxonomy' => 'job_listing_type',
				);
				//8361Array 
				$cats = get_categories($args);
                echo '<select name="job_type" class="job_type_select" name="category">';
                echo '<option value="0">Job Type</option>';
                foreach($cats as $cat) {
                    echo '<option value="'.$cat->name.'"> '.$cat->name.' </option>';
                }
                    echo '</select>';
            ?>
			
		</div>

		<div class="search_location">
			<label for="search_location"><?php esc_html_e( 'Location', 'wp-job-manager' ); ?></label>
			<input type="text" name="search_location" id="search_location" placeholder="<?php esc_attr_e( 'Location', 'wp-job-manager' ); ?>" value="<?php echo esc_attr( $location ); ?>" />
		</div>

	<!-- 	<div class="search_salary">
			<label for="search_salary"><?php //esc_html_e( 'Salary', 'wp-job-manager' ); ?></label>
			<input type="text" name="search_salary" id="search_salary" placeholder="<?php //esc_attr_e( 'Salary', 'wp-job-manager' ); ?>" value="<?php //echo esc_attr( $salary ); ?>" />
		</div> -->


		<div style="clear: both"></div>

		<?php if ( $categories ) : ?>
			<?php foreach ( $categories as $category ) : ?>
				<input type="hidden" name="search_categories[]" value="<?php echo esc_attr( sanitize_title( $category ) ); ?>" />
			<?php endforeach; ?>
		<?php elseif ( $show_categories && ! is_tax( 'job_listing_category' ) && get_terms( [ 'taxonomy' => 'job_listing_category' ] ) ) : ?>
			<div class="search_categories">
				<label for="search_categories"><?php esc_html_e( 'Category', 'wp-job-manager' ); ?></label>
				<?php if ( $show_category_multiselect ) : ?>
					<?php job_manager_dropdown_categories( [ 'taxonomy' => 'job_listing_category', 'hierarchical' => 1, 'name' => 'search_categories', 'orderby' => 'name', 'selected' => $selected_category, 'hide_empty' => true ] ); ?>
				<?php else : ?>
					<?php job_manager_dropdown_categories( [ 'taxonomy' => 'job_listing_category', 'hierarchical' => 1, 'show_option_all' => __( 'Any category', 'wp-job-manager' ), 'name' => 'search_categories', 'orderby' => 'name', 'selected' => $selected_category, 'multiple' => false, 'hide_empty' => true ] ); ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php
		/**
		 * Show the submit button on the job filters form.
		 *
		 * @since 1.33.0
		 *
		 * @param bool $show_submit_button Whether to show the button. Defaults to true.
		 * @return bool
		 */
		if ( apply_filters( 'job_manager_job_filters_show_submit_button', true ) ) :
		?>
			<div class="search_submit">
				<input class='search_submit_btn job_search_submit_btn' type="submit" value="<?php esc_attr_e( 'Search Jobs', 'wp-job-manager' ); ?>">
			</div>
		<?php endif; ?>

		<?php do_action( 'job_manager_job_filters_search_jobs_end', $atts ); ?>
	</div>

	<?php do_action( 'job_manager_job_filters_end', $atts ); ?>
</form>
<script>
$(document).ready (function () { 
                var index;
	$('select.job_type_select').change (function () { 
	var jobtype = $('select.job_type_select').children("option:selected").val().toLowerCase();
		if(jobtype == 0){
			$(".job_type_val").attr( "checked","checked" );
		}else{
			$('.job_type_val').removeAttr( "checked" );
			$("[value="+jobtype+"]").attr( "checked","checked" );
			$(".job_search_submit_btn").click();
		}

	});
});

			 
</script>
<?php do_action( 'job_manager_job_filters_after', $atts ); ?>

<noscript><?php esc_html_e( 'Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.', 'wp-job-manager' ); ?></noscript>
