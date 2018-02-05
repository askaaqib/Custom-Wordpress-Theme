<?php


get_header(); ?>

	
<?php 
$new_query = new WP_Query(postype=careers&posts_per_page=-1);


	while ( $new_query= have_posts() ) : $new_query=	the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?> </p>
	<?php
	endwhile;
?>

	

<?php get_footer(); ?>
