<?php

/**
 * Lightning Child theme functions
 *
 * @package lightning
 */

/*===========================================================*
 * Javascriptの追加読み込み処理
 *===========================================================*/
function my_scripts()
{
	/* ページ内容の描画が関係がないスクリプト等はこちらに */
}
add_action('wp_enqueue_scripts', 'my_scripts');

/*===========================================================*
 * デザインスタイル(CSSファイルやフォント)の追加読み込み処理
 *===========================================================*/
function my_styles()
{
	// 親テーマCSS
// 	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	// jQueryのスライダーCSS
	wp_enqueue_style('my-style1', get_theme_file_uri('/css/slick.css'));
	// アニメーションCSS
	wp_enqueue_style('my-style2', get_theme_file_uri('/css/parts.css'));
	// レイアウトCSS
	wp_enqueue_style('my-style3', get_theme_file_uri('/css/layout.css'));
	// 子テーマCSS
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array(), wp_get_theme() ->get( 'Version' ));
}
add_action('wp_enqueue_scripts', 'my_styles');

/*===========================================================*
 * トップのヘッダーを追加設定
 *===========================================================*/
function set_add_top_header()
{
	// コード中の $ を jQueryで書けるようにする
	wp_enqueue_script('jquery');
	// トップページの場合
	if (is_front_page()) { ?>
		<!--- スプラッシュ -->
		<div id="splash">
			<div id="splash-logo"><img src="/wp-content/uploads/2022/02/logo_load.png" alt="読み込み中"></div>
		</div>
		<!--- スプラッシュ読み込み後 -->
		<div class="splashbg"></div>
<?php
	}
};
add_action('wp_head', 'set_add_top_header');

/*===========================================================*
 * トップのフッターを追加設定
 *===========================================================*/
function set_add_top_footer()
{
	/* ページ内容の描画が関係があるスクリプト等はこちらに */

	// 画像の最適化(WebP)
	wp_enqueue_script('my-script-img', get_theme_file_uri('/js/modernizr-custom.js'));

	// トップページの場合
	if (is_front_page()) {
		// jQueryのスライダープラグイン
		wp_enqueue_script('my-jquery1', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
		// トップ用の独自コード
		wp_enqueue_script('my-script1', get_theme_file_uri('/js/top.js'));
	}
	// トップページ以外個別ページの場合
	else {
		// 個別ページ用の独自コード
		wp_enqueue_script('my-script1', get_theme_file_uri('/js/script.js'));
	}
};
add_action('wp_footer', 'set_add_top_footer');

/*===========================================================*
 * 問い合わせに日本語が1文字も含まれていない場合、エラーにする
 *===========================================================*/
function wpcf7_validate_spam_message($result, $tag)
{
	$value = str_replace(array(PHP_EOL, ' '), '', esc_attr($_POST['your-subject']));
	if (!empty($value)) {
		if (preg_match('/^[!-~]+$/', $value)) {
			$result['valid'] = false;
			$result['reason'] = array('your-subject' => '日本語で入力してください');
		}
	}
	return $result;
}
add_filter( 'wpcf7_validate', 'wpcf7_validate_spam_message', 10, 2 );

/*===========================================================*
 * reCAPTHAの読み込みを問い合わせフォームのみにする
 *===========================================================*/
function load_recaptcha_js()
{
    if (!is_page('contact')) {
        wp_deregister_script('google-recaptcha');
    }
}
add_action('wp_enqueue_scripts', 'load_recaptcha_js', 100 );

/*===========================================================*
 * 独自の処理を必要に応じて書き足す
 *===========================================================*/