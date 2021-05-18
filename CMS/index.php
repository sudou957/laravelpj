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
          <div class="flex2">
            <a class="tag" href="">
              <img class="post-png" src="./img/blog__first.jpg" alt="">
              <div class="tag-midasi">
                <p class="midasi-tag">カテゴリー</p>
              </div>
              <div class="comet-card">
                <p class="comet-text">サンプルテキストがここには入ります。</p>
                <p class="tag-y-m-d">2021-02-26</p>
              </div>
            </a>
          </div>
          <div class="flex2">
            <a class="tag" href="">
              <img class="post-png" src="./img/blog__first.jpg" alt="">
              <div class="tag-midasi">
                <p class="midasi-tag">カテゴリー</p>
              </div>
              <div class="comet-card">
                <p class="comet-text">サンプルテキストがここには入ります。</p>
                <p class="tag-y-m-d">2021-02-26</p>
              </div>
            </a>
          </div>
          <div class="flex2">
            <a class="tag" href="">
              <img class="post-png" src="./img/blog__first.jpg" alt="">
              <div class="tag-midasi">
                <p class="midasi-tag">カテゴリー</p>
              </div>
              <div class="comet-card">
                <p class="comet-text">サンプルテキストがここには入ります。</p>
                <p class="tag-y-m-d">2021-02-26</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </main>
  <?php get_footer(); ?>