<?php get_header(); ?>

  <header class="page-header">
    <div class="small-container">
      <h1>Blog</h1>
    </div>
  </header>

  <div class="row">

    <div class="blog-main">

      <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    
        get_template_part( 'content', get_post_format() );
  
      endwhile; endif; 
      ?>

    </div>

  </div>

<?php get_footer(); ?>