<?php 

/*

	Template Name: ContactUs Template

*/



get_header(); 



?>



    <div class="inner-banner" style="background-image : url('<?php the_field('contactus_banner_image'); ?>')">

        <div class="container">

          <div class="col-5">

              <h2><?php the_field('contactus_banner_text'); ?></h2>

              <?php the_field('contactus_banner_left_description'); ?>



          </div>

          <div class="col-7 border-lft">

            <h1><?php the_field('contactus_banner_heading'); ?></h1>

          </div>

        </div>

    </div>

    <div class="inner-page-tabs business-solutions single-tab">

        <div class="container">



         <div class="inner-top-above-tabs">

            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('contactus_banner_subheading'); ?></h3>

            <p><?php the_field('contactus_banner_heading_desc'); ?></p>

          </div>



            <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



                <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>

                <label for="tab1"><?php the_field('contactus_tab1_title'); ?></label>



                <div class="tab__content">



                    <div class="col-6 pd0">

		       <?php echo do_shortcode( '[contact-form-7 id="2164" title="ContactUs Form"]' ); ?>

                    </div>



                    <div class="col-6 pd0">

                        <div class="contact-details">

                            <div class="links">

                                <ul>

                                    <li><a href="<?php the_field('contactus_tab1_fb_link'); ?>" target="_blank">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                    <li><a href="<?php the_field('contactus_tab1_twitter_link'); ?>" target="_blank">Twitter <i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                    <li><a href="<?php the_field('contactus_tab1_linkedin_link'); ?>" target="_blank">Linkedin <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                                    <li><a href="<?php the_field('contactus_tab1_email'); ?>">Email <i class="fa fa-envelope" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>



                            <div class="office">

                                <ul>

                                    <li>

                                        <img src="<?php the_field('contactus_tab1_office1_Image'); ?>">

                                        <h4><?php the_field('contactus_tab1_office1_title'); ?></h4>

                                        <p><?php the_field('contactus_tab1_office1_address'); ?></p>

                                        <p><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('contactus_tab1_office1_phone'); ?></p>

                                    </li>

                                    <li>

                                        <img src="<?php the_field('contactus_tab1_office2_Image'); ?>">

                                        <h4><?php the_field('contactus_tab1_office2_title'); ?></h4>

                                        <p><?php the_field('contactus_tab1_office2_address'); ?></p>

                                        <p><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('contactus_tab1_office2_phone'); ?></p>

                                    </li>

                                    <li>

                                        <img src="<?php the_field('contactus_tab1_office3_Image'); ?>">

                                        <h4><?php the_field('contactus_tab1_office3_title'); ?></h4>

                                        <p><?php the_field('contactus_tab1_office3_address'); ?></p>

                                        <p><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('contactus_tab1_office3_phone'); ?></p>

                                    </li>

                                    


                                </ul>

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

                if( have_rows('contact_add_sliders') ): 

                    while ( have_rows('contact_add_sliders') ) : the_row();

                    $image = get_sub_field('contact_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('contact_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('contact_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('contact_add_slider_description'); ?></p>

                        <a href="<?php the_sub_field('contact_add_slider_redirect_link'); ?>" target="_blank"><?php the_sub_field('contact_add_slider_redirect_text'); ?></a>

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

            <h2><?php the_field('contactus_left_text'); ?></h2>

            <a href="<?php the_field('contactus_right_text_link'); ?>"><?php the_field('contactus_right_text'); ?></a>

        </div>

    </div>

    



    <?php get_footer(); ?>