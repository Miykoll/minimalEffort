<?php get_header(); ?>

    <div class="container">

        <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'content-single', get_post_format() );
                

            endwhile; endif; 
        ?>

        <?php include 'get_latest_post.php' ?>

    </div>
    
<?php get_footer(); ?>