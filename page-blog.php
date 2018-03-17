<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header">
    <div class="small-container">
        <h1>
            <?php the_title(); ?>
        </h1>
        <h5>&nbsp;</h5>
        <?php the_content(); ?>
    </div>
</header>

<?php endwhile; endif; ?>

<section class="articles">

    <div class="large-container">
        <div class="grid">

            <?php $args = array(
                'post_type' => 'post',
                'order' => 'desc',
                'posts_per_page' => '-1'
            );

            $articles = new WP_Query( $args );

            if ( $articles->have_posts() ) :  while ( $articles->have_posts() ) : $articles->the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

            <?php   endwhile; ?>

        </div>

    </div>

</section>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>