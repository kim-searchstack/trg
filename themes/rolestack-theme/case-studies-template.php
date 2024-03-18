<?php
/**
 * Template Name: Case Studies Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package searchstack
 */

?>
<?php get_header(); ?>

<section class="case-studies-banner">
    <div class="inner_case_studies">
        <div class="market_defining">
            Building <span style="color: #59CFAF;">Market<br> Defining</span> Teams
        </div>
        <div class="building_desc">
            Commited to making a difference in<br> the tech industry.
        </div>
    </div>
</section>

<div id="blog-section-row" class="insight_section">
    <div id='search-fields' class="search custom_Search_cat animate-on-scroll" data-delay="0.2">
        <div class="search_field_data">
            <input type="text" id='cat_title' class="form-control" placeholder="Search Projects">
            <?php
            $cats = get_terms(['taxonomy' => 'casestudies_cat']);
            echo '<select class="cat_select" name="category">';
            echo '<option value="">Select Category</option>';
            foreach ($cats as $cat) {
                echo '<option value="' . $cat->name . '"> ' . $cat->name . ' </option>';
            }
            echo '</select>';
            ?>
            <button class="submit_title btn btn-primary">Search</button>
        </div>
    </div>
    <p class="case_study_title no_insight_data">No Case Study Found</p>
    <div class="casestudy_row">
        <section  id="dom" class="case_studies_row">
            <div class="inner_row-case">
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
                    <div class="casestudy_data insight_data job-consultant-card">
                        <div class="hp-tab-shadow"></div>
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
                        <div class="team_information">
                           <div class="services_category">
                            <?php
                            $terms=get_the_terms( $post->ID, 'casestudies_cat' );
                            foreach($terms as $term)
                                { ?>
                                  <div class="category_name_cat">
                                    <span>
                                        <?php echo $term->name; ?>
                                        <input type="hidden" class="cat_name" value="<?php echo $term->name; ?>">
                                    </span>
                                </div>
                            <?php }
                            ?>
                        </div>
                        <div class="sc-name"><?php the_title(); ?></div>
                        <input id='case_title' type="hidden" value="<?php the_title(''); ?>">
                        <div class="sc-title"><?php $content = get_the_content(); ?>
                        <?php
                        preg_match('/^([^.!?\s]*[\.!?\s]+){0,10}/', strip_tags($content), $abstract);
                        echo $abstract[0] . '...';
                    ?>  </div>
                    <div id="row-all-team" class="button_withicon casestudy_button">
                        <a href="<?php the_permalink(); ?>" class="hph-link cs-link"></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>
</section>


<div class="case_study_single">
    <div class="inner_study_single">
        <?php the_field('case_study_single'); ?>
    </div>
    <div class="unumer_repater">
       <?php if( have_rows('case_study_repeater') ): ?>   
        <?php while( have_rows('case_study_repeater') ): the_row(); ?>
            <div class="number_rep-row">
                <div class="inner_number_rep-row">
                    <?php the_sub_field('number'); ?>
                </div>
                <div class="desc-row">
                    <?php the_sub_field('desc'); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="trusted_biggest_companies">
    <?php if( have_rows('trusted_by_the_biggest_companies') ): ?>   
        <?php while( have_rows('trusted_by_the_biggest_companies') ): the_row(); ?>
            <div class="trusted_image">
                <img src="<?php the_sub_field('logo'); ?>">
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
</div>


