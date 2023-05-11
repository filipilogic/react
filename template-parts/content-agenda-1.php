<?php
$agenda_time = get_sub_field('agenda_time');
$agenda_content = get_sub_field('tab_content'); ?>

<div class="il_agenda_content">
    <div class="il_ac_time">
        <?php echo $agenda_time; ?>
    </div>
    <div class="il_ac_content">
        <?php echo $agenda_content; ?>
    </div>
</div>