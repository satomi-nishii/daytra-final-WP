<?php get_header(); ?>

    <!-- .main -->
    <main class="main">

        <?php get_template_part('template-parts/top-lower'); ?>

        <!-- breadcrumb -->
        <div class="breadcrumb container wow fadeInUp">
            <?php bcn_display(); ?>
        </div><!-- /breadcrumb -->

        <!-- .news -->
        <section class="news container section lower">
            <h1 class="util-title wow fadeInUp">NEWS</h1>

            <?php if (have_posts() ) : ?>
            <ul class="news-item-list">
                <?php while ( have_posts() ) : the_post(); ?>
                <li class="news-item wow fadeInUp">
                    <a href="<?php the_permalink(); ?>" class="news-item-link">
                        <div class="news-item-img">
                            <?php
                                if (has_post_thumbnail() ) {
                                    // アイキャッチ画像が設定されてれば大サイズで表示
                                    the_post_thumbnail('large');
                                } else {
                                    // なければnoimage画像をデフォルトで表示
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                }
                            ?>
                        </div>
                        <div class="news-item-body">
                            <time class="news-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                            <h2 class="news-item-title">
                                <?php
                                    if(mb_strlen($post->post_title)>38) {
                                        $title= mb_substr($post->post_title,0,38) ;
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                ?>
                            </h2>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </section>
        <!-- /.news -->

        <?php get_template_part('template-parts/pagenation'); ?>        
        <?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>