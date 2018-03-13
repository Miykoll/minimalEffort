<article id="post-<?php the_ID(); ?>">

    <header class="single-header">
        <div class="container">
            <?php if ( get_post_thumbnail_id() ) { ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>" height="150" width="150"></a>
            <?php } ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <h5>
                <?php if ( has_excerpt() ) { ?>
                    <?php the_excerpt(); ?>
                <?php } ?>
            </h5>
            <time datetime="<?php the_time( 'Y-m-d' ); ?>">
                <?php the_time( 'F j, Y' ); ?>
            </time>
        </div>
    </header>

    <section class="single-body">
        <div class="container">
            <?php the_content(); ?>

            <?php the_tags( '<div class="tags">', '', '</div>' ); ?>


        </div>
        
        <!-- <div class="dark-box"> -->
            <div class="container">
            <br><hr />
            </div>
    </section>
</article>
<?php include 'get_latest_post.php' ?>