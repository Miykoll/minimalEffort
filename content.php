<article id="post-<?php the_ID(); ?>" class="article-blog">
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <div class="container-blog">
        <?php if ( has_excerpt() ) { ?>
            <?php the_excerpt(); ?>
        <?php } ?>

        <time datetime="<?php the_time( 'Y-m-d' ); ?>">
            Published on <?php the_time( 'F j, Y' ); ?>
        </time>
    </div>  

</article>