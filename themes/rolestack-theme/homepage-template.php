<?php
/**
 * Template Name: Home Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>

<?php get_header(); ?>

<section class="main-banner">
    <div class="banner_image_text">
        <div class="inner_main_banner">
            <div class="banner_text">
                <span>The</span> 
                <span style="color: #6453D6;">Community</span> 
                <span style="color: #6453D6;">Driven</span> 
                <span>Recruitment</span> 
                <span>Agency.</span>
            </div>
            <div class="banner_desc  animate-on-scroll" data-delay="1">
                Where Community, Innovation, and Tech Talent Thrive.
            </div>
            <div class="banner_buttons">
                <a href="/tech-recruitment/"><button class="left-btn">Tech Recruitment Solutions</button></a>
                <a href="/jobs/"><button class="left-btn rht-btn">Finding a role</button></a>
            </div>
        </div>
        <div class="banner_image_righthome">
            <svg width="1300" height="1300" xmlns="/wp-content/uploads/2023/08/Group-125.svg" class="video-mask">
            </svg>
            <div class="video-container">
                <video autoplay loop muted>
                    <source src="https://trg-zone.b-cdn.net/Website-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="svg-mask"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="Unleashing_Potential">
        <div class="inner_Potential">
            <div class="col-md-6 unleash_text animate-on-scroll" data-delay="1">
                <?php the_field('unleashing_potential'); ?>
                <div class="view_upcoming_event animate-on-scroll" data-delay="2">
                    <a href="/tech-recruitment/"><button class="view_upcoming_btn animate-on-scroll" data-delay="3">Looking to hire</button></a>
                </div>
                <div class="trysted_by_logos animate-on-scroll" data-delay="4">
                    <div class="inner_trusted_logos animate-on-scroll" data-delay="5">
                        <div class="trysted_bu_title animate-on-scroll" data-delay="6">Trusted by the biggest companies:</div>
                    </div>
                    <div class="tbc-container">
                        <div class="tbc-gradient"></div>

                        <div class="trusted_biggest_companies">

                            <?php if( have_rows('trusted_by_the_biggest_companies') ): ?>   
                                <?php while( have_rows('trusted_by_the_biggest_companies') ): the_row(); ?>
                                    <div class="trusted_image animate-on-scroll" data-delay="7">
                                        <img src="<?php the_sub_field('logo'); ?>">
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 right_video_lightbox animate-on-scroll" data-delay="8" style="background-image: url(<?php the_field("video_thumbnail"); ?>);">
                <a href="<?php the_field("video_url"); ?>" data-lity="">
                    <img class="play_btn_video animate-on-scroll" data-delay="9" src="/wp-content/uploads/2023/07/Group-124.png">
                </a>
                <div class="video-tab-shadow"></div>
            </div>
            <img src="/wp-content/uploads/2023/08/Group-3-2.svg" alt="" class="video-bulb-01 animate-on-scroll" data-delay="10">
            <img src="/wp-content/uploads/2023/08/Group-1-2.svg" alt="" class="video-bulb-02">
            <img src="/wp-content/uploads/2023/08/Background.svg" alt="" class="dot-bg animate-on-scroll" data-delay="12">
        </section>


        <section class="Creating_Impact">
            <div class="inner_Creating_Impact">
                <div class="inner_Creating_Impact col-md-6">
                    <div class="title_impact animate-on-scroll" data-delay="13">Creating <span style="color: #59CFAF;">Impact</span></div>
                    <div class="creating_desc animate-on-scroll" data-delay="14">Commited to making a difference in the tech industry.</div>
                </div>
                <div class="all_case_Study col-md-6 animate-on-scroll" data-delay="15">
                    <a href="#"><button>View latest case studies</button></a>
                </div>
            </div>
            <div class="case_study_All">
                <div id="case_study_main" class="col-md-6 scc-right">
                    <?php
                    $args = array(
                        'post_type' => 'case_study',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => '1',
                        'paged' => 1,
                    );
                    $blog_posts = new WP_Query( $args );
                    ?>

                    <?php if ( $blog_posts->have_posts() ) : ?>
                        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                            <div class="job-consultant-card animate-on-scroll" data-delay="16">
                                <div class="hp-tab-shadow"></div>
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                                <div class="team_information">
                                 <div class="services_category">
                                    <?php
                                    $args = array(
                                        'type'                     => 'case_study',
                                        'child_of'                 => 0,
                                        'parent'                   => '',
                                        'orderby'                  => 'name',
                                        'order'                    => 'ASC',
                                        'hide_empty'               => 1,
                                        'hierarchical'             => 1,
                                        'exclude'                  => '',
                                        'include'                  => '',
                                        'number'                   => '',
                                        'taxonomy'                 => 'casestudies_cat',
                                        'pad_counts'               => false );

                            // $categories = get_categories($args);

                                    global $post;
                                    $category_detail=get_the_category( $post->ID );
                                    foreach ($category_detail as $category) {
                                        $url = get_term_link($category);?>
                                        <div class="category_name_cat animate-on-scroll" data-delay="17">
                                         <span><?php echo $category->name; ?></span>
                                     </div>
                                     <?php
                                 }
                                 ?>
                             </div>
                             <div class="sc-name animate-on-scroll" data-delay="18"><?php the_title(); ?></div>
                             <div class="sc-title animate-on-scroll" data-delay="19"><?php $content = get_the_content(); ?>
                             <?php
                             preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                             echo $abstract[0] . '...';
                         ?>  </div>
                         <div id="row-all-team" class="button_withicon casestudy_button animate-on-scroll" data-delay="20">
                            <a href="<?php the_permalink(); ?>" class="hph-link cs-link animate-on-scroll" data-delay="21"></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="leftcreating_impact">
            <div class="inner_leftcreating_impact">
                <div class="percentage_title animate-on-scroll" data-delay="22">
                    <?php the_field('creating_impact_heading_left'); ?>
                </div>
                <div class="desc_title animate-on-scroll" data-delay="23">
                    <?php the_field('creating_impact_desc_left'); ?>
                </div>
            </div>
        </div>
    </div>

    <div id="case_study_main" class="col-md-6 scc-right">
        <div class="rightcreating_impact">
            <div class="inner_rightcreating_impact">
                <div class="percentage_title animate-on-scroll" data-delay="24">
                    <?php the_field('creating_impact_heading_right'); ?>
                </div>
                <div class="desc_title animate-on-scroll" data-delay="25">
                    <?php the_field('creating_impact_desc_right'); ?>
                </div>
            </div>
        </div>
        <?php
        $args = array(
            'post_type' => 'case_study',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'offset' => '1',
            'posts_per_page' => '1',
            'paged' => 1,
        );
        $blog_posts = new WP_Query( $args );
        ?>

        <?php if ( $blog_posts->have_posts() ) : ?>
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="job-consultant-card animate-on-scroll" data-delay="26">
                    <div class="hp-tab-shadow"></div>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                    <div class="team_information">
                     <div class="services_category animate-on-scroll" data-delay="27">
                        <?php
                        $args = array(
                            'type'                     => 'case_study',
                            'child_of'                 => 0,
                            'parent'                   => '',
                            'orderby'                  => 'name',
                            'order'                    => 'ASC',
                            'hide_empty'               => 1,
                            'hierarchical'             => 1,
                            'exclude'                  => '',
                            'include'                  => '',
                            'number'                   => '',
                            'taxonomy'                 => 'casestudies_cat',
                            'pad_counts'               => false );

                            // $categories = get_categories($args);

                        global $post;
                        $category_detail=get_the_category( $post->ID );
                        foreach ($category_detail as $category) {
                            $url = get_term_link($category);?>
                            <div class="category_name_cat animate-on-scroll" data-delay="28">
                             <span><?php echo $category->name; ?></span>
                         </div>
                         <?php
                     }
                     ?>
                 </div>
                 <div class="sc-name animate-on-scroll" data-delay="29"><?php the_title(); ?></div>
                 <div class="sc-title"><?php $content = get_the_content(); ?>
                 <?php
                 preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                 echo $abstract[0] . '...';
             ?>  </div>
             <div id="row-all-team" class="button_withicon casestudy_button animate-on-scroll" data-delay="30">
                <a href="<?php the_permalink(); ?>" class="hph-link cs-link"></a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
</div>
</section>


<section class="Opportunities_Await">
    <img src="/wp-content/uploads/2023/09/Group-3.svg" alt="" class="opp-bulb-01 animate-on-scroll" data-delay="31">
    <div class="inner_Opportunities_Await">
        <div class="opp_title animate-on-scroll" data-delay="32">Opportunities <span style="color: #A79BF5;">Await</span></div>
        <div class="jobns_desc animate-on-scroll" data-delay="33">Browse the most recent roles we're recruiting for and<br> find your perfect fit.</div>
    </div>

    <div class="all_jobs_home animate-on-scroll" data-delay="33">
        <?php echo do_shortcode('[jobs per_page="3" show_filters="false"]'); ?>
    </div>
    <img src="/wp-content/uploads/2023/09/Group-7.svg" alt="" class="opp-bulb-02 animate-on-scroll" data-delay="34">
</section>

<section class="Engage_Innovation">
    <div class="inner_Engage_Innovation">
        <div class="col-md-6 left_roundboutd animate-on-scroll" data-delay="35">
            <img src="<?php the_field('logo_roundbout'); ?>">
            <div class="engage_innovation_text animate-on-scroll" data-delay="36">
                <?php the_field('engage_innovation'); ?>
            </div>
            <a class="home_more_info animate-on-scroll" data-delay="37" href="<?php the_field('more_info_link'); ?>"><button>More information</button></a>
        </div>
        <div class="col-md-6 right_image_engage animate-on-scroll" data-delay="38">
            <img src="<?php the_field('right_image_engage'); ?>">
        </div>
    </div>
</section>

<section id="insight_Sec" class="Opportunities_Await">
    <div class="inner_Opportunities_Await">
        <div class="opp_title animate-on-scroll" data-delay="39">Market <span style="color: #A79BF5;">Insights</span></div>
        <div class="jobns_desc animate-on-scroll" data-delay="40">Stay ahead with our in-depth analysis and data-driven<br> reports on industry trends.</div>
    </div>

    <div class="row_insight">
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => '3',
            'paged' => 1,
        );
        $blog_posts = new WP_Query( $args );
        ?>

        <?php if ( $blog_posts->have_posts() ) : ?>
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="insight-card animate-on-scroll" data-delay="40">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                    <div class="post_only">
                     <div class="services_category animate-on-scroll" data-delay="41">
                        <?php 
                        $category_detail=get_the_category( $post->ID );//$post->ID
                        foreach($category_detail as $cd){?>
                            <span><?php echo $cd->cat_name; ?></span>
                        <?php }
                        ?>
                    </div>
                    <div class="sc-name animate-on-scroll" data-delay="42"><?php the_title(); ?></div>
                    <div class="sc-title animate-on-scroll" data-delay="43"><?php $content = get_the_content(); ?>
                    <?php
                    preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                    echo $abstract[0] . '...';
                    ?> 
                </div>
                <div class="view_role_btn animate-on-scroll" data-delay="44">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <button class="view_casestudy animate-on-scroll" data-delay="45">Read article </button>
                    </a>
                </div>
                <div id="row-all-team" class="button_withicon casestudy_button animate-on-scroll" data-delay="46">
                    <a href="<?php the_permalink(); ?>" class="hph-link cs-link"></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
</section>

<section class="Upcomingtrg_Events" style="display: none;">
    <div class="inner_UpcomingEvents">
        <div class="col-md-5 upcoming_title animate-on-scroll" data-delay="47">
          <span style="color:#A79BF5;">Upcoming</span><br> trg. Events
      </div>
      <div class="col-md-7 upcoming_desc animate-on-scroll" data-delay="48">
        Join our Roundabouts events to experience the forefront of tech networking and knowledge sharing.
    </div>
</div>
</section>

<section class="upcoming_events_all"  style="display: none;">
    <div class="inner_upcoming_all">
        <div class="upcomingevents_withimage">
            <?php echo do_shortcode('[ecs-list-events limit="2" thumb="true"]') ?>
        </div>
    </div>
</section>


<section class="join_newsletter" style="display: none;">
    <div class="inner_join_newsletter">
        <div class="join_nesleter_title animate-on-scroll" data-delay="49">
            Join the <span style="color: #A79BF5;">trg. Community</span> Newsletter
        </div>
        <div class="join_desc animate-on-scroll" data-delay="50">
            Stay ahead with the latest job opportunities, exclusive content, market insights, and community-driven events - all delivered straight to your inbox.
        </div>
        <div class="newsltetr_form">
            <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
        </div>
    </div>
</section>
<link href="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.css" rel="stylesheet">
<script src="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.js"></script>
<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const words = document.querySelectorAll('.banner_text span');
    let delay = 0; // start delay

    words.forEach((word) => {
        setTimeout(() => {
            word.classList.add('animate');
        }, delay);
        delay += 400; // Adjusted delay for next word based on the 1.1s duration
    });
});

</script>