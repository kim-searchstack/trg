<?php
/**
 * Template Name: Single Post Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>


<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="singlr_post_banner" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
    <div class="innersinglr_post_banner">
        <div class="category_all">
            <div class="post_title"><?php the_title(''); ?></div>
        </div>
    </div>
    <div class="singlepost_img_shadow"></div>
</div>

<div class="share_article_single">
    <div class="share_article-row">
        <h4>Share</h4>
        <div class="social-share-block">
            <a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://www.twitter.com/share?url=<?php echo get_permalink(); ?>')">
                <i class="fab fa-twitter"></i>
            </a>

            <a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>')">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>')">
                <i class="fab fa-linkedin"></i>
            </a>


            <a href="javascript:void(0)" onclick="javascript:genericSocialShare('mailto:?subject=<?php the_title(''); ?>&body=Check out this site <?php echo the_permalink(); ?>')">
                <i class="fas fa-envelope"></i></a>

                <a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://api.whatsapp.com/send?text=<?php the_title(''); ?> <?php echo the_permalink(); ?>')">
                    <i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="container inner_single_top">
            <div class="col-md-8">
               <div class="breadcrumb_custom animate-on-scroll in-view" data-delay="4"><a href="/">Home</a> / <a href="/insight-hub/">Insight Hub</a> / <span><?php the_title(''); ?></span></div>
               <div class="the_contentpost">
                <?php the_content(''); ?>
            </div>
        </div>
        <div class="col-md-4 pcr-sidebar">
            <div class="innerpcr-sidebar">
                <div class="related_posts_single">
                    <?php 
                    global $post;
                    $current_post_type = get_post_type( $post );
                    $args = array(
                        'posts_per_page' => 3,
                        'order' => 'DESC',
                        'orderby' => 'ID',
                        'post_type' => $current_post_type,
                        'post__not_in' => array( $post->ID )
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


<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>

<?php get_footer(); ?>