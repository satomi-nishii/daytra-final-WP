<?php

/**
* テーマのセットアップ
**/
function my_setup() {
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
            array( //HTML5でマークアップ
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
    );
}
add_action('after_setup_theme', 'my_setup');

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init() {
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap', array(), 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 'all');
    wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js"', array( 'jquery' ), true);
    wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
* メニューの登録
*/
function my_menu_init() {
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
        )
    );
}
add_action('init', 'my_menu_init');

/**
* ヘッダーメニューに説明を出力する
*/
function prefix_nav_description( $item_output, $item, $depth, $args ) {
 if ( !empty( $item->description ) ) {
 $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<strong>' . $item->title . '</strong>' . '<span class="menu-item-description">' . $item->description . '</span>' , $item_output );
 }
 return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );