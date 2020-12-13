        <!-- .news -->
        <section class="news container section">
            <div class="news-header">
                <?php if (is_front_page()) {
                    echo '<h2 class="util-title wow fadeInUp">NEWS</h2>';
                } else {
                    echo '<h2 class="util-title wow fadeInUp">LATEST NEWS</h2>';
                } ?>
                <a href="https://daytra3rd-final.stm241.com/news/" class="util-link wow fadeInUp">ニュース一覧へ</a>
            </div>


            <?php if(have_posts()): ?>
            <?php
                $latest_posts = get_posts( array(
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => '3', // 3件取得
                ) );
            ?>
            <div class="news-item-list">
            <?php foreach ( $latest_posts as $post ) : setup_postdata($post); ?>
                <article class="news-item wow fadeInUp">
                    <a href="<?php the_permalink(); ?>" class="news-item-link">
                        <div class="news-item-img">
                            <?php
                                if (has_post_thumbnail()) {
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
                            <h3 class="news-item-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </article> 
                <?php endforeach; ?>   
            </div>

            <?php
                $latest_posts = get_posts( array(
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => '2', // 2件取得
                    'offset' => '3', //取得開始位置
                ) );
            ?>
            <div class="news-item-list news-item-2nd wow fadeInUp">
            <?php foreach ( $latest_posts as $post ) : setup_postdata($post); ?>
                <article class="news-item news-item-2nd">
                    <a href="<?php the_permalink(); ?>" class="news-item-link news-item-2nd">
                        <div class="news-item-img news-item-2nd">
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
                        <div class="news-item-body news-item-2nd">
                            <time class="news-item-date news-item-2nd" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                            <h3 class="news-item-title news-item-2nd"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>   
            </div>
            <?php endif; ?>

        </section>
        <!-- /.news -->