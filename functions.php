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
    // wp_enqueue_style('drawer', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', array(), '3.2.2');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 'all');
    wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

    wp_enqueue_script('iScroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array( 'jquery' ), '5.2.0', true);
    wp_enqueue_script('drawer', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array( 'jquery' ), '3.2.2', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js"', array( 'jquery' ), true);
    wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');