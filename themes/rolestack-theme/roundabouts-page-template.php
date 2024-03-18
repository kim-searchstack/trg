<?php
/**
 * Template Name: Roundabouts Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>
<section class="roundabout_banner">
    <div class="inner_roundabout">
        <div class="logo_roundabout animate-on-scroll" data-delay="1">
            <img src="/wp-content/uploads/2023/09/roundabout-logo-new.png">
        </div>
        <div class="emage_inovation animate-on-scroll" data-delay="2">
            Come for the <span style="color: #59CFAF;">Roundabouts</span> stay for the <span style="color: #59CFAF;">community</span></span>
        </div>
        <div class="innovation_desc animate-on-scroll" data-delay="3">
            People Driven Tech Transformation. One Roundabout at a Time.
        </div>
    </div>
</section>
<section class="roundabput_logo_flex">
    <div class="five_images animate-on-scroll" data-delay="5">
        <img src="/wp-content/uploads/2023/09/audience-image.jpg">
        <img src="/wp-content/uploads/2023/09/event-group.jpg">
        <img src="/wp-content/uploads/2023/09/sticky-group-1.jpg">
        <img src="/wp-content/uploads/2023/09/sky-speaker-image.jpg">
        <img src="/wp-content/uploads/2023/09/mobby-speaking.jpg">
    </div>
    <div class="trysted_by_logos">
        <div class="inner_trusted_logos">
            <div class="trysted_bu_title animate-on-scroll" data-delay="6">We’re home to people from:</div>
        </div>
        <div class="partner-logo">
            <?php if( have_rows('trusted_by_the_biggest_companies') ): ?>   
                <?php while( have_rows('trusted_by_the_biggest_companies') ): the_row(); ?>
                    <div class="trusted_image animate-on-scroll" data-delay="7">
                        <img src="<?php the_sub_field('logo'); ?>">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="roundbaout_Sector">
    <div class="inner_roundbaout_Sector">
        <div class="roundabout_left animate-on-scroll" data-delay="8">
         <img src="<?php the_field('roundabout_about_image'); ?>"> 
     </div>
     <div class="roundabout_right animate-on-scroll" data-delay="8">
        <?php the_field('roundabout_about_sector'); ?>
        <div class="view_upcoming_event animate-on-scroll" data-delay="9">
        </div>
    </div>
</div>
</section>

<section class="different_roundabouts">
    <div class="inner_roundabouts">
        <div class="left_diffrent_round animate-on-scroll" data-delay="10">
            <?php the_field('different_roundabouts'); ?>
            <div class="view_upcoming_event animate-on-scroll" data-delay="11">
                <a href="#contact_bottom"><button class="view_upcoming_btn">Join our next event</button></a>
            </div>
        </div>
        <div class="diffrent_repeater">
            <div class="diffrwent_image">
                <div class="all_popup_img">
                 <div class="click-agile animate-on-scroll" data-delay="12"> 
                    <a href="/tech-recruitment/agile/" class="eco-link" >
                        <img src="/wp-content/uploads/2023/09/agile-roundabout.png" class="agile-img">
                    </a> 
                </div>
                <div class="click-data animate-on-scroll" data-delay="13"> 
                    <a href="/tech-recruitment/data/" class="eco-link" >
                    <img src="/wp-content/uploads/2023/09/data-roundabout.png" class="data-img">
                </a></div>
                <div class="click-engineering animate-on-scroll" data-delay="14"> 
                    <a href="/tech-recruitment/engineering/" class="eco-link" >
                    <img src="/wp-content/uploads/2023/09/engineering-roundabout.png" class="engineering-img">
                </a></div>
                <div class="click-ux animate-on-scroll" data-delay="15"> 
                    <a href="/tech-recruitment/design-ux/" class="eco-link" >
                    <img src="https://www.trg-uk.com/wp-content/uploads/2024/03/design-roundabout-white-bg.png" class="ux-img">
                </a></div>
            </div>
        </div>
        <div class="popup-container" style="display: none;">
            <div class="popup-block popup-agile " id="agile" style="display: none;">
                <div class="panel-content-container"><?php the_field('agile_popup'); ?></div>

            </div>
            <div class="popup-block popup-data " id="data" style="display: none;">
                <div class="panel-content-container"><?php the_field('data_popup'); ?></div>

            </div>
            <div class="popup-block popup-engineering " id="engineering" style="display: none;">
                <div class="panel-content-container"><?php the_field('engineering_popup'); ?></div>

            </div>
            <div class="popup-block popup-ux " id="ux" style="display: none;">
                <div class="panel-content-container"><?php the_field('uk_popup'); ?></div>

            </div>
        </div>
    </div>
</div>
</section>
<section class="iframe_section">
    <div class="irame_div">
        <iframe width="540" height="1000" src=https://51a58a68.sibforms.com/serve/MUIFAP_V0aKEZdzTYfHH4kzLOqeVUHp5TC0tPUhbTuGvK-w18VKj15uqHCH0q3y1b8JFUzSukAHzKSQpN1ZYIODt2gaEFkgPT84syqUP5x7mnsJR7j3w3D9wSV1QsUCIrpMkPqP9Bq_jX6dM64kqnf3EqquceIZ_6UwFd55LZISkV1EaLW3LCEFVrZ7rqxVPeV3vfOiKtOGf39V5 frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>
    </div>
</section>

<section class="upcpoming_events">
    <div class="upcoming_ebent-title animate-on-scroll" data-delay="16">
        Upcoming Events
    </div>
    <div class="all_engering_events animate-on-scroll" data-delay="19">
      <?php
      $args = array(
        'post_type' => 'roundabout_event',
        'post_status' => 'publish',
        'meta_key'=> 'roundabout_date',
        'orderby'=> 'meta_value_num',
        'order'=> 'ASC',
        'posts_per_page' => '-1',
        'paged' => 1,
    );
      $blog_posts = new WP_Query( $args );
      ?>

      <?php if ( $blog_posts->have_posts() ) : ?>
        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
            <div class="all_event_cpt">
                <div class="col-md-2 image_event">
                    <?php
                    $image_url = "";
                    $option = get_field("roundabout_type");

                    if($option=="Agile"){
                      $image_url = "/wp-content/uploads/2023/09/agile-roundabout.png";
                  }
                  else if($option=="Data"){
                      $image_url = "/wp-content/uploads/2023/09/data-roundabout.png";
                  }
                  else if($option=="Engineering"){
                    $image_url = "/wp-content/uploads/2023/09/engineering-roundabout.png";
                }
                else if($option=="UX"){
                  $image_url = "/wp-content/uploads/2023/09/ux-roundabout.png";
              }

              ?>
              <img src="<?php echo $image_url; ?>">

          </div>
          <div class="col-md-5 title_eventcat">
            <div class="event_category_single">
                <?php the_field('roundabout_type'); ?>
            </div>
            <div class="event_title_single">
                <?php the_field('roundabout_title'); ?>
            </div>

        </div>
        <div class="col-md-3 date_venue_event">
            <div class="get_event_date_time">
                <?php the_field('roundabout_date'); ?> - <?php the_field('roundabout_time'); ?> 
            </div>
            <div class="event_loc_single">
                <a href="<?php the_field('location_url'); ?>"><?php the_field('roundabout_location'); ?></a>
            </div>
        </div>
        <div class="col-md-2 more_info_event">
            <a href="<?php the_permalink(); ?>">More Information <img src="/wp-content/uploads/2023/10/arrow_back.png"></a>
        </div>
        <a class="permanlink_event" href="<?php the_permalink(); ?>"></a>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

</div>
</section>
<section class="Roundabout_News" style="">
    <div class="inner_roundabout_news">
        <div class="titile_news_roundbaout">
            Roundabout News
        </div>
        <div id='all_news_posts' class="all_news_posts">
            <?php

            $the_query = new WP_Query( array('posts_per_page'=>1,
                'post_type'=>'roundabout_news',
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
echo '<div class="paginate_links" style="padding-top:2rem;width: 100%;text-align: center;text-decoration: none;color: #59cfaf;">';
$big = 999999999; // need an unlikely integer
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages,
    'add_args' => array( '#all_news_posts')
) );
echo '</div>';
wp_reset_postdata(); ?>
<style>
    .paginate_links a{
       text-align: center;
       text-decoration: none;
       color: #59cfaf;
   }
</style>
</div>
</div>
</section>


<section class="community_say">
    <div class="inner_community_say">
        <div class="gradient-graphic"></div>
        <div class="community_title animate-on-scroll" data-delay="20">What our community say</div>
        <div class="round_testimonial">
            <?php if( have_rows('roundabout_testimonial') ): ?>   
                <?php while( have_rows('roundabout_testimonial') ): the_row(); ?>
                    <div class="mai_diff-repeater">
                        <div class="repeater_toprow">
                            <div class="title_position">
                                <div class="roundabout_title animate-on-scroll" data-delay="21">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <div class="roundabout_position animate-on-scroll" data-delay="22">
                                    <?php the_sub_field('position'); ?>
                                </div>
                            </div>
                            <div class="roundabout_fdesc animate-on-scroll" data-delay="23">
                                <?php the_sub_field('desc'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </div>
</section>

<section class="roundbaout_Sector">
    <div class="inner_roundbaout_Sector">
        <div class="left_bottom_img animate-on-scroll" data-delay="24">
         <img src="<?php the_field('left_bottom_img'); ?>"> 
     </div>
     <div class="bottom_aboutsec animate-on-scroll" data-delay="25">
        <?php the_field('bottom_aboutsec'); ?>
        <div class="view_upcoming_event animate-on-scroll" data-delay="26">
            <a href="#contact_bottom"><button class="view_upcoming_btn animate-on-scroll" data-delay="27">Let's talk partnerships</button></a>
        </div>
    </div>
</div>
</section>
<section id="contact_bottom" class="boottom_contact_form get_intouch ">
    <div class="col-md-2"></div>
    <div class="col-md-8 inner_contact_form">
        <div class="answer_ques animate-on-scroll" data-delay="28">
            Is the answer to your question missing? <br>Get in touch with us.
        </div>
        <div class="conatct_form animate-on-scroll" data-delay="29">
            <?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
        </div>
    </div>
    <div class="col-md-2"></div>
</section>

<?php get_footer(); ?>



<script>  
    $(document).ready (function () { 
        var all_post =  $(".ecs-event").length;
        var arr_shown = new Array();
        var j1;
        for(j1=0;j1<all_post;j1++){
            arr_shown.push(j1);
        }
        console.log(arr_shown);

        var flag = true;

        var pi=0,pii=0,i1,mainc=all_post;
        if(mainc<100){ $("#next").attr("disabled", true);
    }
    $("#prev").attr("disabled", true);
               // arr_shown.push(0);
    $('.no_ecs-event').fadeOut(10);
    $.expr[":"].contains = $.expr.createPseudo(function(arg) {
        return function( elem ) {
            return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
        };
    });
             $(".submit_title").click (function () { mainc=0; //alert("hiii");
                var url = new URL(window.location.href);
//var url = new URL(window.location.origin + window.location.pathname) <- flush existing parameters
                url.searchParams.delete("title", "");window.history.pushState(null, null, url);
                arr_shown.length = 0;
                var pi=0,pii=0,i1=0,i2=0,i3=0;
               // unset($arr_shown);
                $('.ecs-event').fadeOut(500);
                var selectedCat = $('select.cat_select').children("option:selected").val().toLowerCase(); //alert(selectedCat); 
              var selectedtitle = $('#cat_title').val(); //alert(selectedtitle);// console.log(selectedtitle.length + "test");
              var val,val_title,flag=false,view=false,guest_title;
              var arr2 = new Array();
              var arr = new Array();

              var arr1 = new Array();
              if(selectedCat.length>0){ 
                  $(".ecs-event-list .ecs-event").each(function(){
                      //val = $(this).hasClass(selectedCat + "_ecs_category");                  
                      if($(this).hasClass(selectedCat + "_ecs_category")){    flag=true;      //alert("one"); //  $( '.ecs-event:eq(' + index +  ')').fadeIn(500);              
                           // $(this).closest('.ecs-event').fadeIn(500);                         
                      arr.push($(this).closest('.ecs-event').index());     
                      console.log(selectedCat + " = category " + ", index =  "  + $(this).closest('.ecs-event').index());
                      console.log(arr);
                  }       
              });
                  
              }
              if(selectedtitle.length>0){ 
                  $(".ecs-event-list .entry-title a").each(function(){    
                      val_title = $(this).text().toUpperCase();;;//console.log(val_title + ":contains('" + selectedtitle.toLowerCase() + "')");
                      selectedtitle1 = selectedtitle.toUpperCase();
                      console.log('val_title' + val_title);
                      console.log('selectedtitle1' + selectedtitle1);
                      if(val_title.search(selectedtitle1) > -1) { flag=true;  //alert(selectedtitle1);
                       //alert(selectedCat.length);
                       // $(this).closest('.ecs-event').fadeIn(500);    
                      arr1.push($(this).closest('.ecs-event').index()); 
                       //console.log("guest name = " +$(this).closest('.ecs-event').index());
                      console.log(selectedtitle + " = title " + ", index =  "  + $(this).closest('.ecs-event').index());
                  }

              });
                  
                  
                  
              }


         //arr category , arr1 title , arr2 guest name
              if(flag){ $('.result').hide();
              if(selectedCat.length > 0 && selectedtitle.length > 0){ 
                for(var t=0;t<arr1.length+1;t++){
                    for(var c=0;c<arr.length+1;c++){


                     if(arr1[t] ==  arr[c] ){  //arr_shown
                         //alert("arr.length > 0 && arr1.length > 0 && arr2.length > 0");
                        index = arr1[t]// = arr[c];
                        //console.log("index  ===   " + index);
                        //$( '.ecs-event:eq(' + index +  ')').fadeIn(500);
                        view = true;
                        mainc = mainc + 1;
                        arr_shown.push(index);

                    }
                }
            }

        }

        else if(selectedtitle.length == 0  && selectedCat.length == 0){ 
            mainc = all_post;
       // alert(mainc);
            for(j1=0;j1<all_post;j1++){
                arr_shown.push(j1);
            }
            console.log("arr_shown");
            $( '.ecs-event').fadeOut(5);
            for(i1=0;i1<100;i1++){
                $( '.ecs-event:eq(' + arr_shown[i1] +  ')').fadeIn(500);
            }

      //$('.ecs-event').fadeIn(500);
            $('.no_ecs-event').fadeOut(500);
            view = true;
        }
        else if(selectedCat.length > 0  && selectedtitle.length == 0 ){ 
            for(var c=0;c<arr.length+1;c++){

                        index = arr[c]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.ecs-event:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);

                    }
                }

                else if(selectedtitle.length > 0  && selectedCat.length == 0 ){ 
                    for(var t=0;t<arr1.length+1;t++){ 


                        index = arr1[t]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.ecs-event:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);

                    }
                }

                else{
                 $('.ecs-event').fadeOut(500);
                 $('.no_ecs-event').fadeIn(500);
                 view = false;
             }




         }
		   if(arr_shown.length <= 1 && selectedCat.length > 0 && selectedtitle.length > 0){ //alert(arr_shown.length);
          $('.result').show();
      }

      if(selectedtitle.length < 1 && selectedCat.length < 1  ){
//alert("hiiiiiiiiiiiiiiiiiiiiiiiiiiiii");
        mainc = all_post;
       // alert(mainc);
        for(j1=0;j1<all_post;j1++){
            arr_shown.push(j1);
        }
        console.log("arr_shown");
        $( '.ecs-event').fadeOut(5);
        for(i1=0;i1<100;i1++){
            $( '.ecs-event:eq(' + arr_shown[i1] +  ')').fadeIn(500);
        }

      //$('.ecs-event').fadeIn(500);
        $('.no_ecs-event').fadeOut(500);
        view = true;
    }

    console.log("new count = " +  mainc);
    console.log("new array = " +  arr_shown);
    if(view){ 
      $('.no_ecs-event').fadeOut(500);
      if(mainc>100){ $("#next").attr("disabled", false);
      for(i1=0;i1<100;i1++){
        $( '.ecs-event:eq(' + arr_shown[i1] +  ')').fadeIn(500);
    }
}
else{ $("#next").attr("disabled", true);
for(i1=0;i1<mainc;i1++){
    $( '.ecs-event:eq(' + arr_shown[i1] +  ')').fadeIn(500);
}  
}
if(arr_shown.length <= 1){
    $('.no_ecs-event').fadeIn(500);
}
}else{ //alert("hello");
  $('.no_ecs-event').fadeIn(500);
        //alert("hi11"); 
}
if(mainc<100){ 
    $("#prev").attr("disabled", true);
    $("#next").attr("disabled", true);
}
}); 
var last=0;
$("#next").click (function () { // alert(mainc); alert("gygygygyg");
    pi=pi+1;
    pii = pi * 100;
    $("#prev").attr("disabled", false);
    
    if(mainc<100){ $("#next").attr("disabled", true);
}
if(pii+100 >= mainc){
    $("#next").attr("disabled", true);
        //alert("gygygygyg");
    $('.ecs-event').fadeOut(5);
    for(var i3=0;mainc>i3+pii;i3++){// alert(mainc);
        $( '.ecs-event:eq(' + arr_shown[i3+pii] +  ')').fadeIn(500);
        last=i3;$("#next").attr("disabled", true);
    }

    }else{ $('.ecs-event').fadeOut(5);// alert("gygygygyg");
    for(var i2=0;i2<100;i2++){ 
        $( '.ecs-event:eq(' + arr_shown[i2+pii] +  ')').fadeIn(500);
    }
}
});
$("#prev").click (function () {   
    $("#next").attr("disabled", false);
    pi=pi-1;
    pii = pi * 100;
    //alert(pi);
    if(pi==0){
        $("#prev").attr("disabled", true);
    }
    $('.ecs-event').fadeOut(5);
    for(var i2=0;i2<100;i2++){ 
        $( '.ecs-event:eq(' + arr_shown[i2+pii] +  ')').fadeIn(500);
    }
});
});  
</script>