<?php
/**
 * Single job listing.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-single-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @since       1.0.0
 * @version     1.37.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

if ( job_manager_user_can_view_job_listing( $post->ID ) ) : ?>
	<?php get_header(); ?>

	
	<div class="single_jobbanner">
		<div class="innersingle_jobbanner">
			<div class="single_banner_image animate-on-scroll" data-delay="1">
				<?php if ( get_option( 'job_manager_enable_types' ) ) { ?>
					<?php $types = wpjm_get_the_job_types(); ?>
					<?php if ( ! empty( $types ) ) : foreach ( $types as $type ) : ?>
						<div class="job-type <?php //echo esc_attr( sanitize_title( $type->slug ) ); ?>"><?php //echo esc_html( $type->name ); ?></div>
					<?php endforeach; endif; ?>
				<?php } ?>
				<div class="job_category animate-on-scroll" data-delay="2"><?php the_terms( $post->ID, 'job_listing_category', '', ' / ' ); ?></div>
				<div class="job-card-title animate-on-scroll" data-delay="3"><?php the_title(''); ?></div>
				<div class="location-salary-card">
					<div class="job-card-location animate-on-scroll" data-delay="3">
						<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_location(); ?>
					</div>
					<div class="job-card-salary animate-on-scroll" data-delay="4">
						<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_salary(); ?>
					</div>
					<div class="job-card-type animate-on-scroll" data-delay="5">
						<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_type(); ?></div>
					</div>
				</div>
			</div>
		</div>

		<div class="job-banner-content">
			<div class="pcr-main">
				<div class="post-content-block animate-on-scroll" data-delay="6">
					<?php if ( get_option( 'job_manager_hide_expired_content', 1 ) && 'expired' === $post->post_status ) : ?>
						<div class="job-manager-info"><?php _e( 'This listing has expired.', 'wp-job-manager' ); ?></div>
					<?php else : ?>
						<?php
							/**
							 * single_job_listing_start hook
							 *
							 * @hooked job_listing_meta_display - 20
							 * @hooked job_listing_company_display - 30
							 */
							do_action( 'single_job_listing_start' );
							?>
							<div class="job_description animate-on-scroll" data-delay="7">
								<?php wpjm_the_job_description(); ?>
							</div>
							<div id="candidate_apply animate-on-scroll" data-delay="8">
								<?php if ( candidates_can_apply() ) : ?>
									<?php get_job_manager_template( 'job-application.php' ); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<div class="pcr-sidebar">
						<div class="sidebar-row">
							<div class="single-consultant-block animate-on-scroll" data-delay="9">
								<?php $cid=get_the_ID();
						$consultant = get_post_meta($post->ID,'consultant_label',true); //using 'true' here is vital
					// args
						$args = array(
							'numberposts'	=> 1,
							'post_type'		=> 'team',
							'meta_key'		=> 'member_name',
							'meta_value'	=> $consultant
						);
					// query
						$the_query = new WP_Query( $args );
						global $wpdb;
						$cname=$wpdb->get_results( "SELECT * FROM `wp_ab2520bd1b_postmeta` WHERE `post_id` = ".$cid." AND `meta_key` = 'consultant_label'" );
						foreach( $cname as $results ) {
							$c_uid = $results->meta_value;
						}
						?>
						<?php if( $the_query->have_posts() ): ?>
							<div <?php if(empty($c_uid)){ echo "style='display:none;'";}?> class="single-consultant-block animate-on-scroll" data-delay="10">
								<div class="job-card-flex animate-on-scroll" data-delay="11">
									<p class="consultant-title animate-on-scroll" data-delay="12">Lead Consultant</p>

									<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<div class="team-consultant-card animate-on-scroll" data-delay="13">
											<div class="team-tab-shadow"></div>
											<?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
											<div class="team_meet_row animate-on-scroll" data-delay="14">
												<div class="member_img animate-on-scroll" data-delay="15"><img src="<?php the_field('member_image'); ?>"></div>
												<div class="member_all_data">
													<div class="social_media_team animate-on-scroll" data-delay="16">

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
													<div class="teammember-name animate-on-scroll" data-delay="17"><a href="<?php the_permalink(); ?>" class="team_member_link"><?php the_field('member_name'); ?> </a></div>
													<div class="teammember-title animate-on-scroll" data-delay="18"><a href="<?php the_permalink(); ?>" class="team_member_link"><?php the_field('member_position'); ?> </a> </div>
													<div class="member_description animate-on-scroll" data-delay="19"><a href="<?php the_permalink(); ?>" class="team_member_link"> <?php echo $excerpt = wp_trim_words( get_field('member_desc' ), $num_words = 150, $more = '...' ); ?></a></div>

												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php else : ?>

								</div>
							<?php endif; ?>
						</div>
						<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
						

					</div>
					<div class="social-share-block">
						<div class="share_social_job animate-on-scroll" data-delay="20">Share</div>
						<a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>')">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
						<a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://www.twitter.com/share?url=<?php echo get_permalink(); ?>')">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://api.whatsapp.com/send?text=<?php the_title(''); ?> <?php echo the_permalink(); ?>')">
							<i class="fa fa-whatsapp" aria-hidden="true"></i>
						</a>
						<a href="javascript:void(0)" onclick="javascript:genericSocialShare('mailto:?subject=<?php the_title(''); ?>&body=Check out this site <?php echo the_permalink(); ?>')">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</a>
					</div>

					<div class="job_sidebar_apply animate-on-scroll" data-delay="21">
						<a href="#candidate_apply">
							<button class="apply_job_sidebar animate-on-scroll" data-delay="22">Apply for Job</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="Ourlatest_roles role">
		<div class="Ourlatest_roles-row animate-on-scroll" data-delay="23">
			<h3>Related Roles</h3>
		</div>
		<div class="center_jobs_slider animate-on-scroll" data-delay="24">
			<?php 
			$terms = get_the_terms(get_the_ID(), 'job_listing_category');//echo $terms[0]->term_id;print_r($terms);
			$currentID = get_the_ID();
			$consultant = get_post_meta($post->ID,'consultant_title',true); 
			$args = array(
				'post_type' => 'job_listing',
				'post_status' => 'publish',
				'posts_per_page' => 3,
				'orderby' => 'rand',
				'meta_or_tax' => true,
				'post__not_in' => array ($post->ID),
				'tax_query' => array(
					array(
						'taxonomy' => 'job_listing_category',
						'field' => 'term_id',
						'terms'    => $terms[0]->term_id
					),
				),
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
								<div class="job-type <?php //echo esc_attr( sanitize_title( $type->slug ) ); ?>"><?php //echo esc_html( $type->name ); ?></div>
							<?php endforeach; endif; ?>
						<?php } ?>
						<div class="job_category animate-on-scroll" data-delay="25"><?php the_terms( $post->ID, 'job_listing_category', '', ' / ' ); ?></div>
						<div class="job-card-title animate-on-scroll" data-delay="26"><?php the_title(''); ?></div>
						<div class="job-excerpt animate-on-scroll" data-delay="27"><?php the_excerpt(__('(more…)')); ?></div>
						<div class="job-card-location animate-on-scroll" data-delay="28">
							<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_location(); ?>
						</div>
						<div class="job-card-salary animate-on-scroll" data-delay="29">
							<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_salary(); ?>
						</div>
						<div class="job-card-type animate-on-scroll" data-delay="30">
							<img src="/wp-content/uploads/2023/06/Ellipse-21.png"> <?php the_job_type(); ?></div>
							<!-- <div class="job-card-date"><?php the_job_publish_date(); ?></div> -->
							<div class="view_role_btn animate-on-scroll" data-delay="31">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(''); ?>">
									<button class="view_casestudy">View role </button>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
			</div>

		</div>


		<?php
				/**
				 * single_job_listing_end hook
				 */
				do_action( 'single_job_listing_end' );
				?>
			<?php endif; ?>
		</div>
	<?php else : ?>

		<?php get_job_manager_template_part( 'access-denied', 'single-job_listing' ); ?>

	<?php endif; ?>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript">
		function genericSocialShare(url){
			window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
			return true;
		}
	</script>
	<?php get_footer(); ?>
