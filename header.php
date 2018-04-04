<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="<?php echo get_bloginfo( 'name' ); ?>">
  <meta name="author" content="">

 
  <!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96599848-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96599848-1');
</script>

  
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
    <nav class="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'container_id' => 'nav-responsive', 'container_class' => 'nav-links' ) ); ?>
    </nav>

  <div class="main-container">
    <main class="main">
