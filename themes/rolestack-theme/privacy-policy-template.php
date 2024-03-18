<?php
/**
 * Template Name: Privacy Policy Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>

<div class="singlr_post_banner" style="background: url('/wp-content/uploads/2023/07/blog-image.jpg') no-repeat;">
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
            <div class="col-md-12">
             <div class="the_contentpost">
                <?php the_content(''); ?>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>
