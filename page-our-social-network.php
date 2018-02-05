<?php 

/*

	Template Name: Social-Network Template

*/



get_header(); 



?>



    <div class="inner-banner" style="background-image : url('<?php the_field('our_social_network_banner_image'); ?>')">

        <div class="container">

          <div class="col-5">

              <h1><?php the_field('our_social_network_banner_text'); ?></h1>

              <?php the_field('our_social_network_banner_description'); ?>



          </div>

          <div class="col-7 border-lft">

            <h2><?php the_field('our_social_network_banner_heading'); ?></h2>

          </div>

        </div>

    </div>



 

     <div class="inner-page-tabs">

        <div class="container">



        <div class="inner-top-above-tabs">

            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('our_social_network_content_mainheading'); ?></h3>

            <p><?php the_field('our_social_network_content_description'); ?></p>

          </div>

        

            <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



                <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>

                <label for="tab1"></label>    



            <!-- Tab 1 Content -->

            <div class="tab__content">

               <div class="masnory-card-layout">

                    <?php

                     if( have_rows('our_social_network_tab1_add_communities') ): ?>

                       <ul class="cm-class">                       

                      <?php 

                      while ( have_rows('our_social_network_tab1_add_communities') ) : the_row();

                      $image = get_sub_field('our_social_network_add_community_logo');

                      ?>

                      



                      <li>

                       <h2><?php the_sub_field('our_social_network_add_community_heading'); ?></h2>

                       <span><?php the_sub_field('our_social_network_add_community_subheading'); ?></span>

                       <a href="#">Members(<?php the_sub_field('our_social_network_add_community_members'); ?>)</a>  

                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                        <a href="<?php the_sub_field('our_social_network_add_community_linkedin_link'); ?>" class="linkedin">Join on Linkedin <!-- <i class="fa fa-play" aria-hidden="true"></i> --></a>
                        <a href="<?php the_sub_field('our_social_network_add_newsletter_link'); ?>" 
                        target="_blank" class="newsletter"><?php the_sub_field('our_social_network_add_newsletter_title'); ?><!-- <i class="fa fa-play" aria-hidden="true"></i> --></a>
                      </li> 

                        

                    <?php endwhile; ?>

                    </ul>

                    <?php  else :

                    endif; ?>

               </div>                

            </div>

            </div>

        </div>

    </div>





    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



            <div class="blog-posts-slider">

               <?php

                if( have_rows('our_social_network_add_sliders') ): 

                    while ( have_rows('our_social_network_add_sliders') ) : the_row();

                    $image = get_sub_field('our_social_network_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('our_social_network_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('our_social_network_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('our_social_network_add_slider_description'); ?></p>

                        <a href="<?php the_sub_field('our_social_network_add_slider_redirect_link'); ?>"><?php the_sub_field('our_social_network_add_slider_redirect_text'); ?></a>

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

            <h4><?php the_field('our_social_network_left_text');?></h4>

            <a href="<?php the_field('our_social_network_right_text_link');?>"><?php the_field('our_social_network_right_text');?></a>

        </div>

    </div>

    



    <?php get_footer(); ?>