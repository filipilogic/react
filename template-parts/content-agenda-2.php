<?php
$agenda_time = get_sub_field('agenda_time');
$agenda_duration = get_sub_field('agenda_duration');
$agenda_title = get_sub_field('agenda_title');
$agenda_content = get_sub_field('tab_content'); 
$speakers_image = get_sub_field('speakers_image');
$speakers_name = get_sub_field('speakers_name');
$speakers_position = get_sub_field('speakers_position');
?>

<div class="il_agenda_content">
    <div class="il_ac_speakers_image">
    <?php echo wp_get_attachment_image($speakers_image,'full') ?>
    </div>
    <div class="il_ac_content">
        <div class="agenda-timeslot-container">
        <p class="il_ac_content_time"><?php echo $agenda_time; ?></p>
            <p class="il_ac_content_duration"><?php echo $agenda_duration; ?></p>
        </div>
        <p class="il_ac_content_title"><?php echo $agenda_title; ?></p>
        <div class="il_ac_content_content"><?php echo $agenda_content; ?></div>
        <p class="il_ac_content_name"><?php echo $speakers_name; ?></p>
        <p class="il_ac_content_position"><?php echo $speakers_position; ?></p>
    </div>
</div>