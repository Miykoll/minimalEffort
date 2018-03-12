<div class="portfolio">
    <!-- Repeat projects -->

            <?php $args = array(
                'post_type' => 'projects',
                'order' => 'desc',
                'posts_per_page' => '-1'
            );

        $projects = new WP_Query( $args );

            if ($projects->have_posts() ) :  while ($projects->have_posts() ) :$projects->the_post(); ?>

            <?php get_template_part( 'content-project', get_post_format() ); ?>
            <?php   endwhile; ?>

</div>
<?php endif; wp_reset_postdata(); ?>

