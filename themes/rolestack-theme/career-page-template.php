<?php
/**
 * Template Name: Career Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<div class="SubsectorMain_Banner">
    <div class="Subsectorinner_banner">
        <div class="background_imgsubsector" style="background-image: url(<?php the_field('background_image'); ?>)">
          <div class="page-banner_text">
            <h2><?php the_field('banner_heading'); ?></h2>
            <div class="lets_talk">
                <a href="<?php the_field('banner_buton_url'); ?>">
                    <button>Let’s talk</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ap-shadow"></div>
    <div class="custom-shape-divider-bottom-1658436464">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<div id="video_in_popup" class="">
    <div class="right_video_lightbox" style="background-image: url(<?php the_field('career_under_banner_thumbnail') ?>);">
        <a href="<?php the_field('career_under_banner_video_url'); ?>" data-lity>
            <img class="play_btn_video" src="/wp-content/uploads/2022/10/icons8-play-button-circled-1.svg"></a>
        </div>
    </div>

    

    <div class="faq_section-col">

      <div class="inner_faq_section">
        <?php the_field('challenge_text_home'); ?>
    </div>
    <div class="right_career_col">
        <img src="<?php the_field('about_right_thumbnail'); ?>">
    </div>
</div>
<div class="faq_section-col">
    <div class="inner_faq_section">
        <?php the_field('instagram_shortcode'); ?>
    </div>
    <div class="inner_faq_section">
       <?php the_field('instagram_right_text'); ?>
   </div>
</div>




<div class="inner_about_pageabout faq_section-col">
    <div class="inner_faq_section">
        <?php the_field('our_values_faq_left_para'); ?>
        <div class="lets_talk">
            <a href="/contact">
                <button>Let’s talk</button></a>
            </div>
        </div>

        <div class="all_faq_ques-ans">
            <?php 
            $rows = get_field('faq');
            if( $rows ) {
                echo '<ul class="faq">'; $i=0;
                foreach( $rows as $row ) {
                    echo'<div class="faqquestion_answers"><li class="q">'.wpautop( $row['faq_question'] ).'</li>';
                    echo'<li class="a">'.wpautop( $row['faq_answer'] ).'</li></div>';    

                }
                echo '</ul>';
            }
            ?>
        </div>
    </div>

    <div class="main_rowdream_job">
        <div class="col-md-5 dream_job">
            <a href="/jobs">
                <div class="looking_dream_job">
                    I am looking for<br><h3>Dream Job</h3>
                </div>
            </a>
        </div>

        <div class="col-md-5 dream_job">
            <a href="/career/">
                <div class="looking_dream_job">
                    I am looking for<br><h3>Hire great talent</h3>
                </div>
            </a>
        </div>
    </div>







    <script src="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="/wp-content/themes/rolestack-theme/js/rellax.min.js"></script>
    <script>
        jQuery(document).ready(function(){
            var rellax = new Rellax('.rellax', {
                center: true
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        var action = 'click';
        var speed = "500";
        jQuery(document).ready(function(){
            jQuery('li.q').on(action, function(){
                jQuery(this).next().slideToggle(speed)
                .siblings('li.a').slideUp();
                var list_i = jQuery( this ).find( 'span').text();
                var list_i_a = jQuery( 'li.q' ).find( 'span').text(); 
                if(list_i == "+"){
                    jQuery( this ).find( 'span').text('-')
                }
                else if(list_i == "-"){
                    jQuery( this ).find( 'span').text('+')
                }
            });

        });
    </script> 
    <script>
        jQuery(document).ready(function() { 

            var faq_first_quetion = jQuery('li.q').click();
        });

        $(function(){
            $('.faqquestion_answers').click(function(){
                $('.faqquestion_answers.faq_active').removeClass('faq_active');
                $(this).addClass('faq_active');
            });
        });
    </script>




    <style type="text/css">
        .faq li.q {
            font-weight: bold;
            font-size: 100%;
            cursor: pointer;
            display: flex;
            position: relative;
        }
        .faq li {
          padding-top: 0px;
          padding-bottom: 0px;
      }
      .faq, .faq li {
          list-style: none !important;
      }
  </style>
  <?php get_footer(); ?>