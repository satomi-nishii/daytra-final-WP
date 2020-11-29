        <!-- .schedule -->
        <div class="schedule container section">
            <div class="schedule-inner wow fadeInUp">
                <div class="util-title">SCHEDULE</div>
                <table class="schedule-table">
                <?php
                    $schedules = SCF::get('schedule', 77);
                ?>
                <?php foreach ($schedules as $schedule ): ?>
                    <tr>
                        <td><time><?php echo $schedule['schedule-time']."開演"; ?></time></td>
                        <td><?php echo $schedule['schedule-hall']; ?></td>
                        <td><a href="<?php esc_url($schedule['schedule-booking']); ?>"><?php echo $schedule['schedule-linktext']; ?></a></td>
                    </tr>
                <?php endforeach; ?>
                </table>
            </div>
            <div class="schedule-footer wow fadeInUp">
                <a href="https://daytra3rd-final.stm241.com/inquiry/" class="util-link -medium">お問い合わせはこちら</a>
                <?php get_template_part('template-parts/booking-btn'); ?>
            </div>
        </div>
        <!-- /.schedule -->

    </main>
    <!-- /.main -->