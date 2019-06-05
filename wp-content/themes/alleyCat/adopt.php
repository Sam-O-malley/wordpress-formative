<?php /* template name: adoption */ ?>

<?php get_header(); ?>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
		
		<div class="container">
            <div class="row">
            <div class="col-sm-12 col-sm-4">
                <h3> <a href="http://localhost:8888/AlleyCat/cats-for-adoption/"><?php the_title(); ?></a></h3>
             </div>
              <div class="col-sm-12 col-sm-8">
                    <p><?php the_content(); ?></p>
                    <h3> <a href="http://localhost:8888/AlleyCat/cats-for-adoption/"><?php the_title(); ?></a> Cats here</h3>

             </div>  
        
            </div>  
        </div>
    
			<hr>
		
		<?php endwhile;
		
	endif;
			
	?>

<?php get_footer(); ?>