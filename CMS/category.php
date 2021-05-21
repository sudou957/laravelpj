<?php get_header(); ?>
<div class="category-haikei">
  <p class="top-category"><?php single_cat_title(); ?></p>
</div>
<main>
  <div class="post-category">
    <div class="flex1">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <!-- メインループ開始-->
          <a class="flex2" href="<?php the_permalink(); ?>">
            <!-- 個別記事へのリンクを出力-->
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img class="midasi-png" src="<?php echo get_template_directory_uri(); ?>/img/blog__first.jpg" alt="">
            <?php endif; ?>
            <!-- サムネイルの出力-->
            <div class="comet-card">
              <p class="comet-text">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
                <!-- タイトルの文字が30以降の場合は表示せずに、最後に「...」を付ける-->
              </p>
              <p class="tag-y-m-d"><?php echo get_the_date('Y-m-d'); ?></p>
              <!-- 日付の出力-->
            </div>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <!-- 関連する投稿がない場合の処置-->
        <p>投稿が見つかりません。</p>
      <?php endif; ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>