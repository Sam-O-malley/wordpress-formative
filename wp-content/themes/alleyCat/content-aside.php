
<?php get_header(); ?>

<div class="col-12 col-sm-6 col-md-4 mb-3">
    <div class="card h-100">
        <div class="card-body">
            <?php if(has_post_thumbnail()): ?>
                <div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>

                
                <?php the_content(); ?>
           
            <?php endif; ?>
        </div>
       
        <div class="card-footer bg-white">
            <a class="btn btn-info btn-block" href="<?php the_permalink(); ?>">View Image</a>
            <p class="card-text"><small class="text-muted">Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></small></p>
        </div>
    </div>
</div>
