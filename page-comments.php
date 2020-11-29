<?php get_header(); ?>

    <!-- .main -->
    <main class="main">

        <?php get_template_part('template-parts/top-lower'); ?>

        <!-- breadcrumb -->
        <div class="breadcrumb container wow fadeInUp">
            <?php bcn_display(); ?>
        </div><!-- /breadcrumb -->

        <!-- .comments -->
        <section class="comments container section lower wow fadeInUp">
            <h1 class="util-title">COMMENTS</h1>
            <?php get_template_part('template-parts/comments-header'); ?>
            <ul class="comments-card-list">

            <?php
                $comments = SCF::get('comments');
                foreach ($comments as $comment ):
            ?>
                <li class="comments-card wow fadeInUp">
                    <div class="comments-card-meta">
                        <p class="comments-card-name"><?php echo $comment['comments-name']; ?></p>
                        <p class="comments-card-title"><?php echo $comment['comments-title']; ?></p>
                    </div>
                    <p class="comments-card-comment"><?php echo nl2br($comment['comments-comment']); ?></p>
                </li>
            <?php endforeach; ?>

            </ul>
        </section>
        <!-- /.comments -->  

        <?php get_template_part('template-parts/schedule'); ?>      

<?php get_footer(); ?>