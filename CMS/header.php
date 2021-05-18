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
      <img src="./img/estramedia__logo.png" alt="">
      <?php bloginfo('name'); ?>
      <?php bloginfo('description'); ?>
    </a>
    <nav>
      <ul>
        <li class="koumoku">HTML</li>
        <li class="koumoku">CSS</li>
        <li class="koumoku">JavaScript</li>
        <li class="koumoku">PHP</li>
        <li class="koumoku">MySQL</li>
      </ul>
    </nav>
  </header>