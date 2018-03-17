<article id="post-<?php the_ID(); ?>">

    <header class="single-header">
        <div class="small-container">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
    </header>

    <section class="single-body">
            <?php the_content(); ?>

        <!-- Get meta info -->
        <div class="meta-info">
            <time datetime="<?php the_time( 'Y-m-d' ); ?>">
                Published on <?php the_time( 'F j, Y' ); ?>
            </time>
            <p><?php the_tags(); ?></p>
        </div>

    </section>

</article>