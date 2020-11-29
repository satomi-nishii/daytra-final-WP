<?php if (paginate_links() ) : ?>
<!-- .pagenation -->
<div class="pagenation wow fadeInUp">
    <?php
        echo
        paginate_links(
            array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '<',
                'next_text' => '>',
            )
        );
    ?>
</div><!-- /.pagenation -->
<?php endif; ?>