<?php
/**
 * Template Name: Client Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<section class="page-banner">
    <div class="inner_page_banner">
       <div class="banner_left_page">
        <div class="left_babner_title animate-on-scroll" data-delay="1">
            <?php the_field('banner_main_title'); ?>
        </div>
        <div class="left_banner_desc animate-on-scroll" data-delay="2">
            <?php the_field('banner_desc'); ?>
        </div>
        <div class="banner_buttons animate-on-scroll" data-delay="3">
            <a href="/contact/"><button class="view_upcoming_btn">Get in contact</button></a>
        </div>
    </div> 
    <div class="right_banner_row animate-on-scroll" data-delay="4">
        <img src="<?php the_field('banner_image'); ?>">
    </div>
    <img src="/wp-content/uploads/2023/08/Group-2-4.svg" alt="" class="node-graphic-01">
    <img src="/wp-content/uploads/2023/08/Group-3-2.svg" alt="" class="node-graphic-02">
    <div class="gradient-sector"></div>
    <div class="noise-gen"></div>
</div>
</section>

<section class="problem_solution-row">
    <div class="inner_problems_soltion">
        <div class="problem_section">
            <div class="challenge_w_imagem col-md-12">
                <div class="col-md-6 The_Problemsec">
                    <div class="The_Problemtitle animate-on-scroll" data-delay="5">
                        The Challenge
                    </div>
                    <div class="problem_desc animate-on-scroll" data-delay="6">
                        <?php the_field('the_problem'); ?>
                    </div>
                </div>
                <div class="col-md-6 chalenge_img animate-on-scroll" data-delay="7">
                    <img src="<?php the_field('challenge_image'); ?>">
                </div>
            </div>
            <div class="solution_section col-md-12">
               <div class="col-md-6 animate-on-scroll" data-delay="8">
                <img src="<?php the_field('solution_image'); ?>">
            </div>
            <div class="the_solutionstitle col-md-6 animate-on-scroll" data-delay="7">
                <div class="animate-on-scroll" data-delay="8">
                    The Solution
                </div>
                <div class="solution_desc animate-on-scroll" data-delay="8">
                    <?php the_field('the_solutions'); ?>
                </div>
            </div>
        </div>
        <div class="logo_Slider_title" style="display: none;">
            Solutions Trusted by the biggest companies:
        </div>

        <div class="trusted_biggest_companies"  style="display: none;">
            <?php if( have_rows('logo_slider') ): ?>   
                <?php while( have_rows('logo_slider') ): the_row(); ?>
                    <div class="trusted_image">
                        <img src="<?php the_sub_field('image'); ?>">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <img src="/wp-content/uploads/2023/06/Mask-group1.png" alt="" class="trg-mark-icon">
</section>

<section class="our_sector_specialism">
    <div class="inner_sectoe_specialism">
        <div class="sector_title_specialism animate-on-scroll" data-delay="9">
         Our <span style="color: #A79BF5;">Sector</span> Specialism 
     </div>

     <div class="secote_speicsilism animate-on-scroll" data-delay="10">
      <?php if( have_rows('our_sector_specialism') ): ?>   
        <?php while( have_rows('our_sector_specialism') ): the_row(); ?>
            <div class="all_sector_info">
                <div class="inner_sector_info animate-on-scroll" data-delay="11">
                    <img src="<?php the_sub_field('sector_icon'); ?>" alt="<?php the_sub_field('sector_title'); ?>" class="sector-card-icon">
                    <div class="sectortitle_row animate-on-scroll" data-delay="12">
                      <?php the_sub_field('sector_title'); ?>
                  </div>
                  <div class="sectordewsc_row animate-on-scroll" data-delay="13">
                      <?php the_sub_field('sector_desc'); ?>
                  </div>
                  <div class="view_sector_expeetriose animate-on-scroll" data-delay="14">
                    <a href="<?php the_sub_field('add_link'); ?>">View sector expertise <img src="/wp-content/uploads/2023/06/icons8-right-arrow-12-1.png"></a>
                </div>
            </div>
            <div class="sector_image animate-on-scroll" data-delay="15">
              <img src="<?php the_sub_field('image'); ?>">
          </div>
      </div>
  <?php endwhile; ?>
<?php endif; ?>
</div>
</div>
<div class="gradient-sector"></div>
<div class="noise-gen"></div>
</section>


<section class="community_recruitment">
    <div class="inner_community_recruitment">
        <div class="community_left animate-on-scroll" data-delay="16">
            <?php the_field('community_recruitment_model'); ?>
            <div class="perfect_business_title animate-on-scroll" data-delay="16">
                You’ll love our solutions if you:
            </div>
            <div class="ideal_icp animate-on-scroll" data-delay="17">
                <?php if( have_rows('perfect_business_repeater') ): ?>   
                    <?php while( have_rows('perfect_business_repeater') ): the_row(); ?>
                        <div class="perfect_business_repeater">
                            <div class="inner_perfect_business">
                                <div class="perfect_business_list animate-on-scroll" data-delay="18">
                                 <img src="/wp-content/uploads/2023/06/Group-101.svg"> <?php the_sub_field('title'); ?>
                             </div>
                         </div>
                     </div>
                 <?php endwhile; ?>
             <?php endif; ?>
         </div>
         <div class="banner_buttons">
            <a href="/contact/"><button id="book_discovery_call" class="left-btn animate-on-scroll" data-delay="19">Book a discovery call</button></a>
        </div>
    </div>
    <div class="community_right animate-on-scroll" data-delay="20">
        <img src="<?php the_field('community_recruitment_image'); ?>">
    </div> 
    <div class="makes-different-row">
        <div class="content-tab-row row">
            <?php if( have_rows('add_sector_tab') ): ?>   
                <div class="tab_new tab-content" id="code-box-2">
                    <div class="tab">
                        <?php while( have_rows('add_sector_tab') ): the_row(); ?>
                            <button class="tablinks" onclick="openTab(event, '<?php the_sub_field('tab_tag'); ?>','code-box-2')" id="<?php the_sub_field('default_open'); ?>">
                                <p class="tab-box-title"><?php the_sub_field('tab_title'); ?></p></button><?php endwhile; ?></div>


                                <!-- Tab content -->
                                <?php while( have_rows('add_sector_tab') ): the_row(); ?>
                                    <div id="<?php the_sub_field('tab_tag'); ?>" class="tabcontent">
                                        <div class="tab-flex">
                                            <div class="tab-left">
                                                <div class="tab-content">
                                                    <?php the_sub_field('tab_content'); ?>
                                                </div>
                                            </div>
                                            <div class="tab-right">
                                                <div class="application-block">
                                                    <img src="<?php the_sub_field('tab_image'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function(){
                        jQuery(function(){
                            jQuery('.tab_new .tablinks:first-child').click();
                        });
                    });
                    jQuery(document).ready(function(){
                        jQuery(".tablinks").click(function(){
                            jQuery('.tablinks').removeClass("intro");
                            jQuery(this).addClass("intro");
                        });
                    });
                </script>
                <script>
                    function openTab(evt, tabName, boxName) {    
                        var i, tabcontent, tablinks;
                        var box = document.getElementById(boxName);
                        tabcontent = box.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = box.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(tabName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }
                    document.getElementById("defaultOpen1").click();
                </script>

            </div>
        </section>

        <section class="Creating_Impact">
            <div class="inner_Creating_Impact animate-on-scroll" data-delay="25">
                <div class="title_impact animate-on-scroll" data-delay="26">Creating <span style="color: #59CFAF;">Impact</span></div>
                <div class="creating_desc animate-on-scroll" data-delay="26">Commited to making a difference in the tech industry.</div>
                <div class="number_section animate-on-scroll" data-delay="27">
                   <?php if( have_rows('creating_impact') ): ?>   
                    <?php while( have_rows('creating_impact') ): the_row(); ?>
                        <div class="all_impact_info">
                            <div class="impact_descnumber">
                                <div class="impact_desc animate-on-scroll" data-delay="28">
                                    <?php the_sub_field('desc'); ?>
                                </div>
                                <div class="impact_number animate-on-scroll" data-delay="29">
                                    <?php the_sub_field('number'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="case_study_All">
        <div id="case_study_main" class="scc-right">
            <div class="key-contact-widget">
             <?php
             $args = array(
                'post_type' => 'case_study',
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
                    <div class="job-consultant-card animate-on-scroll" data-delay="30">
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
                                <div class="category_name_cat animate-on-scroll" data-delay="31">
                                   <span><?php echo $category->name; ?></span>
                               </div>
                               <?php
                           }
                           ?>
                       </div>
                       <div class="sc-name animate-on-scroll" data-delay="32"><?php the_title(); ?></div>
                       <div class="sc-title animate-on-scroll" data-delay="33"><?php $content = get_the_content(); ?>
                       <?php
                       preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                       echo $abstract[0] . '...';
                   ?>  </div>
                   <div id="row-all-team" class="button_withicon casestudy_button animate-on-scroll" data-delay="34">
                    <a href="<?php the_permalink(); ?>" class="hph-link cs-link"></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>
<div class="all_case_Study animate-on-scroll" data-delay="35">
    <a href="#"><button>View latest case studies</button></a>
</div>
</div>
</section>


<section id="insight_Sec" class="Opportunities_Await client_insiht-bottom">
    <div class="row_insight animate-on-scroll" data-delay="36">
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
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); 
              include('project-list-item.php'); ?>
          <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
  </div>
</section>

<section class="Upcomingtrg_Events">
    <div class="inner_UpcomingEvents">
        <div class="col-md-5 upcoming_title animate-on-scroll" data-delay="37">
          <span style="color:#A79BF5;">Upcoming</span><br> trg Events
      </div>
      <div class="col-md-7 upcoming_desc animate-on-scroll" data-delay="38">
        Join our Roundabouts events to experience the forefront of tech networking and knowledge sharing.
    </div>
</div>
</section>

<section class="upcoming_events_all">
    <div class="inner_upcoming_all">
     <div class="upcomingevents_withimage animate-on-scroll" data-delay="39">
        <?php echo do_shortcode('[ecs-list-events limit="2" thumb="true"]') ?>
    </div>
</div>
</section>


<section class="join_newsletter">
    <div class="inner_join_newsletter">
        <div class="join_nesleter_title animate-on-scroll" data-delay="40">
            JOIN THE <span style="color: #A79BF5;">TRG COMMUNITY</span> NEWSLETTER
        </div>
        <div class="join_desc animate-on-scroll" data-delay="41">
            Stay ahead with the latest job opportunities, exclusive content, market insights, and community-driven events - all delivered straight to your inbox.
        </div>
        <div class="newsltetr_form animate-on-scroll" data-delay="42">
            <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>