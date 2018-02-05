<?php 

/*

	Template Name: WhyAgility Template

*/



get_header(); 



?>



        <div class="inner-banner" style="background-image : url('<?php the_field('whyagility_banner_image');?>')">

        <div class="container">

          <div class="col-5">

              <h2><?php the_field('whyagility_banner_text');?></h2>

              <?php the_field('whyagility_banner_left_description');?>



          </div>

          <div class="col-7 border-lft">

            <h1><?php the_field('whyagility_banner_heading');?></h1>

          </div>

        </div>

    </div>



    <div class="why-microagility">

        <div class="container">



           <div class="inner-top-above-tabs">

            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('whyagility_content_mainheading');?></h3>

            <p><?php the_field('whyagility_content_description');?></p>

          </div>



            <div class="col-6">

                <div class="single-points purple" style="background-image : url('<?php the_field('whyagility_box1_image');?>')">

                    <h3><?php the_field('whyagility_box1_heading');?></h3>

                    <p><?php the_field('whyagility_box1_description');?></p>

                    <!-- <a href="<?php the_field('whyagility_box1_readmore_link');?>">Read More</a> -->

                </div>

            </div>

            <div class="col-6">

                <div class="single-points bulue" style="background-image : url('<?php the_field('whyagility_box2_image');?>')">

                    <h3><?php the_field('whyagility_box2_heading');?></h3>

                    <p><?php the_field('whyagility_box2_description');?></p>

                    <!-- <a href="<?php the_field('whyagility_box2_readmore_link');?>">Read More</a> -->

                </div>

            </div>

            <div class="col-6">

                <div class="single-points green" style="background-image : url('<?php the_field('whyagility_box3_image');?>')">

                    <h3><?php the_field('whyagility_box3_heading');?></h3>

                    <p><?php the_field('whyagility_box3_description');?></p>

                    <!-- <a href="<?php the_field('whyagility_box3_readmore_link');?>">Read More</a> -->

                </div>

            </div>

            <div class="col-6">

                <div class="single-points red" style="background-image : url('<?php the_field('whyagility_box4_image');?>')">

                    <h3><?php the_field('whyagility_box4_heading');?></h3>

                    <p><?php the_field('whyagility_box4_description');?></p>

                    <!-- <a href="<?php the_field('whyagility_box4_readmore_link');?>">Read More</a> -->

                </div>

            </div>

        </div>

    </div>





    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <div class="blog-posts-slider">

                <?php

                if( have_rows('why_agility_add_sliders') ):

                    while ( have_rows('why_agility_add_sliders') ) : the_row();

                    $image = get_sub_field('why_agility_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('why_agility_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('why_agility_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('why_agility_add_slider_description'); ?></p>

                        <a href="<?php the_sub_field('why_agility_add_slider_redirect_link'); ?>"><?php the_sub_field('why_agility_add_slider_redirect_text'); ?></a>

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

            <h2><?php the_field('whyagility_left_text');?></h2>

            <a href="<?php the_field('whyagility_right_text_link');?>"><?php the_field('whyagility_right_text');?></a>

        </div>

    </div>



    



    <?php get_footer(); ?>