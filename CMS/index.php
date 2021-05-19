  <?php get_header(); ?>
  <!-- 見出し部分 -->
  <div class="top">
    <p class="top-coment1">Commit to the growth</p>
    <p class="top-coment2">for everyone</p>
  </div>
  <!-- 記事の投稿部分 -->
  <main>
    <div class="post">
      <div class="post-tag">
        <p class="new-post">new Post</p>
        <h1 class="new-top">新着記事</h1>
        <div class="flex1">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <!--メインループ開始 -->
              <a class="flex2" href="<?php the_permalink(); ?>">
                <!--個別記事へのリンクの出力 -->
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img class="post-png" src="<?php echo get_template_directory_uri(); ?>" alt="no-image">
                <?php endif; ?>
                <!--サムネイルの出力 -->
                <?php if (!is_category() && has_category()) : ?>
                  <p class="tag-midasi">
                    <?php $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                  </p>
                <?php endif; ?>
                <!--カテゴリーの出力 -->
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
                    <!--タイトルの文字数が30文字以降は表示せずに、最後に「…」をつける -->
                  </p>
                  <p class="tag-y-m-d"><?php echo get_the_date('Y-m-d'); ?></p>
                  <!--投稿日時の出力 -->
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </main>
  <?php get_footer(); ?>