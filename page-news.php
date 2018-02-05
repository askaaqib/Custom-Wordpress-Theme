<?php 
/*
	Template Name: News Template
*/

get_header(); 

?>

        <div class="inner-banner" style="background-image : url('<?php the_field('news_banner_image');?>')">
        <div class="container">
          <div class="col-5">
              <h2><?php the_field('news_banner_text');?></h2>
              <?php the_field('news_banner_left_description');?>

          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('news_banner_heading');?></h1>
          </div>
        </div>
    </div>


    <div class="news-events">
        <div class="container">
                
          <div class="inner-top-above-tabs">
            <p><?php the_field('news_content_description');?></p>
          </div>

            <h1><?php echo date('l, j F Y'); ?></h1>
            <div class="tabs-blog-posts">
              <div class="featured-post">
                <div class="col-8 pd0">
                  <div class="feature-img" style="background-image : url('<?php the_field('news_tab1_box1_image');?>')"></div>
                </div>
                <div class="col-4 pd0">
                  <div class="feature-text">
                    <h3><?php the_field('news_tab1_box1_heading');?> <span><?php the_field('news_tab1_box1_author_name');?></span></h3>
                    <?php the_field('news_tab1_box1_description');?>
                    <a href="<?php the_field('news_tab1_box1_readmore_link');?>"><?php the_field('news_tab1_box1_readmore_text');?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-4 pl0">
                <div class="tab-single-post" style="background-image : url('<?php the_field('news_tab1_box2_image');?>')">
                  <h3><?php the_field('news_tab1_box2_heading');?><span><?php the_field('news_tab1_box2_author_name');?></span></h3>
                  <a href="<?php the_field('news_tab1_box2_readmore_link');?>"><?php the_field('news_tab1_box2_readmore_text');?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>

              <div class="col-4 ">
                <div class="tab-single-post" style="background-image : url('<?php the_field('news_tab1_box3_image');?>')">
                  <h3><?php the_field('news_tab1_box3_heading');?><span><?php the_field('news_tab1_box3_author_name');?></span></h3>
                  <a href="<?php the_field('news_tab1_box3_readmore_link');?>"><?php the_field('news_tab1_box3_readmore_text');?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>

              <div class="col-4 pr0">
                <div class="tab-single-post" style="background-image : url('<?php the_field('news_tab1_box4_image');?>')">
                  <h3><?php the_field('news_tab1_box4_heading');?><span><?php the_field('news_tab1_box4_author_name');?></span></h3>
                  <a href="<?php the_field('news_tab1_box4_readmore_link');?>"><?php the_field('news_tab1_box4_readmore_text');?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>

            </div>
        </div>
    </div>


 <div class="blog-posts-bottom">
        <div class="container">

            <div class="blog-posts-slider">
                
              <?php
                if( have_rows('news_add_sliders') ): 
                    while ( have_rows('news_add_sliders') ) : the_row();
                    $image = get_sub_field('news_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('news_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('news_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('news_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('news_add_slider_redirect_link'); ?>"><?php the_sub_field('news_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('news_left_text');?></h2>
            <a href="<?php the_field('news_right_text_link');?>"><?php the_field('news_right_text');?></a>
        </div>
    </div>

    

    <?php get_footer(); ?>