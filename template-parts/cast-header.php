        <?php
            $casts = SCF::get('cast', 85);
            $casts_upper = array_slice($casts, 0, 3); //上位3件取得
        ?>

            <div class="cast-item-wrap">
                <ul class="cast-item-list container">

                <?php
                    foreach ($casts_upper as $cast):
                    $imgurl = wp_get_attachment_image_src($cast['cast-img'] , 'full');
                ?>    
                    <li class="cast-item wow fadeInUp">
                        <div class="cast-item-img">
                            <img src="<?php echo $imgurl[0]; ?>" alt="">
                        </div>
                        <div class="cast-item-body">
                            <div class="cast-item-meta">
                                <p class="cast-item-role"><?php echo $cast['cast-title']; ?></p>
                                <p class="cast-item-name"><?php echo $cast['cast-name']; ?></p>
                                <p class="cast-item-program"><?php echo $cast['cast-role']; ?></p>
                            </div>
                            <p class="cast-item-profile"><?php echo nl2br($cast['cast-profile']); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php if (is_front_page()) {
                    echo '<div class="cast-footer">';
                        echo '<a href="https://daytra3rd-final.stm241.com/cast/" class="util-link wow fadeInUp">もっと見る</a>';
                    echo '</div>';
                } ?>
            </div>