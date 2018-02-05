<?php 
/*
	Template Name: User-Experience Template
*/
get_header(); 
?>
     <div class="inner-banner" style="background-image : url('<?php the_field('user_experience_banner_image');?>')">
        <div class="container">
           <div class="col-5">
              <h2><?php the_field('user_experience_left_heading');?></h2>
              
          </div>
          <div class="col-7 border-lft">
            <?php the_field('user_experience_right_description');?>
          </div>
          </div>
        </div>
    </div>
    <div class="inner-page-tabs">
        <div class="container ux-single-d">
            <div class="col-6">
                <h3><?php the_field('user_experience_box1_heading');?></h3>
            </div>
            <div class="col-6">
                <?php the_field('user_experience_box1_description');?>
            </div>
        </div>
    </div>
    <div class="blog-posts-bottom">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="blog-posts-slider">
				
                <?php
                if( have_rows('user_experience_add_sliders') ): 
                    while ( have_rows('user_experience_add_sliders') ) : the_row();
                    $image = get_sub_field('user_experience_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('user_experience_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('user_experience_slider_heading'); ?></h3>
                        <p><?php the_sub_field('user_experience_slider_description'); ?></p>
                        <a href="<?php the_sub_field('user_experience_add_slider_redirect_link'); ?>"><?php the_sub_field('user_experience_add_slider_redirect_text'); ?></a>
                    </div>
                    </div>
                    <?php 
                    endwhile;
                else :
                    // no rows found
                endif; ?>
								
               
            </div>
        </div>
    </div>
  </div>
  </div>
    <div class="above-footer-link">
        <div class="container">
            <h4><?php the_field('user_experience_footerbanner_whyus_text');?></h4>
            <a href="<?php the_field('user_experience_footerbanner_button_url');?>"><?php the_field('user_experience_footerbanner_button_text');?></a>
        </div>
    </div>
    
    <?php get_footer(); ?>