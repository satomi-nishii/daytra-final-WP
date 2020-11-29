<?php get_header(); ?>

    <!-- .main -->
    <main class="main">

    <?php
        $stories = SCF::get('story');
        $story1 = $stories[0];
        $imgurl1 = wp_get_attachment_image_src($story1['story-img'] , 'full');
        $story2 = $stories[1];
        $imgurl2 = wp_get_attachment_image_src($story2['story-img'] , 'full');
        $story3 = $stories[2];
        $imgurl3 = wp_get_attachment_image_src($story3['story-img'] , 'full');
        $story4 = $stories[3];
        $imgurl4 = wp_get_attachment_image_src($story4['story-img'] , 'full');
    ?>

        <!-- .story-single-top -->
        <div class="story-single-top" ;>
            <div class="story-bg-inner wow fadeInUp" style="background-image:url(<?php echo $imgurl1[0]; ?>)">
                <div class="top-story-wrap wow fadeInUp">
                    <div class="top-lower-inner container">
                        <h2 class="top-lower-title wow fadeInUp"><img src="<?php echo get_template_directory_uri() ?>/img/title.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化　完全版マハーバーラタ"></h2>
                        <div class="top-lower-schedule wow fadeInUp">
                            <img src="<?php echo get_template_directory_uri() ?>/img/date.png" alt="2020年7月4日〜7日　なかのZERO大ホール">
                        </div>
                    </div>
                </div>
                <div class="top-lower-footer container">
                    <?php get_template_part('template-parts/booking-btn'); ?>
                </div>
    
                <!-- breadcrumb -->
                <div class="breadcrumb container wow fadeInUp">
                    <?php bcn_display(); ?>
                </div><!-- /breadcrumb -->

                <div class="story-container">
                    <div class="container">
                        <h1 class="util-title section lower wow fadeInUp">STORY</h1>
                        <div class="story-content-wrap wow fadeInUp">
                            <p class="story-text -top"><?php echo nl2br($story1['story-story']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.story-single-top -->

        <!-- .story-container -->
        <div class="story-container-second">                
            <div class="story-content-wrap -second story-bg-inner wow fadeInUp" style="background-image:url(<?php echo $imgurl2[0]; ?>)">
                <div class="container">
                    <p class="story-text -second"><?php echo nl2br($story2['story-story']); ?></p>
                </div>        
            </div>
            <div class="story-content-wrap -third story-bg-inner  wow fadeInUp" style="background-image:url(<?php echo $imgurl3[0]; ?>)">
                <div class="container">
                    <p class="story-text -third"><?php echo nl2br($story3['story-story']); ?></p>
                </div>
            </div>
            <div class="story-content-wrap -fourth story-bg-inner  wow fadeInUp" style="background-image:url(<?php echo $imgurl4[0]; ?>)">
                <div class="container">
                    <p class="story-text -fourth"><?php echo nl2br($story4['story-story']); ?></p>
                </div>
            </div>
        </div>
        <!-- /.story-container -->

        <?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>