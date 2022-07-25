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
define( 'DB_USER', 'wordpress' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'nu1!go5jr#iegf' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?nsU98jm%E6gO^R&~=1~%fyiuk,_l)>dv^U5m(2&57z@282g!)?&6jebsFTC%lJH' );
define( 'SECURE_AUTH_KEY',  '!J%1(?K[tYN^-Ht{Z+?U1}(lm 0p)tVpGamrN6wc@+g(GI75j=d9]-2fBIt3xo$*' );
define( 'LOGGED_IN_KEY',    'Iq^nS&}8g6LgUkzUq8s>uz5[Q(pjm:/)SwI(.mNK=0:H-aq?.%]f=F%#n*F)_=+%' );
define( 'NONCE_KEY',        'zr[N{?rMco1E$iC`mX=SK]u7LQ9$xQoEUuq!;Y*uq^gJS~a4Oq%1eU?WM7fRt9,;' );
define( 'AUTH_SALT',        '1V&)A*!_Q~+DS&<Rdx?{>6kSPm/GVuFj@ptif9cD;d^fa+8nl<D@>~yMiv *A^=O' );
define( 'SECURE_AUTH_SALT', ']!1EKsNz*VRP34{~g`amj?Nv.8z@;6o>0r3RPjg57l&L<mgD+~_6g*,50D;Vdl8=' );
define( 'LOGGED_IN_SALT',   'Vd3fe(sh*+FrZcmy^;cGORfO09Ff-5~1oAXx/cgw}vG(9Ki|LMSCP<yM7N~pZT4+' );
define( 'NONCE_SALT',       'F%:f,Bnhad~Dts%[>?NKo<24Oz(L-u3(jYCj6N9H[b1q&mM7-Nw;IQ;9HS!82J4a' );

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
