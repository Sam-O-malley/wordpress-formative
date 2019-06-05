<?php /* template name: about-us */ ?>

<?php get_header(); ?>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
		
		<div class="container">
          <br>
            <div class="d-flex justify-content-center">	
                <h3><?php the_title(); ?></h3>
              </div>
          
            
            
            
      <div class="row">

              <div class="col-sm-12 col-sm-4">
                    <p><?php the_content(); ?></p>
             </div>  
          
          </div>
        
 
      </div>
        
			
			<hr>
		
		<?php endwhile;
		
	endif;
			
	?>

<?php get_footer(); ?>