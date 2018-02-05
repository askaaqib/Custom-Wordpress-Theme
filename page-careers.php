  <?php
/**
 *  Template Name: Careers
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage MicroAgility
 * @since Micro Agility 1.0
 */
get_header(); ?>
    
    
         <?php 
                        $url = "http://iagility.com/xml/jobs.php?department=3";
                        // department =3  means MicroAgility As an Agency name
                        $url_link    = "http://iagility.com/";
                        $response    = wp_remote_get($url);
                        
                       // echo "<pre>";
                       // print_r($response);
                       // echo "</pre>"; 

                        $body        = wp_remote_retrieve_body($response);
                        $parsed_json = json_decode($body, true);
                    ?>
    
    
     <div class="inner-banner about" style="background-image : url('<?php the_field('careers_page_banner_image');?>')">
        <div class="container">
          <div class="col-5">
              <h2><?php the_field('careers_page_banner_heading'); ?></h2>
              <?php the_field('careers_page_content_description'); ?>
          </div>
          <div class="col-7 border-lft">
            <h2><?php the_field('careers_page_banner_text'); ?></h2>
          </div>
        </div>
    </div>
   <div class="inner-page-tabs business-solutions">
        <div class="container">
          <div class="inner-top-above-tabs">
            <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"><?php the_field('careers_page_content_heading'); ?></h1>
            <p><?php the_field('careers_page_content_description_2'); ?></p>
          </div>
        <div class="tab-wrap wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
            <label for="tab1"><?php the_field('careers_page_tab1_title'); ?></label>
            <input type="radio" id="tab2" name="tabGroup1" class="tab">
            <label for="tab2"><?php the_field('careers_page_tab2_title'); ?></label>
            <input type="radio" id="tab3" name="tabGroup1" class="tab">
            <label for="tab3"><?php the_field('careers_page_tab3_title'); ?></label>
          
          
         

            <!-- Tab 1 Content -->
            <div class="tab__content">
               <div class="masnory-card-layout">
                 <ul class="careers">
                     <?php 
                       /* $args = array('orderby' => 'id','order'   => 'DESC', 'post_type' => 'careers','posts_per_page'  =>  '20' );           
                          $new_query = new WP_Query($args);
                         if (have_posts()) : while ($new_query -> have_posts()) : $new_query -> the_post();  */ 
                     foreach($parsed_json as $rows){
                    ?>
                   <li>
                    <h3><?php echo $job_title = $rows['Job_title']; ?></h3>
                     <span>Location : <?php echo $rows['City_Name'].",".$rows['States']; ?></span>
                     <div class="job-desc">
                        <div class="line">
                          <small>Title : </small><p><?php echo $job_title = $rows['Job_title']; ?></p>
                        </div>
                        <div class="line">
                          <small>Location : </small><p><?php echo $rows['City_Name'].", ".$rows['States']; ?></p>
                        </div>
                        <div class="line">
                          <small>Type : </small><p><?php echo $rows['Job_type']; ?></p>
                        </div>
                        <div class="line">
                          <?php 
                            $ratess= 0;
                            if($rows['Min_Rate']==0 && $rows['Max_Rate']==0){
$ratess= "Depends On Experience";
}else{
                            $ratess= "$".$rows['Min_Rate']." - $".$rows['Max_Rate']." per hour"; 
}

?>
                          <small>Rate : </small><p><?php echo $ratess; ?></p>
                        </div>
                        <div class="line">
                          <small>Duration : </small><p><?php echo $rows['Duration']; ?></p>
                        </div>
                        <div class="line">
                          <small>Job ID : </small><p><?php echo $job_id = $rows['Job_no']; ?></p>
                        </div>
                        <a target="_blank" href="<?php echo $url_link?>job_detail.php?job=<?php echo $rows['Job_ID']; ?>" title="<?php echo $job_title; ?>">Apply Now</a>
                     </div>
                    </li>
                    <?php }  ?>
                    <?php //endwhile;?>
                    <?php //wp_reset_query();?>    
                    <?php //endif;?>
 
                 </ul>
               </div>                
            </div>
            <!-- Tab 2 Content -->
            <div class="tab__content">
                <div class="referal-program-section">
                  <?php the_field('reffereal_program'); ?>
                    
                </div>
            </div>
            <!-- Tab 3 Content -->
            <div class="tab__content">

                <div class="referal-program">
                  <?php the_field('info_content'); ?>

                  <div class="col-6 ">
                    <div class="rfral-color-bulet-points rfral-color-1">
                      <?php the_field('referring_candidates'); ?>
                    </div>
                    
                  </div>

                  <div class="col-6 ">
                    <div class="rfral-color-bulet-points rfral-color-2">
                      <?php the_field('referring_a_hiring_authority'); ?>
                    </div>
                    
                  </div>

                </div>
            
                
                <!-- <div class="tab-profile-panel">
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
                </div> -->
            </div>
            </div>
        </div>
    </div>

     <div class="blog-posts-bottom">
        <div class="container">
            <div class="blog-posts-slider">
            
                <?php
                if( have_rows('careers_add_sliders') ): 
                    while ( have_rows('careers_add_sliders') ) : the_row();
                    $image = get_sub_field('careers_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('careers_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h4><?php the_sub_field('careers_add_slider_heading'); ?></h4>
                        <p><?php the_sub_field('careers_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('careers_add_slider_redirect_link'); ?>"><?php the_sub_field('careers_add_slider_redirect_text'); ?></a>
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
            <h2><?php the_field('business_solutions_abovefooter_heading'); ?></h2>
            <a href="<?php the_field('careers_page_abovefooter_button_link'); ?>">
                <?php the_field('careers_page_abovefooter_button_text') ?>
            </a>
        </div>
    </div>

    
      
<?php get_footer(); ?>
