<?php 

/*

	Template Name: Analysis-Requirement Template

*/



get_header(); 



?>

     <div class="inner-banner" style="background-image : url('<?php the_field('analysis_requirements_banner_image');?>')">

        <div class="container">

           <div class="col-5">

              <h1><?php the_field('analysis_requirements_left_heading');?></h1>

              

          </div>

          <div class="col-7 border-lft">

            <?php the_field('analysis_requirements_right_description');?>

          </div>

          </div>

        </div>

    </div>



    <div class="inner-page-tabs">

        <div class="container">



        <p><?php the_field('analysis_requirements_content_heading');?></p>

			<br><br><br>



            <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



                <div class="container ">    



                <div class="col-4">

                  <div class="analysis-box">

                    <h2 class="thin-font"><?php the_field('analysis_requirements_box1_heading');?></h2>

                    <div class="hide-hvr"><?php the_field('analysis_requirements_box1_description');?></div>

                  </div>

                </div>



                <div class="col-4">

                  <div class="analysis-box green-analysis">

                    <h2 class="thin-font"><?php the_field('analysis_requirements_box2_heading');?></h2>

                    <div  class="hide-hvr"><?php the_field('analysis_requirements_box2_description');?></div>

                  </div>

                </div>



                <div class="col-4">

                  <div class="analysis-box red-analysis">

                    <h2 class="thin-font"><?php the_field('analysis_requirements_box3_heading');?></h2>

                    <div  class="hide-hvr"><?php the_field('analysis_requirements_box3_description');?></div>

                  </div>

                </div>



                </div>

            

            </div>

        </div>

    </div>



    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <h2><?php the_field('analysis_requirements_postslider_heading');?></h2>

            <div class="blog-posts-slider">

				

                <?php

                if( have_rows('analysis_requirements_add_sliders') ): 

                    while ( have_rows('analysis_requirements_add_sliders') ) : the_row();

                    $image = get_sub_field('analysis_requirements_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('analysis_requirements_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('analysis_requirements_slider_heading'); ?></h3>

                        <p><?php the_sub_field('analysis_requirements_slider_description'); ?></p>

                        <a href="<?php the_sub_field('analysis_requirements_add_slider_redirect_link'); ?>"><?php the_sub_field('analysis_requirements_add_slider_redirect_text'); ?></a>

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

            <h2><?php the_field('analysis_requirements_footerbanner_whyus_text');?></h2>

            <a href="<?php the_field('analysis_requirements_footerbanner_button_url');?>"><?php the_field('analysis_requirements_footerbanner_button_text');?></a>

        </div>

    </div>



    



    <?php get_footer(); ?>