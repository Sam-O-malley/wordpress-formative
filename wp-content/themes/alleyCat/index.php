<?php get_header(); ?>
	
<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post() ?>
        
		<div class="container">
			<div class="row>">
				<div class="col-sm-12">
				<?php echo do_shortcode("[post_grid id='69']"); ?>

	   			</div>
	   		</div>
	    </div>
   
    <?php endwhile; ?>
<?php else: ?>
    <p>There is no post</p>
<?php endif; ?>








<?php get_footer(); ?>