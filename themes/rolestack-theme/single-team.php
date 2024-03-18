<?php
/**
 * Template Name: Single Team Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>

<div class="single-team-banner">
	<div class="inner_team_banner">
		<div class="single_team_left">
			<div class="social_media_team">
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
			<div class="teammember-name"><?php the_field('member_name'); ?></div>
			<div class="teammember-title"><?php the_field('member_position'); ?> </div>
		</div>	

		<div class="right_team_single">
			<div class="member_img"><img src="<?php the_field('member_image'); ?>"></div>
		</div>
	</div>
</div>

<div class="single_team_desc">
	<div class="inner_desc_team">
		<div class="left_team_desc">
			<div class="memebr_title_desc">
			</div>
			<?php the_field('member_desc'); ?>
		</div>
		<div class="single_member_right">

			<div class="insight_data">
				<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'orderby' => 'rand',
					'order' => 'DESC',
					'posts_per_page' => '1',
					'paged' => 1,
				);
				$blog_posts = new WP_Query( $args );
				?>

				<?php if ( $blog_posts->have_posts() ) : ?>
					<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
						<div class="insight-card casestudy_data insight_data">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
							<div class="post_only">
								<div class="services_category">
									<?php 
                        $category_detail=get_the_category( $post->ID );//$post->ID
                        foreach($category_detail as $cd){?>
                        	<span><?php echo $cd->cat_name; ?></span>
                        <?php }
                        ?>
                    </div>
                    <div class="sc-name case_title case_study_title"><?php the_title(); ?></div>
                    <input id="case_title" type="hidden" value="<?php the_title(); ?>">
                    <span class="casestudy_category">
                    	<?php 
                    	$terms = get_the_terms( $post->ID, 'category' ); 
                    	foreach($terms as $term) {
                    		echo $term->name.', ';
                    		echo '<input type="hidden" class="cat_name" value="'.$term->name.'" />';
                    	}
                    	?>
                    </span> 
                    <div class="sc-title"><?php $content = get_the_content(); ?>
                    <?php
                    preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                    echo $abstract[0] . '...';
                    ?> 
                </div>
                <div class="view_role_btn">
                	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                		<button class="view_casestudy">Read article </button>
                	</a>
                </div>
                <div id="row-all-team" class="button_withicon casestudy_button">
                	<a href="<?php the_permalink(); ?>" class="hph-link cs-link"></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>

</div>
</div>
</div>



<section class="all_jobs">
	<div class="inner_all_jobs">
		<div class="opp_title">View all our <span style="color: #A79BF5;">Engineering</span><br> roles</div>
		<div class="all_jobs_home">
			<?php echo do_shortcode('[jobs per_page="100" show_filters="true"]'); ?>
		</div>
	</div>
</section>

<section class="sector_team-row">
	<div class="inner_sector_team-row">
		<div class="inner_Opportunities_Await">
			<div class="col-md-6 meet_team_tile">Meet our <br><span style="color: #A79BF5;">Engineering</span> team</div>
			<div class="col-md-6 button_all_team"><a href="/meet-the-team/"><button>View our team</button></a> </div>
		</div>
		<div class="team-contact-widget">
			<?php
			$args = array(
				'post_type' => 'team',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => '-1',
				'paged' => 1,
			);
			$blog_posts = new WP_Query( $args );
			?>

			<?php if ( $blog_posts->have_posts() ) : ?>
				<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
					<div class="team-consultant-card">
						<div class="team-tab-shadow"></div>
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
						<div class="team_meet_row">
							<div class="member_img"><img src="<?php the_field('member_image'); ?>"></div>
							<div class="member_all_data">
								<div class="social_media_team">

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
								<div class="teammember-name"><a href="<?php the_permalink(); ?>" class="team_member_link"><?php the_field('member_name'); ?> </a></div>
								<div class="teammember-title"><a href="<?php the_permalink(); ?>" class="team_member_link"><?php the_field('member_position'); ?> </a> </div>
								<div class="member_description"><a href="<?php the_permalink(); ?>" class="team_member_link"> <?php echo $excerpt = wp_trim_words( get_field('member_desc' ), $num_words = 150, $more = '...' ); ?></a></div>

							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<script src="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.js"></script>
<link href="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.css" rel="stylesheet">
<?php get_footer(); ?>