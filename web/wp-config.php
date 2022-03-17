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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'LAA1398680-g5v5kn');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1398680');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'bdSroiU8');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql201.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'K}7P]*DK:vI8y;5,x>*AeGY#FjT_KWuHt^Fdp4L^xnX~A1wqP^YByU*f|ZT3CmTG');
define('SECURE_AUTH_KEY', ']8flj:qO(5nOwBwzKWd@WUXz&.?;vS]pxG`dp=yNAdQUJNdRzR%:{>pG|4*C+<>,');
define('LOGGED_IN_KEY', '2|&{W{y1t!..MF_6B4S%4?_-&i%lsTG<NF@udrK-E/4*>`"~$^rf`6Y{WRroixYm');
define('NONCE_KEY', '=(5;.Raib^7s3FTdc8W_}c[*mozpOt_-l9W%Khf-7J0PS"NB8VJ%@|/;bVmn|YE#');
define('AUTH_SALT', 'KqtoX#[b;UeL8q94#HFlu`7>>l#u{ULg<T`mM;aMq<h<pQ4$Pgkgrdrg-6t]:E+8');
define('SECURE_AUTH_SALT', 'LGUmvUx1QJ~R)[(O$r9NyY@XE("GxG0o^$N3qfG#EidXbT9tcL@i#m.3{o=T]E@r');
define('LOGGED_IN_SALT', 'O:"CD(g/S;6?8sq:{eAj)NZ=Bj))-|oiC%W42x]I1@z2wxcB|&KzHt-<cZK;z:*k');
define('NONCE_SALT', 'ar19I{fP~v]d*Rv!+h},MLqauU0AF:<R9DvzcI&?R~(+2L|H!&H.NeE0%Ub_1ezA');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20220224154841_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
