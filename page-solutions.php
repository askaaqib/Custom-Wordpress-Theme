<?php 
/*
	Template Name: Solutions Template
*/

get_header(); 

?>

      <div class="inner-banner" style="background-image : url('<?php the_field('solutions_banner_image');?>')">
        <div class="container">
          <div class="col-5">
              <h2><?php the_field('solutions_banner_text'); ?></h2>
              <?php the_field('solutions_banner_left_desc'); ?>

          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('solutions_banner_heading'); ?></h1>
          </div>
        </div>
    </div>



    <div class="inner-page-tabs">
      <div class="container">

          <div class="inner-top-above-tabs">
            <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('solutions_content_heading'); ?></h1>
            <p><?php the_field('solutions_content_description'); ?></p>
          </div>

        <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
            <label for="tab1"><?php the_field('solutions_tab1_title'); ?></label>

            <input type="radio" id="tab2" name="tabGroup1" class="tab">
            <label for="tab2"><?php the_field('solutions_tab2_title'); ?></label>

            <!-- Tab 1 Content -->
            <div class="tab__content">
              <?php
              if( have_rows('solutions_tab1_add_boxes') ):
                  while ( have_rows('solutions_tab1_add_boxes') ) : the_row();
                  $image = get_sub_field('solutions_tab1_box_icon');
                  ?>
                   <div class="col-4">
                   <div class="content-card with-icons">
                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                       <h2><?php the_sub_field('solutions_tab1_box_heading'); ?></h2>
                       <p><?php the_sub_field('solutions_tab1_box_description'); ?></p>
                       <a href="<?php the_sub_field('solutions_tab1_box_readmore_link'); ?>">Read More</a>
                   </div>
                </div>
              <?php endwhile;
              else :
                  // no rows found
              endif;         ?>
            </div>


            <!-- Tab 2 Content -->
            <div class="tab__content">
             <?php
              if( have_rows('solutions_tab2_add_boxes') ):
                  while ( have_rows('solutions_tab2_add_boxes') ) : the_row();
                  $image = get_sub_field('solutions_tab2_box_icon');
                  ?>
                   <div class="col-4">
                   <div class="content-card with-icons">
                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                       <h2><?php the_sub_field('solutions_tab2_box_heading'); ?></h2>
                       <p><?php the_sub_field('solutions_tab2_box_description'); ?></p>
                       <a href="<?php the_sub_field('solutions_tab2_box_readmore_link'); ?>">Read More</a>
                   </div>
                </div>
              <?php endwhile;
              else :
                  // no rows found
              endif;         ?>
            </div>
            </div>
        </div>
    </div>


    <div class="blog-posts-bottom">
        <div class="container">
            <div class="blog-posts-slider">
        <?php
                if( have_rows('solutions_add_sliders') ): 
                    while ( have_rows('solutions_add_sliders') ) : the_row();
                    $image = get_sub_field('solutions_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('solutions_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('solutions_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('solutions_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('solutions_add_slider_redirect_link'); ?>"><?php the_sub_field('solutions_add_slider_redirect_text'); ?></a>
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

    <div class="above-footer-link">
        <div class="container">
            <h2><?php the_field('solutions_abovefooter_heading');?></h2>
            <a href="<?php the_field('solutions_abovefooter_button_link');?>"><?php the_field('solutions_abovefooter_button_text');?></a>
        </div>
    </div>

    

    <?php get_footer(); ?>