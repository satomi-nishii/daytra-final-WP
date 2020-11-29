<?php get_header(); ?>

    <!-- .main -->
    <main class="main">

        <?php get_template_part('template-parts/top-lower'); ?>

        <!-- breadcrumb -->
        <div class="breadcrumb container wow fadeInUp">
            <?php bcn_display(); ?>
        </div><!-- /breadcrumb -->

        <?php
            $casts = SCF::get('cast');
            $casts_middle = array_slice($casts, 3, 4); //中位（4件目）から4件取得
            $casts_lower = array_slice($casts, 7); //下位（8件目）から取得
        ?>

        <!-- .cast -->
        <section class="cast section lower">
            <h1 class="util-title wow fadeInUp">CAST</h1>
            <?php get_template_part('template-parts/cast-header') ?>
            <div class="cast-media-wrap">
                <ul class="cast-media-list container">

                <?php
                    foreach ($casts_middle as $cast):
                    $imgurl = wp_get_attachment_image_src($cast['cast-img'] , 'full');
                ?>    
                    <li class="cast-media wow fadeInUp">
                        <div class="cast-media-img">
                            <img src="<?php echo $imgurl[0]; ?>" alt="">
                        </div>
                        <div class="cast-media-body">
                            <div class="cast-media-meta">
                                <p class="cast-media-role"><?php echo $cast['cast-title']; ?></p>
                                <p class="cast-media-name"><?php echo $cast['cast-name']; ?></p>
                                <p class="cast-media-program"><?php echo $cast['cast-role']; ?></p>
                            </div>
                            <p class="cast-media-profile"><?php echo nl2br($cast['cast-profile']); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="cast-card-wrap">
                <ul class="cast-card-list container">

                <?php
                    foreach ($casts_lower as $cast):
                    $imgurl = wp_get_attachment_image_src($cast['cast-img'] , 'full');
                ?>    
                    <li class="cast-card wow fadeInUp">
                        <p class="cast-card-role"><?php echo $cast['cast-title']; ?></p>
                        <p class="cast-card-name"><?php echo $cast['cast-name']; ?></p>
                        <p class="cast-card-program"><?php echo $cast['cast-role']; ?></p>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </section>
        <!-- /.cast -->  
        
        <?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>