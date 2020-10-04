<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>
<div class="c_comment_area">
  <?php if (have_comments()) : ?>
    <h2 class="e_comment_title">この記事へのコメント</h2>
    <?php
    wp_list_comments(array(
      'avatar_size' => 48,
      'style' => 'ul',
      'type' => 'comment',
      'callback' => 'mytheme_comments'
    ));
  endif;
  comment_form(array(
      'title_reply' => '<p class="e_comment_title">' . esc_html__('Message', 'poseidon') . '</p>',
      'comment_notes_after' => '',
    )
  );
  ?>

</div><!-- #comments -->
