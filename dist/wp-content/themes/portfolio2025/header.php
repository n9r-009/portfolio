<?php
global $siteUrl;
global $astUrl;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!-- Preload -->
  <link rel="preload" href="<?php echo AST_JS; ?>libs/viewport-extra.min.js" as="script">
  <?php if (is_home() || is_front_page()) : ?>
    <link href="<?php echo AST_CSS; ?>top.css" rel="preload" as="style">
  <?php elseif (is_page('privacy')) : ?>
    <link href="<?php echo AST_CSS; ?>privacy.css" rel="preload" as="style">
  <?php elseif (is_page_template('page-service.php')) : ?>
    <link href="<?php echo AST_CSS; ?>service.css" rel="preload" as="style">
  <?php elseif (is_archive() || is_single() || is_post_type_archive("expert") || is_singular("expert")) : ?>
    <link href="<?php echo AST_CSS; ?>information.css" rel="preload" as="style">
  <?php elseif (is_404()) : ?>
    <link href="<?php echo AST_CSS; ?>notfound.css" rel="preload" as="style">
  <?php endif; ?>
  <!-- /Preload -->
  <!-- preconnect -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- preconnect -->
  <!-- viewport & viewport-extra -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?php echo AST_JS; ?>libs/viewport-extra.min.js" async></script>
  <!-- /viewport & viewport-extra -->
  <!-- jquery -->
  <script src="<?php echo AST_JS; ?>libs/jquery-3.7.1.min.js" defer></script>
  <!-- /jquery -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <!-- SEO -->
  <!-- /SEO -->
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap" rel="stylesheet">
  <!-- / Font -->

  <!-- stylesheet -->
  <?php if (is_home() || is_front_page()) : ?>
    <link href="<?php echo AST_CSS; ?>top.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page('privacy')) : ?>
    <link href="<?php echo AST_CSS; ?>privacy.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page_template('page-service.php')) : ?>
    <link href="<?php echo AST_CSS; ?>service.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_archive() || is_single() || is_post_type_archive("expert") || is_singular("expert")) : ?>
    <link href="<?php echo AST_CSS; ?>information.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_page_template("page-create.php")) : ?>
    <link href="<?php echo AST_CSS; ?>page-create.css<?php acd() ?>" rel="stylesheet">
  <?php elseif (is_404()) : ?>
    <link href="<?php echo AST_CSS; ?>notfound.css<?php acd(); ?>" rel="stylesheet">
  <?php endif; ?>
  <!-- /stylesheet -->

  <!-- script -->
  <script src="<?php echo AST_JS; ?>libs/modernizr-custom.js" defer></script>
  <!-- swiper -->
  <script src="<?php echo AST_JS; ?>libs/swiper/swiper-bundle.min.js" defer></script>
  <!-- /swiper -->
  <!-- gsap -->
  <script src="<?php echo AST_JS; ?>libs/gsap/gsap.min.js" defer></script>
  <script src="<?php echo AST_JS; ?>libs/gsap/ScrollTrigger.min.js" defer></script>
  <!-- /gsap -->
  <script src="<?php echo AST_JS; ?>libs/simplebar.js" defer></script>
  <script src="<?php echo AST_JS; ?>util.js<?php acd() ?>" defer></script>
  <script src="<?php echo AST_JS; ?>global.js<?php acd() ?>" defer></script>
  <?php if (is_home() || is_front_page()) : ?>
    <script src="<?php echo AST_JS; ?>top.js<?php acd() ?>" defer></script>
  <?php endif; ?>
  <!-- /script -->

  <?php wp_head(); ?>
</head>

<body>