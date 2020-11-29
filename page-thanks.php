<?php get_header(); ?>

    <!-- .main -->
    <main class="main">

        <?php get_template_part('template-parts/top-lower'); ?>

        <!-- breadcrumb -->
        <div class="breadcrumb container wow fadeInUp">
            <?php bcn_display(); ?>
        </div><!-- /breadcrumb -->

        <!-- .inquiry -->
        <section class="inquiry section container lower">
            <h1 class="util-title wow fadeInUp">INQUIRY</h1>
                <div class="thanks-message wow fadeInUp">
                    <p>お問い合わせありがとうございました。<br>メッセージは正常に送信されました。</p>
                </div>
        </section>
        <!-- /.inquiry -->  
        
        <?php get_template_part('template-parts/latest'); ?>

        <?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>