<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<?php $cate_list = get_categories();?>
<nav class="c_sidebar" role="sidebar">
	<div class="e_site_ad"><img src="https://placehold.jp/300x300.png"></div>

	<div class="e_sidebar_categories">
		<p class="e_sidebar_title">カテゴリー</p>
		<ul class="e_sidebar_list">
			<?php foreach($cate_list as $cate_item){ ?>
			<li>
				<a href="/report/category/<?php echo $cate_item->category_nicename; ?>" alt="<?php echo $cate_item->name; ?>">
				<?php echo $cate_item->name; ?>(<?php echo $cate_item->count; ?>)
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</nav>
