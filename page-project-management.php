<?php 
/*
	Template Name: Project Management Template
*/

get_header(); 

?>

      <div class="inner-banner" style="background-image : url('<?php the_field('project_management_banner_image');?>')">
        <div class="container">
          <div class="col-5">
              <h2><?php the_field('project_management_banner_text');?></h2>
              <?php the_field('project_management_left_description');?>
 
          </div>
          <div class="col-7 border-lft">
            <h1><?php the_field('project_management_banner_heading');?></h1>
          </div>
        </div>
    </div>

    <div class="inner-page-tabs business-solutions">
        <div class="container">

           <div class="inner-top-above-tabs">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('project_management_content_heading');?></h3>
            <p><?php the_field('project_management_content_description');?></p>
          </div>

          <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">

              <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
              <label for="tab1">Business Solutions</label>

              <input type="radio" id="tab2" name="tabGroup1" class="tab">
              <label for="tab2">MicroAgility Insight</label>

              <input type="radio" id="tab3" name="tabGroup1" class="tab">
              <label for="tab3">Business Consultants</label>


            <!-- Tab 1 Content -->
            <div class="tab__content">
               <div class="masnory-card-layout">
                  <?php
                    // check if the repeater field has rows of data
                    if( have_rows('project_management_tab1_add_boxes') ): ?>
                    <ul>
                    <?php while ( have_rows('project_management_tab1_add_boxes') ) : the_row(); ?>
                    <li>
                    <h3><?php the_sub_field('project_management_tab1_box_heading'); ?></h3>
                    <p><?php the_sub_field('project_management_tab1_box_description'); ?></p>
                    </li>
                    <?php endwhile; ?>
                    </ul>

                    <?php 
                    else:
                    endif; ?>
               </div>                
            </div>


            <!-- Tab 2 Content -->
            <div class="tab__content">
                <div class="tabs-blog-posts">
                  <div class="featured-post">
                    <div class="col-8 pd0">
                      <div class="feature-img" style="background-image : url('<?php echo get_template_directory_uri();?>/img/featured-blog.jpg')"></div>
                    </div>
                    <div class="col-4 pd0">
                      <div class="feature-text">
                        <h3>MA Approach™ <span>Sajid Khan</span></h3>
                        <p>Today, more than 50% of projects are late and/or over budget. Billions dollars are wasted on these projects because of disconnection or outright...</p>
                        <a href="#">Read <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-4 pl0">
                    <div class="tab-single-post" style="background-image : url('<?php echo get_template_directory_uri();?>/img/tab-blog-1.jpg')">
                      <h3>MA Project Framework™ <span>Sajid Khan</span></h3>
                      <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                  </div>

                  <div class="col-4 ">
                    <div class="tab-single-post" style="background-image : url('<?php echo get_template_directory_uri();?>/img/tab-blog-2.jpg')">
                      <h3>PM and Team Sports <span>Sajid Khan</span></h3>
                      <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                  </div>

                  <div class="col-4 pr0">
                    <div class="tab-single-post" style="background-image : url('<?php echo get_template_directory_uri();?>/img/tab-blog-3.jpg')">
                      <h3>Blogs Insights <span>Sajid Khan</span></h3>
                      <a href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                  </div>

                </div>
            </div>

            <!-- Tab 2 Content -->
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
                      <div class="btn-panel">
                          <a href="#" class="btn-grey">Read More</a>                            
                      </div>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="list-profiles">

                     <?php            
                        $new_query = new WP_Query('post_type=team&posts_per_page=6');
                    if (have_posts()) : while ($new_query -> have_posts()) : $new_query -> the_post(); ?>

                      <div class="col-4">
                        <div class="list-single-profile">
                          <img src="<?php echo $team_image = get_field('team_member_image', $post->ID); ?>" alt="">
                          <h4><?php echo $team_name = get_field('team_name_title', $post->ID); ?><span><?php echo $team_post = get_field('team_post_title', $post->ID); ?></span></h4>
                        </div>
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
    </div>

    <div class="blog-posts-bottom">
        <div class="container">
            <div class="blog-posts-slider">
			         <?php
                if( have_rows('project_management_add_sliders') ): 
                    while ( have_rows('project_management_add_sliders') ) : the_row();
                    $image = get_sub_field('project_management_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('project_management_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('project_management_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('project_management_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('project_management_add_slider_redirect_link'); ?>"><?php the_sub_field('project_management_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('project_management_left_text');?></h2>
            <a href="<?php the_field('project_management_right_text_link');?>"><?php the_field('project_management_right_text_copy');?></a>
        </div>
    </div>
    

    <?php get_footer(); ?>