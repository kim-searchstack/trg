 <div class="insight-card casestudy_data insight_data">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail();   } ?>
    <div class="post_only">
       <div class="services_category animate-on-scroll" data-delay="8">
        <?php 
                        $category_detail=get_the_category( $post->ID );//$post->ID
                        foreach($category_detail as $cd){?>
                            <span><?php echo $cd->cat_name; ?></span>
                        <?php }
                        ?>
                    </div>
                    <div class="sc-name case_title case_study_title"><?php the_title(); ?></div>
                    <input id="case_title" type="hidden" value="<?php the_title(); ?>">
                    <span class="casestudy_category">
                     <?php 
                     $terms = get_the_terms( $post->ID, 'category' ); 
                     foreach($terms as $term) {
                      echo $term->name.', ';
                      echo '<input type="hidden" class="cat_name" value="'.$term->name.'" />';
                  }
                  ?>
              </span> 
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