<?php
function render_header() { ?>
<header>
    <h1>PHILIPPINE HOLIDAYS 2026</h1>
    <div class="datetime">Updated: <?php echo (new DateTime('now', new DateTimeZone('Asia/Manila')))->format('D, d M Y h:i A'); ?></div>
</header>
<?php } ?>
