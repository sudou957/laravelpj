<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="midasi">
    <a class="page-top" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
    </a>
    <nav class="koumoku-nav">
      <ul>
        <li class="koumoku"><a href="<?php echo get_category_link(6); ?>">HTML</a></li>
        <li class="koumoku"><a href="<?php echo get_category_link(7); ?>">CSS</a></li>
        <li class="koumoku"><a href="<?php echo get_category_link(5); ?>">JavaScript</a></li>
        <li class="koumoku"><a href="<?php echo get_category_link(4); ?>">PHP</a></li>
        <li class="koumoku"><a href="<?php echo get_category_link(3); ?>">MySQL</a></li>
      </ul>
    </nav>
  </header>