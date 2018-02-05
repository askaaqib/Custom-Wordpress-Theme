<?php 
/*
	Template Name: Insurance-Industry Template
*/

get_header(); 

?>

  <div class="inner-banner" style="background-image : url('<?php the_field('insurance_industry_banner_image');?>')">
        <div class="container">
          <div class="col-5">
              <h2><?php the_field('insurance_industry_banner_text');?></h2>
              <p><?php the_field('insurance_industry_content_heading');?></p>

          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('insurance_industry_banner_heading');?></h1>
          </div>
        </div>
    </div>

    <div class="inner-page-tabs">
        <div class="container">

        <div class="inner-top-above-tabs">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('insurance_industry_content_heading');?></h3>
           <?php the_field('insurance_industry_content_description');?>
          </div>


            <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

                <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
                <label for="tab1"><?php the_field('insurance_industry_tab1_title');?></label>


            <!-- Tab 1 Content -->
            <div class="tab__content sttic-tabs">
                <div class="col-4">
                   <div class="content-card with-icons ">
                       <h2><?php the_field('insurance_industry_box1_heading');?></h2>
                   </div>
                </div>
                <div class="col-4">
                   <div class="content-card with-icons ind-cl-1">
                       <h2><?php the_field('insurance_industry_box2_heading');?></h2>
                   </div>
                </div>
                <div class="col-4">
                   <div class="content-card with-icons ind-cl-2">
                       <h2><?php the_field('insurance_industry_box3_heading');?></h2>
                   </div>
                </div>
                <div class="col-12">
                   <div class="content-card with-icons ind-cl-3">
                       <h2><?php the_field('insurance_industry_box4_heading');?></h2>
                   </div>
                </div>

                <div class="bottom">                    
                    <a href="<?php the_field('insurance_industry_boxes_button_link');?>"><?php the_field('insurance_industry_boxes_button_text');?></a>                      
                </div>

                </div>

          

            </div>
        </div>
    </div>





    <div class="blog-posts-bottom">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="blog-posts-slider">
			
                <?php
                if( have_rows('insurance_industry_add_sliders') ): 
                    while ( have_rows('insurance_industry_add_sliders') ) : the_row();
                    $image = get_sub_field('insurance_industry_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('insurance_industry_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('insurance_industry_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('insurance_industry_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('insurance_industry_add_slider_redirect_link'); ?>"><?php the_sub_field('insurance_industry_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('insurance_industry_abovefooter_heading');?></h2>
            <a href="<?php the_field('insurance_industry_abovefooter_button_link');?>"><?php the_field('insurance_industry_abovefooter_button_text');?></a>
        </div>
    </div>
    

    <?php get_footer(); ?>