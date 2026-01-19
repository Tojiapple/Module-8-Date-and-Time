<?php
function render_footer($tzTokyo, $tzLondon, $tzLA) { ?>
<footer>
    <div class="times">
        <span>Time in Tokyo: <?php echo (new DateTime('now', $tzTokyo))->format('h:i A'); ?></span>
        <span>Time in London: <?php echo (new DateTime('now', $tzLondon))->format('h:i A'); ?></span>
        <span>Time in Los Angeles: <?php echo (new DateTime('now', $tzLA))->format('h:i A'); ?></span>
    </div>
    <small>Created by: Rustine De Pedro</small>
</footer>
<?php } ?>
