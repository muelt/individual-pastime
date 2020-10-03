<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'AA}Tahkyt/6nAdk<**cY4>>nXxUOuxhO^!s|u4<w i~Mz,Hc8ZP_P9|n0uEo.e8{');
 define('SECURE_AUTH_KEY',  '!Y)bm+o$`)1+=P1:9Bm)*,};+}Qjt`MED4q!8jbG1I*DtE7n/=A9}_KrYqx5$-]:');
 define('LOGGED_IN_KEY',    'Dy-xgZD|;>?>r8`@QE.[wW>s,l=&DBr?|0#Cr/Q6~`Q+qomMeZC)U(h2_N[*&[K(');
 define('NONCE_KEY',        '!:!.UFCo3&x{2B0GFs,<Q|rXIOG<-q[yS9*(LFR$#17~BfhB*B:p0GGhOo{H ,/3');
 define('AUTH_SALT',        '.,_>Cx0RnId+o|$3|hp/-~:TyMkgaj#Z;yK<xM:sJW]iO&V`>W9iq+ewx/&D.5Q[');
 define('SECURE_AUTH_SALT', '}MK_n2.9p*K#vb`04#4C]RYcfd/4p71d#&>Ag@)[3_Y(5u/$LD7_bq=` m@oww[D');
 define('LOGGED_IN_SALT',   'vAa>|UTSvn8y;DLY&Oy.p0FDZ<tUPd6?]J@A}LM-z%ohzQxmu=Tu0FCa6{+J]vK|');
 define('NONCE_SALT',       '%petc5%Id|,fz*!<QS]E_4wbf=)]JRt*|0X+h)B0u3yXK!I&<o?*emE$[kVNgjZ}');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
