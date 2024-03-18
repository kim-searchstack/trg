<?php
/**
 * Template Name: Jobs Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>

<section class="Unleashing_Potential">
    <div class="inner_Potential">
        <div class="col-md-6 unleash_text animate-on-scroll" data-delay="1">
            <h2>Latest <span style="color: #a79bf5;">Roles</span></h2>
            <p>Where Community, Innovation, and Tech Talent Thrive,</p>
            <div class="view_upcoming_event animate-on-scroll" data-delay="2">
                <a href="/tech-recruitment/"><button class="view_upcoming_btn animate-on-scroll" data-delay="3">Looking to hire</button></a>
            </div>
        </div>
        <div class="col-md-6 right_video_lightbox animate-on-scroll" data-delay="4">
            <?php echo do_shortcode('[jobs per_page="1" show_filters="false"]'); ?>
            <div class="video-tab-shadow"></div>
        </div>
        <img src="/wp-content/uploads/2023/08/Group-3-2.svg" alt="" class="video-bulb-01">
        <img src="/wp-content/uploads/2023/08/Group-1-2.svg" alt="" class="video-bulb-02">
        <img src="/wp-content/uploads/2023/08/Background.svg" alt="" class="dot-bg">
    </section>


    <div class="job-page-search all_jobs">
        <div class="job-search animate-on-scroll" data-delay="5"> <?php echo do_shortcode('[jobs]'); ?>
    </div>
</div>


<?php get_footer(); ?>