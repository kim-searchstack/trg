<div class="makes-different-row">
	<div class="content-tab-row row">
		<?php if( have_rows('add_sector_tab') ): ?>   
			<div class="tab">
				<?php while( have_rows('add_sector_tab') ): the_row(); ?>
					<button class="tablinks" onclick="openTab(event, '<?php the_sub_field('tab_tag'); ?>','code-box-2')" id="<?php the_sub_field('default_open'); ?>">
						<p class="tab-box-title"><?php the_sub_field('tab_title'); ?></p>
					</button>
				<?php endwhile; ?>
			</div>
			<div class="tab-content" id="code-box-2">
				<!-- Tab content -->
				<?php while( have_rows('add_sector_tab') ): the_row(); ?>
					<div id="<?php the_sub_field('tab_tag'); ?>" class="tabcontent">
						<div class="tab-flex">
							<div class="tab-left">
								<div class="tab-content left_content">
									<?php the_sub_field('tab_content'); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>

			</div>
		<?php endif; ?>
	</div>
	<div class="tab-right">
		<div class="application-block">
			<div class="tab-tag-flex">
				<div class="testimonials_data">
					<p class="test-quote"> <?php the_field('testimonials_content'); ?> </p>
				</div>
				<div class="image_detailstestimonials">
					<div class="testimonials_image">
						<img src="<?php the_field('testimonial_person_image'); ?>">
					</div>
				</div>
				<div class="details_testimonials">
					<div class="client_name">
						<?php the_field('testimonial_person_name'); ?>
						<p class="client-title"><?php the_field('testimonial_title'); ?></p>
						<p class="client-company"><?php the_field('testimonial_company'); ?></p>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>