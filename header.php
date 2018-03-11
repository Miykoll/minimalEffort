<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="<?php echo get_bloginfo( 'name' ); ?>">
  <meta name="author" content="">

 
  <!-- Google Analytics 
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-42068444-1', 'auto');
    ga('send', 'pageview');
  </script>
  -->
  <!-- Google Adwords 
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
  </script>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-5951709428846145",
          enable_page_level_ads: true
      });
  </script>
  -->

    <?php wp_head();?>
</head>

<body>

<div class="blog-masthead">
  <div class="container">
    <nav class="navigation">
      <a class="blog-nav-item active" href="#">Home</a>
      <?php wp_list_pages( '&title_li=' ); ?>
    </nav>
  </div>
</div>

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
  </div>
</div>
