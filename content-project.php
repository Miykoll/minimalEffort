<article id="post-<?php the_ID(); ?>" class="portfolio-project">

    <figure class="cover">

        <a href="<?php echo the_permalink(); ?>">

            <?php if ( get_post_thumbnail_id() ) { ?>
                <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
            <?php } else {?>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/404.gif" alt="<?php the_title(); ?>">
            <?php } ?>  
        </a>

    </figure>
    <a href="<?php the_permalink(); ?>" class="info">
        <h2>
            <?php the_title(); ?>
        </h2>
        <h5>
            <?php the_excerpt(); ?>
        </h5>   
    </a>

</article>
