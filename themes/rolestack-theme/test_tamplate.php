<?php
/**
 * Template Name: Test Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */
?>
<?php get_header(); ?>
<section class="Roundabout_News" style="">
    <div class="inner_roundabout_news">
        <div class="titile_news_roundbaout">
            Roundabout News
        </div>
        <div class="all_news_posts">
            <?php
            $args = array(
                'post_type' => 'roundabout_news',
                'post_status' => 'publish',
                'orderby'=> 'date',
                'order'=> 'ASC',
                'posts_per_page' => '-1',
                'paged' => 1,
            );
            $blog_posts = new WP_Query( $args );
            ?>

            <?php if ( $blog_posts->have_posts() ) : ?>
                <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
				
                    <div class="roun_new_all_main">
                        <div class="image_roundbaput_news">
						
						
						<?php  $roundabout_news = get_field('roundabout_news'); ?>
						<?php  $download_link = get_field('download_link'); ?>
                            <img src="<?php the_field('news_image');?>">
							
							<?php  $video_link = get_field('video_link');
							if($roundabout_news == 'Video'){
								echo '<a href="'.$video_link.'" data-lity><img class="video_link_roundabouts" src="/wp-content/uploads/2023/10/Vector.png"></a>';
							}else if($roundabout_news == 'Download'){
								
								$dl = '<a href="'.$download_link.'" download >';
							
							}
							else{
								
							}
						?>
                            <div class="round_hp_shadow"></div>
                        </div>
                        <div class="under_image_news">
                            <div class="type_news">
							<?php
							if($download_link){
								echo $dl;
							}
                                 the_field('roundabout_news'); 
							if($download_link){
								echo '</a>';
							}
								 ?>
                            </div>
                            <div class="type_news_title">
                                <?php the_field('news_title'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<div id='mydiv' class="all_news_posts">
<?php

 $the_query = new WP_Query( array('posts_per_page'=>1,
								'post_type'=>'team',
								'post_status' => 'publish',
								'orderby'=> 'date',
								'order'=> 'ASC',
								'posts_per_page' => '6',
								'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
								
                            ); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<div class="roun_new_all_main">
                        <div class="image_roundbaput_news">
						
						
						<?php  $roundabout_news = get_field('roundabout_news'); ?>
						<?php  $download_link = get_field('download_link'); ?>
                            <img src="<?php the_field('news_image');?>">
							
							<?php  $video_link = get_field('video_link');
							if($roundabout_news == 'Video'){
								echo '<a href="'.$video_link.'" data-lity><img class="video_link_roundabouts" src="/wp-content/uploads/2023/10/Vector.png"></a>';
							}else if($roundabout_news == 'Download'){
								
								$dl = '<a href="'.$download_link.'" download >';
							
							}
							else{
								
							}
						?>
                            <div class="round_hp_shadow"></div>
                        </div>
                        <div class="under_image_news">
                            <div class="type_news">
							<?php
							if($download_link){
								echo $dl;
							}
                                 the_field('roundabout_news'); 
							if($download_link){
								echo '</a>';
							}
								 ?>
                            </div>
                            <div class="type_news_title">
                                <?php the_field('news_title'); ?>
                            </div>
                        </div>
                    </div>
<?php
endwhile;

$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#njnj%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages,
	'add_args' => array( '#mydiv')
) );

wp_reset_postdata();

 get_footer(); ?> </div>