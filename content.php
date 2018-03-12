<article id="post-<?php the_ID(); ?>" class="article-excerpt cell">
    <header class="posts-header">
        <div class="container">
            <?php if ( get_post_thumbnail_id() ) { ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>" height="150" width="150">
            </a>
            <?php } ?>
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <time datetime="<?php the_time( 'Y-m-d' ); ?>">
                <?php the_time( 'F j, Y' ); ?>
            </time>
        </div>
    </header>
    
    <section class="post-body">

            <?php if ( has_excerpt() ) { ?>
                <div class="lead">
                    <?php the_excerpt(); ?>
                </div>
            <?php } ?>

                    <?php the_tags( '<div class="tags">', '', '</div>' ); ?>

                            <!-- <div class="dark-box"> -->
        <div class="container">
        <br><hr />
        </div>
    </section>
</article>