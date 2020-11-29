<?php get_header(); ?>

    <!-- .main -->
    <main class="main">

        <!-- .top -->
        <div class="top">
            <div class="top-wrap wow fadeInUp">
                <div class="top-inner container">
                    <h1 class="top-title wow fadeInUp"><img src="<?php echo get_template_directory_uri() ?>/img/title.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化　完全版マハーバーラタ"></h1>
                    <div class="top-text-wrap">
                        <div class="top-schedule wow fadeInUp">
                            <img src="<?php echo get_template_directory_uri() ?>/img/date.png" alt="2020年7月4日〜7日　なかのZERO大ホール">
                        </div>
                        <p class="top-text wow fadeInUp">
                            小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。
                            いよいよその集大成である<span class="top-text-inline">完全版マハーバーラタ</span>の公演が決定！！<br>
                            アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。
                            タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                        </p>
                    </div>
                </div>
            </div>
            <div class="top-footer container">
                <?php get_template_part('template-parts/booking-btn'); ?>
            </div>
        </div>
        <!-- /.top -->

        <!-- .introduction -->
        <div class="introduction container section">
            <div class="introduction-inner wow fadeInUp">
                <img src="<?php echo get_template_directory_uri() ?>/img/introduction.png" alt="" class="introduction-img">
                <h2 class="util-title wow fadeInUp">INTRODUCTION</h2>
                <h3 class="introduction-title wow fadeInUp">なぜ今「マハーバーラタ」なのか？</h3>
                <div class="introduction-text-wrap">
                    <p class="introduction-text-left wow fadeInUp">
                        「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
                        それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
                        平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
                    </p>
                    <p class="introduction-text-right wow fadeInUp">
                        現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
                        神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
                        非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
                    </p>
                </div>
            </div>
        </div>
        <!-- /.introduction -->

        <?php get_template_part('template-parts/latest'); ?>


        <?php
            $stories = SCF::get('story', 81);
            $story1 = $stories[0];
            $imgurl1 = wp_get_attachment_image_src($story1['story-img'] , 'full');
        ?>

        <!-- .story -->
        <section class="story section wow fadeInUp" style="background-image:url(<?php echo $imgurl1[0]; ?>)">
            <div class="container">
                <h2 class="util-title wow fadeInUp">STORY</h2>
                <div class="story-text-wrap">
                    <p class="story-text wow fadeInUp"><?php echo nl2br($story1['story-story']); ?></p>
                </div>
                <div class="story-footer">
                    <a href="https://daytra3rd-final.stm241.com/story/" class="util-link wow fadeInUp">もっと詳しく</a>
                </div>
            </div>
        </section>
        <!-- /.story -->

        <!-- .comments -->
        <section class="comments container section wow fadeInUp">
            <h2 class="util-title">COMMENTS</h2>
            <?php get_template_part('template-parts/comments-header'); ?>
        </section>
        <!-- /.comments -->

        <!-- .cast -->
        <section class="cast section">
            <h2 class="util-title wow fadeInUp">CAST</h2>
            <?php get_template_part('template-parts/cast-header') ?>
        </section>
        <!-- /.cast -->

        <?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>