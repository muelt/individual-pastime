<?php get_header(); ?>
  <main class="c_main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php $image_path = get_the_post_thumbnail_url( get_the_ID(), 'full' );?>
      <p class="e_article_date"><?php echo get_the_date('Y.m.d'); ?></p>
      <h2 class="e_article_title"><?php the_title(); ?></h2>
      <img class="e_article_topimg" src="<?php echo $image_path; ?>">
      <div class="e_article_content"><?php the_content(); ?></div>
      <div class="e_site_ad"><img src="https://placehold.jp/720x100.png"></div>
      <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile;
    ?>
  </main>
<?php get_sidebar(); ?>

<?php get_footer();
