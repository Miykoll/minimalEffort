<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header">
    <div class="small-container">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>
</header>

<div class="container">
    <?php the_content(); ?>

    <a href="http://docs.google.com/gview?url=http://michaeltenden.nl/wp-content/uploads/docs/CV-Michael-ten-Den.pdf&embedded=true" class="resume-link" target="blank">Click here for my resume.</a>
    <div class="resume-container">
        <iframe class="resume-iframe" src="http://docs.google.com/gview?url=http://michaeltenden.nl/wp-content/uploads/docs/CV-Michael-ten-Den.pdf&embedded=true" style="width:700px; height:700px;" frameborder="0"></iframe>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>