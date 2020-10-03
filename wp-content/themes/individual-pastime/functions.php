<?php
/******************** START ログイン系処理 ********************/
define( 'LOGIN_PAGE', 'ver5DP39.php');
add_action( 'login_init', 'admin_login_init');
function admin_login_init()
{
    if( !defined('LOGIN_KEY') || password_verify( 'test', LOGIN_KEY) === false ) {
        header('Location:' . site_url() . '/404.php');
        exit;
    }
}

add_filter( 'site_url', 'admin_login_site_url', 10, 4);
function admin_login_site_url( $url, $path, $orig_scheme, $blog_id)
{
    if(
				(
					$path == 'wp-login.php' ||
					preg_match( '/wp-login\.php\?action=\w+/', $path)
				) && (
					is_user_logged_in() ||
					strpos( $_SERVER['REQUEST_URI'], LOGIN_PAGE) !== false
				)
		) {
        $url = str_replace( 'wp-login.php', LOGIN_PAGE, $url);
    }
    return $url;
}
add_filter( 'wp_redirect', 'admin_login_wp_redirect', 10, 2);
function admin_login_wp_redirect( $location, $status) {
    if( is_user_logged_in() && strpos( $_SERVER['REQUEST_URI'], LOGIN_PAGE) !== falsee ) {
        $location = str_replace( 'wp-login.php', LOGIN_PAGE, $location);
    }
    return $location;
}
/******************** END ログイン系処理 ********************/

function site_type(){
  if($_SERVER["REQUEST_URI"] == "/"){
  	$site_type = "website";
  }else{
  	$site_type = "article";
  }
  echo $site_type;
}

//コメント文言を変更
function custom_comment_form($args) {
	$args['comment_notes_before'] = '';
	$args['comment_notes_after'] = '';
	$args['label_submit'] = '送信';
	return $args;
}

function mytheme_comments($comment, $args, $depth){
?>
   <div id="comment-<?php comment_ID(); ?>" class="c_comment_lists">
     <p class="e_comment_item_title"><?php comment_ID(); ?>: <span><?php echo get_comment_date(); echo get_comment_time(); ?></span></p>
     <?php comment_text() ?>
   </div>
<?php
}

add_filter('comment_form_defaults', 'custom_comment_form');

// 管理ヘッダーの削除
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像の登録許可
add_theme_support('post-thumbnails');
