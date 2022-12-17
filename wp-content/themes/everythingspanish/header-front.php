<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KBQ8N6QH2K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KBQ8N6QH2K');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1700263852776804"
     crossorigin="anonymous"></script>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta name="google-site-verification" content="KRLd40z0qXjYhhnNWHT-4XNCQZ1DnTfyIRbNFeYQqEE" />

    <?php wp_head(); ?>

</head>

<body>
  <?php 
  if ( function_exists('wp_body_open') ){
    wp_body_open(  );
  }
?>

<div id="page" class="site-header">
  <header id="masthead" class="site-header" >
    <?php get_template_part( 'template-parts/header/nav-front' ); ?>
  </header>
</div>