<section class="community_say tetsimonial-case-stufy">
    <div class="inner_casestudy-testimonial">
        <div class="main-heading-testmonial">
            Client Testimonials
        </div>
        <div class="all-case-stify-testomonials">
            <div class="inner_casetestomonials">
             <?php if( have_rows('case_studies_testimonial') ): ?>   
                <?php while( have_rows('case_studies_testimonial') ): the_row(); ?>
                    <div class="case-stufy-test-row">
                        <div class="inner_stufy-test-row">
                            <?php the_sub_field('desc'); ?>
                        </div>
                        <div class="profile-name-position-testi">
                            <div class="inner_name-position">
                                <img src="<?php the_sub_field('profile_image'); ?>">
                            </div>
                            <div class="clow-prof-tile">
                                <div class="inner_stufy-title-row">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <div class="inner_stufy-position">
                                    <?php the_sub_field('position'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</section>
<script>
    $(document).ready(function () {
        var all_post = $(".insight_data").length;
        var arr_shown = new Array();
        var j1;
        for (j1 = 0; j1 < all_post; j1++) {
            arr_shown.push(j1);
        }
        console.log(arr_shown);
        $('.insight_data').fadeOut(5);
        for (i1 = 0; i1 <100; i1++) {
            if(i1==0 || i1==3){
                $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('even').removeClass('odd');
            }
            else{
                $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('odd').removeClass('even');;
            }
        }
        var pi = 0, pii = 0, i1, mainc = all_post;
        if (mainc <100) {
            $("#next").attr("disabled", true);
        }
        $("#prev").attr("disabled", true);
        // arr_shown.push(0);
        $('.no_insight_data').fadeOut(10);
        $.expr[":"].contains = $.expr.createPseudo(function (arg) {
            return function (elem) {
                return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
            };
        });
        $(".submit_title").click(function () {
            mainc = 0; //alert("hiii");
            arr_shown.length = 0;
            var pi = 0, pii=0, i1=0,i2=0,i3=0;
            // unset($arr_shown);
            $('.insight_data').fadeOut(500);
            var selectedCat = $('select.cat_select').children("option:selected").val();
            var selectedtitle = $('#cat_title').val(); // console.log(selectedtitle.length + "test");
            var val, val_title, flag = false, view = false, guest_title;
            var arr2 = new Array();
            var arr = new Array();
            //alert(selectedCat)
            //alert(selectedtitle)
            var arr1 = new Array();
            if (selectedCat.length > 0) {
                $("#dom .cat_name").each(function () {
                    val = $(this).val();
                    if (val == selectedCat) {          //alert("one"); //  $( '.insight_data:eq(' + index +  ')').fadeIn(500);              
                        // $(this).closest('.insight_data').fadeIn(500);                         
                        arr.push($(this).closest('.insight_data').index());
                        console.log(selectedCat + " = category " + ", index =  " + $(this).closest('.insight_data').index());
                        console.log(arr);
                    }
                });
                flag = true;
            }
            if (selectedtitle.length > 0) {
                $("#dom #case_title").each(function () {
                    val_title = $(this).val().toUpperCase();;;//console.log(val_title + ":contains('" + selectedtitle.toLowerCase() + "')");
                    selectedtitle1 = selectedtitle.toUpperCase();
                    console.log('val_title' + val_title);
                    console.log('selectedtitle1' + selectedtitle1);
                    if (val_title.search(selectedtitle1) > -1) {   //alert(selectedtitle1);
                        //alert(selectedCat.length);
                        // $(this).closest('.insight_data').fadeIn(500);    
                        arr1.push($(this).closest('.insight_data').index());
                        //console.log("guest name = " +$(this).closest('.insight_data').index());
                        console.log(selectedtitle + " = title " + ", index =  " + $(this).closest('.insight_data').index());
                    }

                });
                flag = true;


            }


            //arr category , arr1 title , arr2 guest name
            if (flag) {
                if (selectedCat.length > 0 && selectedtitle.length > 0) {
                    for (var t = 0; t < arr1.length + 1; t++) {
                        for (var c = 0; c < arr.length + 1; c++) {


                            if (arr1[t] == arr[c]) {  //arr_shown
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

                else if (selectedtitle.length == 0 && selectedCat.length == 0) {
                    mainc = all_post;
                    // alert(mainc);
                    for (j1 = 0; j1 < all_post; j1++) {
                        arr_shown.push(j1);
                    }
                    console.log("arr_shown");
                    $('.insight_data').fadeOut(5);
                    for (i1 = 0; i1 <100; i1++) {
                        if(i1==0 || i1==3){
                            $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('even').removeClass('odd');
                        }
                        else{
                            $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('odd').removeClass('even');;
                        }
                    }

                    //$('.insight_data').fadeIn(500);
                    $('.no_insight_data').fadeOut(500);
                    view = true;
                }
                else if (selectedCat.length > 0 && selectedtitle.length == 0) {
                    for (var c = 0; c < arr.length + 1; c++) {

                        index = arr[c]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);

                    }
                }

                else if (selectedtitle.length > 0 && selectedCat.length == 0) {
                    for (var t = 0; t < arr1.length + 1; t++) {


                        index = arr1[t]// = arr[c];
                        console.log("index  ===   " + index);
                        //$( '.insight_data:eq(' + index +  ')').fadeIn(500);
                        view = true; mainc = mainc + 1;
                        arr_shown.push(index);

                    }
                }

                else {
                    $('.insight_data').fadeOut(500);
                    $('.no_insight_data').fadeIn(500);
                    view = false;
                }




            }

            if (selectedtitle.length < 1 && selectedCat.length < 1) {
                //alert("hiiiiiiiiiiiiiiiiiiiiiiiiiiiii");
                mainc = all_post;
                // alert(mainc);
                for (j1 = 0; j1 < all_post; j1++) {
                    arr_shown.push(j1);
                }
                console.log("arr_shown");
                $('.insight_data').fadeOut(5);
                for (i1 = 0; i1 <100; i1++) {
                    if(i1==0 || i1==3){
                        $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('even').removeClass('odd');
                    }
                    else{
                        $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('odd').removeClass('even');;
                    }
                }

                //$('.insight_data').fadeIn(500);
                $('.no_insight_data').fadeOut(500);
                view = true;
            }

            console.log("new count = " + mainc);
            console.log("new array = " + arr_shown);
            if (view) {
                $('.no_insight_data').fadeOut(500);
                if (mainc >100) { $("#next").attr("disabled", false);
                for (i1 = 0; i1 <100; i1++) {
                    if(i1==0 || i1==3){
                        $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('even').removeClass('odd');
                    }
                    else{
                        $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('odd').removeClass('even');;
                    }
                }
            }
            else { $("#next").attr("disabled", true);
            for (i1 = 0; i1 < mainc; i1++) {
                if(i1==0 || i1==3){
                    $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('even').removeClass('odd');
                }
                else{
                    $('.insight_data:eq(' + arr_shown[i1] + ')').fadeIn(500).addClass('odd').removeClass('even');;
                }
            }
        }
        if (arr_shown.length <= 1) {
            $('.no_insight_data').fadeIn(500);
        }
            } else { //alert("hello");
                $('.no_insight_data').fadeIn(500);
                //alert("hi11"); 
            }
            if (mainc <100) {
                $("#prev").attr("disabled", true);
                $("#next").attr("disabled", true);
            }else{
                $("#next").attr("disabled", false);
            }
        });
var last = 0;
        $("#next").click(function () {  //alert(mainc); alert(pii);
            pi = pi + 1;
            pii = pi *100;
            $("#prev").attr("disabled", false);

            if (mainc <100) {
                $("#next").attr("disabled", true);
            }else{
                $("#next").attr("disabled", false);
            }
            if (pii +100 >= mainc) {
                $("#next").attr("disabled", true);
                //alert("gygygygyg");
                $('.insight_data').fadeOut(5);
                for (var i3 = 0; mainc > i3 + pii; i3++) {// alert(mainc);

                    //alert(i3);
                    if(i3==0 || i3==3){
                        $('.insight_data:eq(' + arr_shown[i3 + pii] + ')').fadeIn(500).addClass('even').removeClass('odd');
                    }
                    else{ 
                        $('.insight_data:eq(' + arr_shown[i3 + pii] + ')').fadeIn(500).addClass('odd').removeClass('even');;
                    }
                    
                    last = i3; $("#next").attr("disabled", true);
                }

            } else {
                $('.insight_data').fadeOut(5);// alert("gygygygyg");
                for (var i2 = 0; i2 <100; i2++) { //alert(i2);

                    if(i2==0 || i2==3){
                        $('.insight_data:eq(' + arr_shown[i2 + pii] + ')').fadeIn(500).addClass('even').removeClass('odd');
                    }
                    else{
                        $('.insight_data:eq(' + arr_shown[i2 + pii] + ')').fadeIn(500).addClass('odd').removeClass('even');;
                    }
                    
                }
            }
        });
        $("#prev").click(function () {
            $("#next").attr("disabled", false);
            pi = pi - 1;
            pii = pi *100;
            //alert(pi);
            if (pi == 0) {
                $("#prev").attr("disabled", true);
            }
            $('.insight_data').fadeOut(5);
            for (var i2 = 0; i2 <100; i2++) {
                if(i2==0 || i2==3){
                    $('.insight_data:eq(' + arr_shown[i2 + pii] + ')').fadeIn(500).addClass('even').removeClass('odd');
                }
                else{
                    $('.insight_data:eq(' + arr_shown[i2 + pii] + ')').fadeIn(500).addClass('odd').removeClass('even');;
                }
            }
        });
    });  
</script>
<?php get_footer(); ?>