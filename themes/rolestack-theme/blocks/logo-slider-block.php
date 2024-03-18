<!-- Logo slider section -->
<div class="logo_slidermain">
<div class="inner_slidermain">
	<div class="logo_sliderheading">
		<h2><?php the_field('logo_slider_title'); ?></h2>
	</div>
	<div class="losos_slides">
		<?php if( have_rows('logo_slider_images') ): ?>   
			<?php while( have_rows('logo_slider_images') ): the_row(); ?>
				<div class="Box-rightimages">
					<img src="<?php the_sub_field('image');?>">
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="logo-slider-shadow"></div>
</div>
</div>