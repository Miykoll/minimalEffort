<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header">
    <div class="small-container">
        <h1>
            <?php the_title(); ?>
        </h1>
        <h5>
            <?php the_content(); ?>
        </h5>
    </div>
</header>

<?php endwhile; endif; ?>
    <?php include 'get_portfolio.php'; ?>

<?php get_footer(); ?>

