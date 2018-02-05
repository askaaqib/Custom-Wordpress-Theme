<?php

/**

 * The template for displaying pages

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





		<?php// Start the loop.
		//while ( have_posts() ) : the_post();
			// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' );?>		

		<div class="inner-banner" style="background-image : url('<?php the_field('page_banner_image');?>')">

	        <div class="container">
				<div class="col-12">
		        <h2 style="color:#fff; text-align:center;"><?php the_field('page_banner_heading');?></h2>
				</div>
		        

	        </div>

    	</div>
</div>
    	   	<?php	
			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) {
			//comments_template();
			//}
			// End of the loop.
		    //endwhile;	?>

	<div class="inner-page-tabs">
		<div class="container">
		<?php if ( have_posts() ) : 
	 while ( have_posts() ) : the_post();     
		the_content(); 
	 endwhile; 
 endif; ?>
		</div>
	</div>

	





<?php get_footer(); ?>

