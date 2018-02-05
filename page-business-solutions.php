<?php 

/*

	Template Name: Our Solutions Template

*/



get_header(); 



?>



  <div class="inner-banner" style="background-image : url('<?php the_field('business_solutions_banner_image');?>')">

        <div class="container">

          <div class="col-5">

              <h2><?php the_field('business_solutions_banner_text');?></h2>

              <p><?php the_field('business_solutions_content_heading');?></p>

          </div>

          <div class="col-7 border-lft">

            <h2><?php the_field('business_solutions_banner_heading');?></h2>

          </div>

        </div>

    </div>



    <div class="inner-page-tabs business-solutions">

        <div class="container">



          <div class="inner-top-above-tabs">

           <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('business_solutions_content_subheading');?></h1>

            <p><?php the_field('business_solutions_content_description');?></p>

          </div>

        

          <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

              

               <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>

              <label for="tab1"><?php the_field('business_solutions_tab1_title');?></label>



            <!-- Tab 1 Content -->

            <div class="tab__content">

              <?php 

                // check if the repeater field has rows of data

                if( have_rows('business_solutions_tab1_boxes') ):



                  // loop through the rows of data

                    while ( have_rows('business_solutions_tab1_boxes') ) : the_row(); ?>

                   <div class="col-4">

                   <div class="content-card with-icons">

                       <img src="<?php the_sub_field('business_solutions_tab1_box_icon');?>" alt="">

                       <h2><?php the_sub_field('business_solutions_tab1_box_heading');?></h2>
                        
                       <p><?php the_sub_field('business_solutions_tab1_box_description');?></p>

                       <a href="<?php the_sub_field('business_solutions_tab1_box_readmore_link');?>">Read More</a>

                   </div>

                  </div>

                <?php  endwhile;

                   else :

                    // no rows found

                endif; ?>

            </div>

    

            </div>

        </div>

    </div>  







    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <div class="blog-posts-slider">

			

                <?php

                if( have_rows('business_solutions_add_sliders') ): 

                    while ( have_rows('business_solutions_add_sliders') ) : the_row();

                    $image = get_sub_field('business_solutions_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('business_solutions_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('business_solutions_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('business_solutions_add_slider_description'); ?></p>

                        <a href="<?php the_sub_field('business_solutions_add_slider_redirect_link'); ?>"><?php the_sub_field('business_solutions_add_slider_redirect_text'); ?></a>

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

            <h2><?php the_field('business_solutions_abovefooter_heading');?></h2>

            <a href="<?php the_field('business_solutions_abovefooter_button_link');?>"><?php the_field('business_solutions_abovefooter_button_text');?></a>

        </div>

    </div>

    



    <?php get_footer(); ?>