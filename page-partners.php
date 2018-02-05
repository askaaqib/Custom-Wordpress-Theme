<?php 
/*
	Template Name: Partners Template
*/

get_header(); 

?>

    <div class="inner-banner" style="background-image : url('<?php the_field('partners_banner_image');?>')">
    <div class="container">
          <div class="col-5">
              <h2><?php the_field('partners_banner_text');?></h2>
              <?php the_field('partners_banner_left_description');?>

          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('partners_banner_heading');?>​​</h1>
          </div>
        </div>
    </div>

    <div class="inner-single-section partners-logos" style="background-image : url('<?php the_field('partners_section_background_image');?>')">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <div class="inner-top-above-tabs">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('partners_content_mainheading');?></h3>
            <blockquote><?php the_field('partners_content_quote1');?></blockquote>        
            <blockquote><?php the_field('partners_content_quote2');?></blockquote>
            <blockquote><?php the_field('partners_content_quote2');?>​</blockquote>
          </div>

            <div class="col-10 center-blk">
                <ul>
                    <li><img src="<?php the_field('partners_logo1_image');?>" alt=""></li>
                    <li><img src="<?php the_field('partners_logo2_image');?>" alt=""></li>
                    <li><img src="<?php the_field('partners_logo3_image');?>" alt=""></li>
                    <li><img src="<?php the_field('partners_logo4_image');?>" alt=""></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blog-posts-bottom">
        <div class="container">
            <div class="blog-posts-slider">
                
                <?php
                if( have_rows('partners_add_sliders') ): 
                    while ( have_rows('partners_add_sliders') ) : the_row();
                    $image = get_sub_field('partners_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('partners_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('partners_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('partners_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('partners_add_slider_redirect_link'); ?>"><?php the_sub_field('partners_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('partners_left_text'); ?></h2>
            <a href="<?php the_field('partners_right_text_link');?>"><?php the_field('partners_right_text'); ?></a>
        </div>
    </div>
    

    <?php get_footer(); ?>