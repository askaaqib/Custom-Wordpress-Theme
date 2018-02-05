<?php 

/*

	Template Name: Insights Template

*/



get_header(); 



?>



        <div class="inner-banner" style="background-image : url('<?php the_field('insights_banner_image');?>')">

        <div class="container">

          <div class="col-5">

              <h2><?php the_field('insights_banner_text');?></h2>

              <?php the_field('insights_banner_left_description');?>



          </div>

          <div class="col-7 border-lft">

            <h2><?php the_field('insights_banner_heading');?></h2>

          </div>

        </div>

    </div>



    <div class="inner-page-tabs business-solutions">

        <div class="container">



        <div class="inner-top-above-tabs">

            <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('insights_content_mainheading');?></h1>

            <p><?php the_field('insights_content_description');?></p>

          </div>





          <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>

            <label for="tab1"> </label>



            <!-- Tab 1 Content -->

            <div class="tab__content">

                <div class="tabs-blog-posts">

                  <div class="featured-post">

                    <div class="col-8 pd0">

                      <div class="feature-img" style="background-image : url('<?php the_field('insights_tab1_box1_image'); ?>')"></div>

                    </div>

                    <div class="col-4 pd0">

                      <div class="feature-text">

                        <h4><?php the_field('insights_tab1_box1_heading'); ?></h4>

                        <?php the_field('insights_tab1_box1_description'); ?>

                        <a href="<?php the_field('insights_tab1_box1_readmore_link'); ?>"><?php the_field('insights_tab1_box1_readmore_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                      </div>

                    </div>

                  </div>



                  <div class="col-4 pl0">

                    <div class="tab-single-post" style="background-image : url('<?php the_field('insights_tab1_box2_image'); ?>')">

                      <h4><?php the_field('insights_tab1_box2_heading'); ?></h4>

                      <a href="<?php the_field('insights_tab1_box2_readmore_link'); ?>"><?php the_field('insights_tab1_box2_readmore_text'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>

                    </div>

                  </div>



                  <div class="col-4 ">

                    <div class="tab-single-post" style="background-image : url('<?php the_field('insights_tab1_box3_image'); ?>')">

                      <h4><?php the_field('insights_tab1_box3_heading'); ?></h4>

                      <a href="<?php the_field('insights_tab1_box3_readmore_link'); ?>"><?php the_field('insights_tab1_box3_readmore_text'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>

                    </div>

                  </div>



                  <div class="col-4 pr0">

                    <div class="tab-single-post" style="background-image : url('<?php the_field('insights_tab1_box4_image'); ?>')">

                      <h4><?php the_field('insights_tab1_box4_heading'); ?></h4>

                      <a href="<?php the_field('insights_tab1_box4_readmore_link'); ?>"><?php the_field('insights_tab1_box4_readmore_text'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>

                    </div>

                  </div>



                </div>              

            </div>

            </div>

        </div>

    </div>









    <div class="blog-posts-bottom">

        <div class="container">



            <div class="blog-posts-slider">

                

              <?php

                if( have_rows('insights_add_sliders') ): 

                    while ( have_rows('insights_add_sliders') ) : the_row();

                    $image = get_sub_field('insights_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('insights_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('insights_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('insights_add_slider_description'); ?></p>

                        <a href="<?php the_sub_field('insights_add_slider_redirect_link'); ?>"><?php the_sub_field('insights_add_slider_redirect_text'); ?></a>

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

            <h4><?php the_field('insights_left_text');?></h4>

            <a href="<?php the_field('insights_right_text_link');?>"><?php the_field('insights_right_text');?></a>

        </div>

    </div>



    



    <?php get_footer(); ?>