<?php 
/*
	Template Name: Subcontracting Template
*/
get_header(); 
?>
    <div class="inner-banner" style="background-image : url('<?php the_field('subcontracting_banner_image');?>')">
        <div class="container">
            <div class="col-5">
              <h2><?php the_field('subcontracting_banner_text');?></h2>
              <p><?php the_field('subcontracting_banner_left_description');?></p>
          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('subcontracting_banner_heading');?>​​</h1>
          </div>
        </div>
    </div>
    <div class="inner-single-section" style="background-image : url('<?php the_field('subcontracting_logos_background');?>')">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="inner-top-above-tabs">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('subcontracting_content_mainheading');?>​​</h3>
            <p><?php the_field('subcontracting_content_description');?></p>
          </div>
            <div class="col-8 center-blk">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php the_field('subcontracting_logo1');?>" alt="">
                    </div>
                    <div class="col-4">
                        <img src="<?php the_field('subcontracting_logo2');?>" alt="">
                    </div>
                    <div class="col-4">
                        <img src="<?php the_field('subcontracting_logo3');?>" alt="">
                    </div>
                </div>
                <a href="#openModal-10" class="block-btn"><?php the_field('subcontracting_program_button_text');?></a>
             </div>
        </div>
    </div>
    <div class="blog-posts-bottom">
        <div class="container">
            <div class="blog-posts-slider">
            <?php
                if( have_rows('subcontracting_add_sliders') ):
                    while ( have_rows('subcontracting_add_sliders') ) : the_row();
                    $image = get_sub_field('subcontracting_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('subcontracting_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('subcontracting_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('subcontracting_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('subcontracting_add_slider_redirect_link'); ?>"><?php the_sub_field('subcontracting_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('subcontracting_left_text');?></h2>
            <a href="<?php the_field('subcontracting_right_text_link');?>"><?php the_field('subcontracting_right_text_copy');?></a>
        </div>
    </div>
    
    <?php get_footer(); ?>


    <div id="openModal-10" class="modalDialog">

    <div>   <a href="#close" title="Close" class="close">X</a>

            <h2><?php the_field('subcontracting_box_pupup_heading');?></h2>

            <?php the_field('subcontracting_box_pupup_body');?>

    </div>

    </div>