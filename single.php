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
            <div class="util-title wow fadeInUp">NEWS</div>

            <?php if (have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="news-item is-single wow fadeInUp">
                    <div class="news-item-img is-single">
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
                    <div class="news-item-body is-single">
                        <div class="news-item-meta">
                            <time class="news-item-date is-single" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                            <h1 class="news-item-title is-single"><?php the_title(); ?></h1>
                        </div>
                        <div class="news-item-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <!-- .pagenation -->
            <div class="pagenation is-single wow fadeInUp">

            <?php // 現在の投稿に隣接している前後の投稿を取得する
                $prev_post = get_previous_post(); // 前の投稿を取得
                $next_post = get_next_post(); // 次の投稿を取得
                if( $prev_post || $next_post ): // どちらか一方があれば表示
            ?>

                <?php if( $prev_post ): // 前の投稿があれば表示 ?>
                    <a class="prev page-meta" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                        <p class="page-date"><?php echo get_the_date('Y.m.d', $prev_post->ID); ?></p>
                        <p class="page-title"><?php echo get_the_title($prev_post->ID); ?></p>
                    </a>
                <?php endif; ?>

                <?php if( $next_post ): // 次の投稿があれば表示 ?>
                    <a class="next page-meta" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                        <time class="page-date"><?php echo get_the_date('Y.m.d', $next_post->ID); ?></time>
                        <p class="page-title"><?php echo get_the_title($next_post->ID); ?></p>
                    </a>
                <?php endif; ?>
            
            <?php endif; ?>
            </div>
            <!-- /.pagenation -->


        </section>
        <!-- /.news -->

        <?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>