<!-- Request Call Back Section -->
<div class="Requestcall_back">
<div class="inner_Requestcall_back">
	<div class="requestcall_Heading">
		<h2><?php the_field('request_call_back_heading'); ?></h3>
			<div class="main_callback_description">
				<div class="callback_description">
					<?php the_field('request_call_back_description'); ?>
					<p class="form_request"><?php the_field('request_call_back_form'); ?></p>
				</div>
				<div class="callback_right">
					<div class="request_rightside">
						<?php if( have_rows('three_right_boxes') ): ?>   
							<?php while( have_rows('three_right_boxes') ): the_row(); ?>
								<div class="requestcallback_right">
									<h3><?php the_sub_field('bg_image_title'); ?></h3>
									<a href="<?php the_sub_field('bg_image_link'); ?>" class="call-back-link"></a>
									<img src="<?php the_sub_field('bg_image_box');?>" alt="" class="request-cb-image">
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>