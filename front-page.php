<?php get_header(); ?>



    <div class="banner-slider">

        <div class="slider" style="background-image : url('<?php the_field('home_slider1_image');?>')">

            <div class="container">

                <div class="text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">

                <div class="type-wrap">

                    <div id="typed-strings">

                        <h2><?php the_field('home_slider1_mainheading');?></h2>

                    </div>

                </div>

                    <p><?php the_field('home_slider1_subheading');?></p>

                    <a href="<?php the_field('home_slider1_buttonurl');?>" class="btn-main"><?php the_field('home_slider1_buttontext');?></a>

                </div>

            </div>

        </div>

    </div>



    <div class="about-ceo">

        <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">

            <div class="text">

                <p>“<?php the_field('home_ceo_message');?>”</p>

                <div class="ceo">

                    <img src="<?php the_field('home_ceo_image'); ?>" alt="">

                    <p><span><?php the_field('home_ceo_name'); ?></span><?php the_field('home_ceo_position'); ?></p>

                </div>

            </div>

        </div>

    </div>



    <div class="execute-yourself">

        <div class="container">

            <h1 class="wow fadeIn" data-wow-duration="1s"><?php the_field('home_strategy_mainheading'); ?></h1>

            <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"><?php the_field('home_strategy_subheading'); ?></h3>



            <div class="three-flip-panel">

                <div class="col-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">

                    <div class="inner-panel">

                        <div class="panel-with-icon">

                            <img src="<?php the_field('home_first_solution_image'); ?>" alt="">

                            <h4><?php the_field('home_first_solution_heading'); ?></h4>

                            <p><?php the_field('home_first_solution_description'); ?></p>

                            <a href="<?php the_field('home_first_solution_buttonurl');?>" class="middle-btn"><?php the_field('home_first_solution_buttontext');?></a>

                        </div>

                    </div>

                </div>

                <div class="col-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">

                    <div class="inner-panel">

                        <div class="panel-with-icon">

                            <img src="<?php the_field('home_second_solution_image'); ?>" alt="">

                            <h4><?php the_field('home_second_solution_heading'); ?></h4>

                            <p><?php the_field('home_second_solution_description'); ?></p>

                            <a href="<?php the_field('home_second_solution_buttonurl');?>" class="middle-btn"><?php the_field('home_second_solution_buttontext');?></a>

                        </div>

                    </div>

                </div>

                <div class="col-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">

                    <div class="inner-panel">

                        <div class="panel-with-icon">

                            <img src="<?php the_field('home_third_solution_image'); ?>" alt="">

                            <h4><?php the_field('home_third_solution_heading'); ?></h4>

                            <p><?php the_field('home_third_solution_description'); ?></p>

                            <a href="<?php the_field('home_third_solution_buttonurl');?>" class="middle-btn"><?php the_field('home_third_solution_buttontext');?></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



<div class="two-equal-section">

    <div class="awards-left">

        <div class="content">

            <div class="heading wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

                <h3><?php the_field('home_awards_section_title'); ?></h3>

            </div>

            <div class="awards wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">

                <div class="awards-slider">

                    <?php if( have_rows('home_awards_repeater') ): ?>

                         <?php

                            while ( have_rows('home_awards_repeater') ) : the_row();

                                $image = get_sub_field('home_award_image');

                                ?>

                                <div class="slide">

                                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">

                                 </div>

                           <?php endwhile; ?>

                        

                    <?php else :

                        // no rows found

                    endif;

                ?>

                 

                </div>

            </div>

        </div>

    </div>

    <div class="explore">

        <div class="content">

            <div class="explore-section wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">

                <h4><?php the_field('home_work_heading'); ?></h4>

                <p><?php the_field('home_work_description'); ?></p>

                <a href="<?php the_field('home_work_readmore_link'); ?>">Read More</a>                

            </div>

            <div class="read-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">

                <a href="tel:<?php the_field('home_call_number'); ?>" class="btn-call">Call Now</a>

            </div>

            <div class="contact-section wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">

                <h4> <a href="tel:<?php the_field('home_call_number'); ?>"><?php the_field('home_call_number'); ?></a></h4>

                <p><?php the_field('home_call_description'); ?></p>

            </div>

        </div>

    </div>

</div>





<div class="home-above-footer">

    <div class="container">

    <div class="col-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

            <div class="main-image" style="background-image : url('<?php the_field('homepage_first_post_image'); ?>')">

                <div class="contant">

                    <h3><?php the_field('homepage_first_post_heading'); ?></h3>

                    <p><?php the_field('homepage_first_post_description'); ?></p>

                    <a href="<?php the_field('homepage_first_post_readtext_link'); ?>"><?php the_field('homepage_first_post_readtext'); ?></a>

                </div>

            </div>

        </div>

        <div class="col-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">

            <div class="main-image" style="background-image : url('<?php the_field('homepage_second_post_image'); ?>')">

                <div class="contant">

                    <h3><?php the_field('homepage_second_post_heading'); ?></h3>

                    <p><?php the_field('homepage_second_post_description'); ?></p>

                    <a href="<?php the_field('homepage_second_post_readtext_link'); ?>"><?php the_field('homepage_second_post_readtext'); ?></a>

                </div>

            </div>

        </div>

        <div class="col-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">

            <div class="main-image" style="background-image : url('<?php the_field('homepage_third_post_image'); ?>')">

                <div class="contant">

                    <h3><?php the_field('homepage_third_post_heading'); ?></h3>

                    <?php the_field('homepage_third_post_description'); ?>

                    <a href="<?php the_field('homepage_third_post_readtext_link'); ?>"><?php the_field('homepage_third_post_readtext'); ?></a>

                </div>

            </div>

        </div>

    </div>

</div>



    



      <?php get_footer(); ?>