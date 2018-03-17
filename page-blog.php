<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="small-container">
    <header class="page-header">
        <h1>
            <?php the_title(); ?>
        </h1>
        <h5>
            <?php the_content(); ?>
        </h5>
    </header>
</div>

<?php endwhile; endif; ?>

<div class="container">
    <section class="articles">
    
        <?php $args = array(
            'post_type' => 'post',
            'order' => 'desc',
            'posts_per_page' => '-1'
        );

        $articles = new WP_Query( $args );

        if ( $articles->have_posts() ) :  while ( $articles->have_posts() ) : $articles->the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <?php   endwhile; ?>

    </section>
</div>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>