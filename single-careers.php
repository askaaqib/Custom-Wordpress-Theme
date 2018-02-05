<?php
/**
 * Template: 
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
      if (have_posts()) : 
       while ( have_posts() ) : the_post(); ?> 

	  <div class="single-career">
        <div class="container">
            <h1><?php the_field('careers_job_title');?></h1>
            <div class="row">
                <div class="col-6">
                    <h4>Job Description</h4>
                    <p><?php the_field('careers_job_description');?></p>
                </div>
                <div class="col-6">
                    <h4>Job Summary</h4>                
                    <p><strong>Title:</strong> <?php the_field('careers_summary_title');?><br>
                        <strong>Location:</strong> <?php the_field('careers_summary_job_location');?><br>
                        <strong>Type:</strong> <?php the_field('careers_summary_job_type');?><br>
                        <strong>Rate:</strong> <?php the_field('careers_summary_job_rate');?><br>
                        <strong>Duration:</strong> <?php the_field('careers_summary_job_duration');?><br>
                        <strong>Job ID:</strong> <?php the_field('careers_summary_job_id');?><br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="inner-page-content">
        <div class="container">
            <h2><?php the_field('jobresponsibilitiesheading'); ?> </h2>
              <?php the_field('careers_job_responsibility');?>         
        </div>
    </div>

    <div class="list-items">
        <div class="container">
            <h3><?php the_field('careers_candidate_responsibility_title');?></h3>
	            <?php if( have_rows('careers_candidate_responsibilities_repeater') ): ?>
					 	
					 	<ul> <?php
						    while ( have_rows('careers_candidate_responsibilities_repeater') ) : the_row();
						        ?>
						        <li> <?php the_sub_field('careers_candidate_responsibilities_text'); ?></li>
						   <?php endwhile; ?>
					    </ul>
					<?php else :
					    // no rows found
					endif;
				?>
            

            <h3><?php the_field('careers_requirements_and_skills_title');?></h3>
             <?php if( have_rows('careers_requirements_and_skills_repeater') ): ?>
					 	
					 	<ul class="bold"> <?php
						    while ( have_rows('careers_requirements_and_skills_repeater') ) : the_row();
						        ?>
						        <li> <?php the_sub_field('careers_requirements_and_skills_text'); ?></li>
						   <?php endwhile; ?>
					    </ul>
					<?php else :
					    // no rows found
					endif;
				?>

            <h3><?php the_field('careers_education_title');?></h3>
            <ul><li><?php the_field('careers_education_required');?></li></ul>  
            <a href="#" class="btn-apply-now">Apply Now</a>

        </div>
    </div>
    <?php       
       endwhile; 
      endif;
     ?>
    <div class="form">
        <div class="container">
            <?php echo do_shortcode( '[contact-form-7 id="2263" title="Single Career Form"]' ); ?>
        </div>
    </div>

    <!-- <div class="blog-posts-bottom">
        <div class="container">
            <h2>Join Our Communities</h2>
            <div class="blog-posts-slider">
            <?php
                if( have_rows('consultants_add_sliders') ): 
                    while ( have_rows('consultants_add_sliders') ) : the_row();
                    $image = get_sub_field('consultants_add_slider_image');
                    ?>
                    <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('<?php the_sub_field('consultants_add_slider_image');?>')"></div>
                    <div class="slider-post-text">
                        <h3><?php the_sub_field('consultants_add_slider_heading'); ?></h3>
                        <p><?php the_sub_field('consultants_add_slider_description'); ?></p>
                        <a href="<?php the_sub_field('consultants_add_slider_redirect_link'); ?>"><?php the_sub_field('consultants_add_slider_redirect_text'); ?></a>
                    </div>
                    </div>
                    <?php 
                    endwhile;
                else :
                    // no rows found
                endif; ?>
                <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('img/blog-post-1.jpg')"></div>
                    <div class="slider-post-text">
                        <h3>Business Transformation: Reinvent to Succeed</h3>
                        <p>The three critical factors in any organization are people, process, and technology. Business Transformation....</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('img/blog-post-2.jpg')"></div>
                    <div class="slider-post-text">
                        <h3>CXO Series – Brian Meshkin, Founder & President</h3>
                        <p>Brian Meshkin, Founder & President at Proove Biosciences shares valuable insight regarding his role as a visionary </p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('img/blog-post-3.jpg')"></div>
                    <div class="slider-post-text">
                        <h3>CXO Series – Sarah Richardson</h3>
                        <p>Sarah is a transformative, inspirational, and results-driven Business and Technology executive within large-scale </p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="slider-single-post">
                    <div class="blog-image" style="background-image : url('img/blog-post-2.jpg')"></div>
                    <div class="slider-post-text">
                        <h3>Business Transformation: Reinvent to Succeed</h3>
                        <p>The three critical factors in any organization are people, process, and technology. Business Transformation....</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="above-footer-link">
        <div class="container">
            <h2>Why MicroAgility</h2>
            <a href="#">Explore More</a>
        </div>
    </div>

	


<?php get_footer(); ?>
