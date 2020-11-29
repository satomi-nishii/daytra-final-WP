<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完全版マハーバーラタ｜世界最長の叙事詩ピーター・ブルック以来の全編舞台化</title>
    <meta name="description" content="小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。
    いよいよその集大成である完全版マハーバーラタの公演が決定！！アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。
    タイと日本から世界へと発信する本作。どうぞお見逃しなく！">
    <meta name="keywords" content="マハーバーラタ 小池博史 ブリッジプロジェクト">

    <?php wp_head(); ?>

</head>

<body>

    <!-- .header -->
    <header class="header container">
        <nav class="drawer-nav header-nav">
        <?php
            wp_nav_menu(
                //.header-listを置き換えて、PC用メニューを動的に表示する
                array(
                    'depth' => 1,
                    'theme_location' => 'global', //グローバルメニューをここに表示すると指定
                    'container' => 'false',
                    'menu_class' => 'header-nav-list',
                )
            );
        ?>
        </nav>
    </header>
    <!-- /.header -->