            <p class="comments-text">舞台関係者のみならず各界著名人からコメントが届いています！</p>
            <?php if (is_page('comments')) {
                echo '<div class="comments-header is-pc lower-list">';
            } else {
                echo '<div class="comments-header is-pc">';
            } ?>
                <div class="comments-inner">
                    <div class="comments-wrap">
                        <div class="comments-name-wrap">
                            <p class="comments-title">京都佛立ミュージアム館長</p>
                            <p class="comments-name">長松清潤</p>
                        </div>
                        <p class="comments-comment">
                            「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
                        </p>
                    </div>
                    <div class="comments-footer">
                        <?php if (is_front_page()): ?>
                            <?php echo '<a href="https://daytra3rd-final.stm241.com/comments/" class="util-link">もっと見る</a>' ;?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="comments-item is-sp wow fadeInUp">
                <div class="comments-item-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/comment-1.png" alt="">
                </div>
                <div class="comments-item-body">
                        <p class="comments-item-title">京都佛立ミュージアム館長</p>
                        <p class="comments-item-name">長松清潤</p>
                    <p class="comments-item-comment">
                        「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                        まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
                    </p>
                    <?php if (is_front_page()) {
                        echo '<div class="comments-item-footer">';
                            echo '<a href="https://daytra3rd-final.stm241.com/comments/" class="util-link">もっと見る</a>';
                        echo '</div>';
                    } ?>
                </div>
            </div>