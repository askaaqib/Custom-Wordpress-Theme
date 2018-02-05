<?php 
/*
	Template Name: Social-Media Template
*/
get_header(); 
?>
        <div class="inner-banner" style="background-image : url('<?php the_field('social_media_banner_image');?>')">
        <div class="container">
          <div class="col-5">
              <h1><?php the_field('social_media_banner_text');?></h1>
          </div>
          <div class="col-7 border-lft">
            <?php the_field('social_media_banner_heading');?>
          </div>
        </div>
    </div>
        <div class="why-microagility social-md">
        <div class="container">
            <div class="col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="single-points purple">
                    <h4><span><?php the_field('social_media_box1_heading');?></span></h4>
                    
                </div>
            </div>
            <div class="col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="single-points bulue">
                    <h4><span><?php the_field('social_media_box2_heading');?></span></h4>
                    
                </div>
            </div>
            <div class="col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="single-points green">
                    <h4><span><?php the_field('social_media_box3_heading');?></span></h4>
                    
                </div>
            </div>
            <div class="col-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="single-points red">
                    <h2><span><?php the_field('social_media_box4_heading');?></span></h2>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="blog-posts-bottom">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <h2><?php the_field('social_media_slider_posts_heading');?></h2>
            <div class="blog-posts-slider">
                <?php
                if( have_rows('social_media_add_sliders') ):
                    while ( have_rows('social_media_add_sliders') ) : the_row();
                    $image = get_sub_field('social_media_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('social_media_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('social_media_add_slider_heading'); ?></h3>
                        <h3><?php the_sub_field('social_media_add_slider_description'); ?></h3>
                      
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
            <h2><?php the_field('social_media_left_text');?></h2>
            <a href="<?php the_field('social_media_right_text_link');?>"><?php the_field('social_media_right_text');?></a>
        </div>
    </div>
    
    <?php get_footer(); ?>