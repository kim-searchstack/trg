<?php
/**
 * Template Name: Insight Hub Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>

<section class="main_blog_banner">
    <div class="inner_blog_banner">
        <div class="insight_title animate-on-scroll" data-delay="2">Insights</div>
        <div class="category_filter-main">
            <div class="category_flter col-md-8 animate-on-scroll" data-delay="2">
             <?php $categories = get_categories(); ?>
             <div class="cat-list animate-on-scroll" data-delay="3">

               <a class="cat-list_item active" href="javascript:void();" data-slug=""> <button>All</button></a>

               <?php foreach($categories as $category) : ?>

                  <a class="cat-list_item animate-on-scroll" data-delay="4" href="javascript:void();" data-slug="<?= $category->slug; ?>"><button><?= $category->name; ?></button></a>

              <?php endforeach; ?>
          </div>
      </div>
      <div class="col-md-4 search_bar search_field_data">
          <input type="text" id='cat_title' class="form-control animate-on-scroll" data-delay="4" placeholder="Search">
          <?php
                $cats = get_categories();//print_r($cats);
                echo '<select class="cat_select" name="category">';
                echo '<option value="">Filter category</option>';
                foreach($cats as $cat) {
                    echo '<option value="'.$cat->name.'"> '.$cat->name.' </option>';
                }
                echo '</select>';
                ?>
                <button class="submit_title btn btn-primary animate-on-scroll" data-delay="5">Search</button>
            </div>
        </div>
    </div>
</section>


<section id="insight_hub" class="Opportunities_Await">
    <div  id='dom' class="row_insight">
        <?php
        $args = array(
            'post_type' => 'post',
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
               <?php include('project-list-item.php'); ?>
           <?php endwhile; ?>
       <?php endif; ?>
       <?php wp_reset_postdata(); ?>
   </div>
</section>

<script type="text/javascript">

    jQuery('.cat-list_item').on('click', function() {
      jQuery('.cat-list_item').removeClass('active');
      jQuery(this).addClass('active');

      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
          action: 'filter_projects',
          category: $(this).data('slug'),
      },
      success: function(res) {
          jQuery('.row_insight').html(res);
      }
  })
  });
</script>


<script>  
    $(document).ready (function () { 
        var all_post =  $(".insight_data").length;
        var arr_shown = new Array();
        var j1;
        for(j1=0;j1<all_post;j1++){
            arr_shown.push(j1);
        }
        console.log(arr_shown);
        $( '.insight_data').fadeOut(5);
        for(i1=0;i1<100;i1++){
            $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
        }
        var pi=0,pii=0,i1,mainc=all_post;
        if(mainc<100){ $("#next").attr("disabled", true);
    }
    $("#prev").attr("disabled", true);
               // arr_shown.push(0);
    $('.no_insight_data').fadeOut(10);
             $(".submit_title").click (function () { mainc=0; //alert("hiii");
                arr_shown.length = 0;
                var pi=0,pii=0,i1=0,i2=0,i3=0;
               // unset($arr_shown);
                $('.insight_data').fadeOut(500);
                var selectedCat = $('select.cat_select').children("option:selected").val();  
              var selectedtitle = $('#cat_title').val(); // console.log(selectedtitle.length + "test");
              var val,val_title,flag=false,view=false,guest_title;
              var arr2 = new Array();
              var arr = new Array();

              var arr1 = new Array();
              if(selectedCat.length>0){ 
                  $("#dom .cat_name").each(function(){
                      val = $(this).val();                  
                      if(val == selectedCat){          //alert("one"); //  $( '.insight_data:eq(' + index +  ')').fadeIn(500);              
                           // $(this).closest('.insight_data').fadeIn(500);                         
                         arr.push($(this).closest('.insight_data').index());     
                         console.log(selectedCat + " = category " + ", index =  "  + $(this).closest('.insight_data').index());
                         console.log(arr);
                     }       
                 });
                  flag=true;
              }
              if(selectedtitle.length>0){ 
                  $("#dom #case_title").each(function(){    
                      val_title = $(this).val().toUpperCase();;;//console.log(val_title + ":contains('" + selectedtitle.toLowerCase() + "')");
                      selectedtitle1 = selectedtitle.toUpperCase();
                      console.log('val_title' + val_title);
                      console.log('selectedtitle1' + selectedtitle1);
                      if(val_title.search(selectedtitle1) > -1) {   //alert(selectedtitle1);
                       //alert(selectedCat.length);
                       // $(this).closest('.insight_data').fadeIn(500);    
                       arr1.push($(this).closest('.insight_data').index()); 
                       //console.log("guest name = " +$(this).closest('.insight_data').index());
                       console.log(selectedtitle + " = title " + ", index =  "  + $(this).closest('.insight_data').index());
                   }

               });
                  flag=true;
                  
                  
              }


         //arr category , arr1 title , arr2 guest name
              if(flag){
                  if(selectedCat.length > 0 && selectedtitle.length > 0){ 
                    for(var t=0;t<arr1.length+1;t++){
                        for(var c=0;c<arr.length+1;c++){


                     if(arr1[t] ==  arr[c] ){  //arr_shown
                         //alert("arr.length > 0 && arr1.length > 0 && arr2.length > 0");
                        index = arr1[t]// = arr[c];
                        //console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
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
            $( '.insight_data').fadeOut(5);
            for(i1=0;i1<100;i1++){
                $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
            }

      //$('.insight_data').fadeIn(500);
            $('.no_insight_data').fadeOut(500);
            view = true;
        }
        else if(selectedCat.length > 0  && selectedtitle.length == 0 ){ 
            for(var c=0;c<arr.length+1;c++){

                        index = arr[c]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);

                    }
                }

                else if(selectedtitle.length > 0  && selectedCat.length == 0 ){ 
                    for(var t=0;t<arr1.length+1;t++){ 


                        index = arr1[t]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);

                    }
                }

                else{
                   $('.insight_data').fadeOut(500);
                   $('.no_insight_data').fadeIn(500);
                   view = false;
               }




           }

           if(selectedtitle.length < 1 && selectedCat.length < 1  ){
//alert("hiiiiiiiiiiiiiiiiiiiiiiiiiiiii");
            mainc = all_post;
       // alert(mainc);
            for(j1=0;j1<all_post;j1++){
                arr_shown.push(j1);
            }
            console.log("arr_shown");
            $( '.insight_data').fadeOut(5);
            for(i1=0;i1<100;i1++){
                $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
            }

      //$('.insight_data').fadeIn(500);
            $('.no_insight_data').fadeOut(500);
            view = true;
        }

        console.log("new count = " +  mainc);
        console.log("new array = " +  arr_shown);
        if(view){ 
          $('.no_insight_data').fadeOut(500);
          if(mainc>100){ $("#next").attr("disabled", false);
          for(i1=0;i1<100;i1++){
            $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
        }
    }
    else{ $("#next").attr("disabled", true);
    for(i1=0;i1<mainc;i1++){
        $( '.insight_data:eq(' + arr_shown[i1] +  ')').fadeIn(500);
    }  
}
if(arr_shown.length <= 1){
    $('.no_insight_data').fadeIn(500);
}
}else{ //alert("hello");
  $('.no_insight_data').fadeIn(500);
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
    $('.insight_data').fadeOut(5);
    for(var i3=0;mainc>i3+pii;i3++){// alert(mainc);
        $( '.insight_data:eq(' + arr_shown[i3+pii] +  ')').fadeIn(500);
        last=i3;$("#next").attr("disabled", true);
    }

    }else{ $('.insight_data').fadeOut(5);// alert("gygygygyg");
    for(var i2=0;i2<100;i2++){ 
        $( '.insight_data:eq(' + arr_shown[i2+pii] +  ')').fadeIn(500);
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
    $('.insight_data').fadeOut(5);
    for(var i2=0;i2<100;i2++){ 
        $( '.insight_data:eq(' + arr_shown[i2+pii] +  ')').fadeIn(500);
    }
});
});  
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<?php get_footer(); ?>