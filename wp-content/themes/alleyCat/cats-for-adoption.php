<?php /* template name: Cats for Adoption */ ?>


	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
		

		
		<?php endwhile;
		
	endif;
			
	?>

<?php get_footer(); ?>