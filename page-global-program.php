<?php 

/*

	Template Name: Global-Program Template

*/



get_header(); 



?>

     <div class="inner-banner" style="background-image : url('<?php the_field('global_program_banner_image');?>')">

        <div class="container">



                  <div class="col-5">

              <h2><?php the_field('global_program_left_heading');?></h2>

              <!-- <?php the_field('global_program_left_description');?> --> 



          </div>

          <div class="col-7 border-lft">

            <h1><?php the_field('global_program_right_description');?></h1>

          </div>

         </div>

        </div>

    </div>



    <div class="inner-page-tabs" >

        <div class="container">



        <div class="inner-top-above-tabs">

            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('global_program_content_heading');?></h3>

            <p><?php the_field('global_program_content_description');?></p>

          </div>



          <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>





            <div class="tab__content cntntCrd">

              <div class="col-4">

                   <div class="content-card red" style="background-image : url('<?php the_field('global_program_box1_image');?> ')">

                       <h4><?php the_field('global_program_box1_heading');?></h4>

                       <a href="#openModal-1">Read More</a>

                   </div>

                </div>

                <div class="col-4">

                   <div class="content-card blue" style="background-image : url('<?php the_field('global_program_box2_image');?> ')">

                       <h4><?php the_field('global_program_box2_heading');?></h4>

                       <a href="#openModal-2">Read More</a>



                   </div>

               </div>

               <div class="col-4">

                   <div class="content-card green" style="background-image : url('<?php the_field('global_program_box3_image');?> ')">

                       <h4><?php the_field('global_program_box3_heading');?></h4>

                       <a href="#openModal-3">Read More</a>



                   </div>

               </div>

               <div class="col-4">

                   <div class="content-card light-blue" style="background-image : url('<?php the_field('global_program_box4_image');?> ')">

                       <h4><?php the_field('global_program_box4_heading');?></h4>

                       <a href="#openModal-4">Read More</a>



                   </div>

               </div>

               <div class="col-4">

                   <div class="content-card yellow" style="background-image : url('<?php the_field('global_program_box5_image');?> ')">

                       <h4><?php the_field('global_program_box5_heading');?></h4>

                       <a href="#openModal-5">Read More</a>



                   </div>

               </div>

               <div class="col-4">

                   <div class="content-card blue">

                       <h3><a class="modl-btn" href="http://www.microagility.com/about/"><?php the_field('global_program_box6_heading');?></a></h3>

                   </div>

               </div>

            </div>



            

          </div>

        </div>

    </div>







    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <h2><?php the_field('global_program_postslider_heading');?></h2>

            <div class="blog-posts-slider">

				

                <?php

                if( have_rows('global_program_add_sliders') ): 

                    while ( have_rows('global_program_add_sliders') ) : the_row();

                    $image = get_sub_field('global_program_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('global_program_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('global_program_slider_heading'); ?></h3>

                        <p><?php the_sub_field('global_program_slider_description'); ?></p>

                        <a href="<?php the_sub_field('global_program_add_slider_redirect_link'); ?>"><?php the_sub_field('global_program_add_slider_redirect_text'); ?></a>

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

            <h2><?php the_field('global_program_footerbanner_whyus_text');?></h2>

            <a href="<?php the_field('global_program_footerbanner_button_url');?>"><?php the_field('global_program_footerbanner_button_text');?></a>

        </div>

    </div>



    



    <?php get_footer(); ?>



        <!-- Modal 1 -->

    <div id="openModal-1" class="modalDialog">

    <div>   <a href="#close" title="Close" class="close">X</a>



            <h2><?php the_field('global_program_box1_heading');?></h2>

            <?php the_field('global_program_box1_description');?>

    </div>

    </div>



    <!-- Modal 2 -->

    <div id="openModal-2" class="modalDialog">

    <div>   <a href="#close" title="Close" class="close">X</a>



            <h2><?php the_field('global_program_box2_heading');?></h2>

            <?php the_field('global_program_box2_description');?>

    </div>

    </div>



    <!-- Modal 3 -->

    <div id="openModal-3" class="modalDialog">

    <div>   <a href="#close" title="Close" class="close">X</a>

            <h2><?php the_field('global_program_box3_heading');?></h2>

            <?php the_field('global_program_box3_description');?>



    </div>

    </div>



    <!-- Modal 4 -->

    <div id="openModal-4" class="modalDialog">

    <div>   <a href="#close" title="Close" class="close">X</a>

            <h2><?php the_field('global_program_box4_heading');?></h2>

            <?php the_field('global_program_box4_description');?>

        

    </div>

    </div>



    <!-- Modal 5 -->

    <div id="openModal-5" class="modalDialog">

    <div>   <a href="#close" title="Close" class="close">X</a>

            <h2><?php the_field('global_program_box5_heading');?></h2>

            <?php the_field('global_program_box5_description');?>



    </div>

    </div>