<?php 
/*
	Template Name: About Us Template
*/
get_header(); 
?>

     <div class="inner-banner about" style="background-image : url('<?php the_field('about_banner_image');?>')">

        <div class="container">

              <div class="col-5">

              <h2><?php the_field('about_banner_text');?></h2>

              <p><?php the_field('about_content_mainheading');?></p>

          </div>

          <div class="col-7 border-lft">

            <h2><?php the_field('about_banner_heading');?></h2>

          </div>

            </div>

        </div>

    </div>



        <div class="inner-page-tabs" >

        <div class="container">

            <div class="inner-top-above-tabs">

            <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('about_content_subheading');?></h1>

            <p><?php the_field('about_content_description');?></p>

          </div>

          <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">



            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>

            <label for="tab1"><?php the_field('about_tab1_title');?></label>



            <input type="radio" id="tab2" name="tabGroup1" class="tab">

            <label for="tab2"><?php the_field('about_tab2_title');?></label>



            <input type="radio" id="tab3" name="tabGroup1" class="tab">

            <label for="tab3"><?php the_field('about_tab3_title');?></label> 



            <!-- Tab 1 Content -->

            <div class="tab__content">

             

                <div class="col-12 static ">





                   <div class="tab-txt blue-static" >

                   <div class="col-6">

                        <h2><?php the_field('about_tab1_heading');?></h2>

                       </div>

                        <div class="col-6">                        

                         <p><?php the_field('about_tab1_description');?> </p>

                    </div>



                     </div>



               </div>

               

            </div>



            <!-- Tab 2 Content -->

            <div class="tab__content">



              <div class="col-12 static ">

   

                <div class="tab-txt green-static" >

                   <div class="col-6">

                        <h2><?php the_field('about_tab2_heading'); ?></h2>

                       </div>

                        <div class="col-6">                        

                         <p><?php the_field('about_tab2_description'); ?></p>

                    </div>



                     </div>

                     </div>



            </div>



            <!-- Tab 3 Content-->

               <div class="tab__content">

              <div class="tab-profile-panel">
                  <div class="col-4">
                    <div class="feature-post-slider">
                      <div class="slide-profile">
                        <?php            
                        $new_query = new WP_Query('post_type=team&posts_per_page=6');
                    if (have_posts()) : while ($new_query -> have_posts()) : $new_query -> the_post(); ?>
                      <div>
                          <img src="<?php echo $team_image = get_field('team_member_image', $post->ID); ?>" alt="">
                          <h2><?php echo $name_title = get_field('team_name_title', $post->ID); ?> <span><?php echo $post_title = get_field('team_post_title', $post->ID); ?></span></h2>
                          <?php echo $team_desc = get_field('team_description', $post->ID); ?>
                          <a href="mailto:<?php echo $team_member_contact_link = get_field('team_contact_email', $post->ID); ?>">Please contact me via email.</a>                          
                        </div>
                     <?php endwhile;?>
                    <?php wp_reset_query();?>    
                    <?php endif;?>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="list-profiles slider-nav-itm">
                     <?php 
                        $args = array('orderby' => 'id', 'order' => '', 'post_type' => 'team',
                                      'posts_per_page'  =>  '6');
                        $new_query = new WP_Query($args);
                        $i = 1;
                    if (have_posts()) : while ($new_query -> have_posts()) : $new_query -> the_post(); ?>
                      <div class="col-4 hvr" data-slide="<?php echo $i ?>">
                        <div class="list-single-profile">
                          <img src="<?php echo $team_image = get_field('team_member_image', $post->ID); ?>" alt="">
                          <h4><?php echo $team_name = get_field('team_name_title', $post->ID); ?><span><?php echo $team_post = get_field('team_post_title', $post->ID); ?></span></h4>
                        </div>
                      </div>
                    <?php  $i++; endwhile;?>
                    <?php wp_reset_query();?>    
                    <?php endif;?>
                    </div>
                  </div>
                </div> 

            </div> 

            </div>

            </div>

            </div>

    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <h2><?php the_field('about_postslider_heading');?></h2>

            <div class="blog-posts-slider">

				

                <?php

                if( have_rows('about_add_sliders') ): 

                    while ( have_rows('about_add_sliders') ) : the_row();

                    $image = get_sub_field('about_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('about_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('about_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('about_add_slider_description'); ?></p>

                        <!-- <a href="<?php the_sub_field('about_add_slider_redirect_link'); ?>"><?php the_sub_field('about_add_slider_redirect_text'); ?></a> -->

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

            <h4><?php the_field('about_footerbanner_whyus_text');?></h4>

            <a href="<?php the_field('about_footerbanner_button_url');?>"><?php the_field('about_footerbanner_button_text');?></a>

        </div>

    </div>





    <?php get_footer(); ?>