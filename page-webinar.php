<?php 

/*

	Template Name: Webinar Template

*/



get_header(); 



?>



  <div class="inner-banner" style="background-image : url('<?php the_field('webinar_banner_image');?>')">

        <div class="container">

          <div class="col-5">

              <img width="200px" src="<?php the_field('webinar_left_image');?>">



          </div>

          <div class="col-7 border-lft">

            <h2><?php the_field('webinar_banner_heading');?></h2>

          </div>

        </div>

    </div>

 
 

       <div class="bg-green webinar-secs">
          <div class="container">
            
            <h3><?php the_field('webinar_section1_heading');?></h3>
            <?php the_field('webinar_section1_description'); ?>
          
          </div>  
       </div> 

       <div class="bg-lightblue webinar-secs">
          <div class="container">
          
            <h3><?php the_field('webinar_section2_heading');?></h3>
            <?php the_field('webinar_section2_description'); ?>
          
          </div>  
       </div> 

       <div class="bg-darkblue webinar-secs">
          <div class="container">
          
            <h3><?php the_field('webinar_section3_heading');?></h3>
            <?php the_field('webinar_section3_description'); ?>
          
          </div>  
       </div>

 

    <div class="above-footer-link">

        <div class="container">

            <h2><?php the_field('webinar_abovefooter_heading');?></h2>

            <a href="<?php the_field('webinar_abovefooter_button_link');?>"><?php the_field('webinar_abovefooter_button_text');?></a>

        </div>

    </div>

    



    <?php get_footer(); ?>