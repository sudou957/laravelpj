<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
  <div class="kizi">
    <?php if (has_category()) : ?>
      <p class="kyaria">
        <?php echo get_the_category_list(' '); ?>
      </p>
    <?php endif; ?>
    <h1 class="kizi-title"><?php the_title(); ?></h1>
    <p class="y-m-d"><?php echo get_the_date('Y-m-d'); ?></p>
    <?php the_post_thumbnail(); ?>
    <div class="kizinakami"><?php the_content(); ?></div>
  </div>
<?php endif; ?>
<!-- フッター欄 -->
<?php get_footer(); ?>