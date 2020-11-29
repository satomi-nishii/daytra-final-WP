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
            <div class="inquiry-form wow fadeInUp">
                <?php echo do_shortcode( '[contact-form-7 id="123" title="カスタマイズ"]' ); ?>
            </div>
        </section>
        <!-- /.inquiry -->  

        <script>
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                location = '<?php echo home_url('/inquiry/thanks'); ?>';
            }, false );
        </script>

        <?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>