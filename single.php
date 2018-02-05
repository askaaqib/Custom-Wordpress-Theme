<?php
/**
 *  
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
        <?php the_content(); ?>
      </div>      
    <?php       
       endwhile; 
      endif;
     ?>




    <div class="above-footer-link">
        <div class="container">
            <h2>Why MicroAgility</h2>
            <a href="http://www.microagility.com/about">Explore More</a>
        </div>
    </div>

	


<?php get_footer(); ?>
