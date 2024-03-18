<div class="role-container">
		<?php 
		// args
		$args = array(
			'numberposts'	=> -1,
			'post_type'		=> 'job_listing',
			'meta_key'		=> 'consultant_label',
			'meta_value'	=> 'Sam Clarke'
		);


		// query
		$the_query = new WP_Query( $args );

		?>
		<?php if( $the_query->have_posts() ): ?>
			<div class="job-card-flex">
			<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="job-widget-card">
					<p class="job-card-location"><?php the_job_location(); ?></p>
					<p class="job-card-title"><?php the_title(''); ?></p>
					<div class="job-card-salary"><?php the_job_salary(); ?></div>
					<div class="job-excerpt"><?php the_excerpt(__('(more…)')); ?></div>
					<a href="<?php the_permalink(); ?>" class="job-card-link">
					</a>
					<button class="job-card-button">View role</button>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>

		<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
		</div>