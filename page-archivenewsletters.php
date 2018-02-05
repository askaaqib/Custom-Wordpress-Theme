<?php 
/*
  Template Name: Newsletters-Archive Template
*/
get_header(); 
?>

     <div class="inner-banner about" style="background-image : url('<?php the_field('newsletters_archives_banner_image');?>')">

        <div class="container">

              <div class="col-5">

              <h2><?php the_field('newsletters_archives_banner_text');?></h2>

              <p><?php the_field('newsletters_archives_content_mainheading');?></p>

          </div>

          <div class="col-7 border-lft">

            <h2><?php the_field('newsletters_archives_banner_heading');?></h2>

          </div>

            </div>

        </div>

    </div>
     
      <?php
      $dates = array();
      $argez = (array( 'post_type' => 'newsletter', 'posts_per_page' => -1));
      query_posts( $argez );
        if (have_posts())  : while (have_posts()) : the_post(); 
          $dates[] = get_the_date('Y');
          // print_r($dates);
          $dates = array_unique($dates);
          // print_r($datesun);
         endwhile; 
         foreach($dates as $date) { ?>
          <a href="<?php echo get_site_url(); ?>/newsletters-archives/?year=<?php echo $date; ?>"><?php echo $date; ?></a>
        <?php
         // echo '<option value="' . $date . '">' . $date .'</option> ';
        }
       endif;
      ?>

        <div class="container">
        
        <div class="tab__content">

          <div class="">
            <div class="col-12">
              <div class="">
                <div class="">

                  <?php
                  $year = urldecode($_REQUEST['year']);
                  if (!empty($year)) { 
                    print_r($year);
                  $args = array(
                  'post_type'      => 'newsletter',
                  'post_status'    => 'publish',
                  'orderby'        => 'date',
                  'order'          => 'DESC',
                  'posts_per_page' => '84',
                  'date_query'     => array(
                                              array(
                                                'year' => $year
                                              )
                                        )
                );
                }
                else{
                  $args = array(
                  'post_type'      => 'newsletter',
                  'post_status'    => 'publish',
                  'orderby'        => 'date',
                  'order'          => 'DESC',
                  'posts_per_page' => '84',
                  'date_query'     => array(
                                              array(
                                                'year' => '2016'
                                              )
                                        )
                );
                }          
                  $new_query = new WP_Query($args);
              if (have_posts()) : while ($new_query -> have_posts()) : $new_query -> the_post(); ?>
                <div>
                    <img src="<?php echo $team_image = get_field('newsletter_logo', $post->ID); ?>" alt="">
                    <h5><?php echo $name_title = get_field('newsletter_title', $post->ID); ?> <span><?php echo $post_title = get_field('newsletter_tag_line', $post->ID); ?></span></h5>
                    <?php echo $team_desc = get_field('newsletter_date', $post->ID); ?>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title($post->ID) ) ); ?>">View Newsleter</a>                          
                  </div>
               <?php endwhile;?>
              <?php wp_reset_query();?>    
              <?php endif;?>
                </div>
                
              </div>
            </div>
                  
          </div> 

        </div> 
        </div>


    <div class="blog-posts-bottom">

        <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

            <h2><?php the_field('newsletters_archives_postslider_heading');?></h2>

            <div class="blog-posts-slider">

        

                <?php

                if( have_rows('newsletters_archives_add_sliders') ): 

                    while ( have_rows('newsletters_archives_add_sliders') ) : the_row();

                    $image = get_sub_field('newsletters_archives_add_slider_image');

                    ?>

                    <div class="slider-single-post">

                    <div class="blog-image" style="background-image : url('<?php the_sub_field('newsletters_archives_add_slider_image');?>')"></div>

                    <div class="slider-post-text">

                        <h3><?php the_sub_field('newsletters_archives_add_slider_heading'); ?></h3>

                        <p><?php the_sub_field('newsletters_archives_add_slider_description'); ?></p>

                        <!-- <a href="<?php the_sub_field('newsletters_archives_add_slider_redirect_link'); ?>"><?php the_sub_field('newsletters_archives_add_slider_redirect_text'); ?></a> -->

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