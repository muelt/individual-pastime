<?php get_header(); ?>

  <main class="c_main" role="main">
    <h2 class="e_archive_title"><?php echo get_the_date('Y年n月'); ?></h2>
    <?php if (have_posts()) : ?>
      <div class="e_article_lists">
        <?php while (have_posts()) : the_post(); ?>

          <!-- アイテム情報 -->
          <div class="e_article_item">
            <div class="e_article_img">
              <a href="<?php the_permalink(); ?>"><img
                  src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                  alt="<?php echo get_the_title(); ?>"></a>
            </div>
            <div class="e_article_contents">
              <a href="<?php the_permalink(); ?>">
                <p class="e_article_content_date"><?php echo get_the_date('Y.m.d'); ?></p>
                <p class="e_article_content_title"><?php echo get_the_title(); ?></p>
                <p class="e_article_content_ditail"><?php echo get_the_excerpt(); ?></p>
              </a>
              <p class="e_article_content_read_more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>

            </div>
          </div>
          <!-- /アイテム情報 -->
        <?php endwhile; ?>
      </div>
      <?php if (function_exists('wp_page_numbers')) : wp_page_numbers(); endif;
    else : ?>
      <h1>記事はありません</h1>
      <p>お探しの記事は見つかりませんでした。</p>
    <?php
    endif;
    ?>

  </main>
<?php get_sidebar(); ?>

<?php get_footer();
