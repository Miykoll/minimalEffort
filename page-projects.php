<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header">
    <div class="small-container">
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php the_content(); ?>
    </div>
</header>

<?php endwhile; endif; ?>

<section class="portfolio-container vertical-center">

    <?php $args = array(
                'post_type' => 'projects',
                'order' => 'asc',
                'posts_per_page' => '-1',
            );

            $projects = new WP_Query( $args );

            if ( $projects->have_posts() ) :  while ( $projects->have_posts() ) : $projects->the_post(); ?>

    <div class="portfolio-example">
        <a href="<?php echo the_permalink(); ?>">
            <div class="portfolio-item">
                <img src="<?php echo the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title(); ?>">
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_excerpt(); ?>
                <p class="more-info">Design / Development</p>
            </div>
        </a>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

</section>

<?php get_footer(); ?>