<?php
$agenda_time = get_sub_field('agenda_time');
$agenda_duration = get_sub_field('agenda_duration');
$agenda_title = get_sub_field('agenda_title');
$agenda_content = get_sub_field('tab_content'); 
?>

<div class="il_agenda_content">
    <div class="il_ac_speakers_left">
        <p class="il_ac_content_time"><?php echo $agenda_time; ?></p>
    </div>
    <div class="il_ac_content">
        <div class="agenda-timeslot-container">
            <p class="il_ac_content_duration"><?php echo $agenda_duration; ?></p>
            <p class="il_ac_content_title"><?php echo $agenda_title; ?></p>
        </div>
        <div class="il_ac_content_content"><?php echo $agenda_content; ?></div>
        <?php
         $count_speakers = count(get_sub_field('speakers'));
        if( have_rows('speakers') ):
           
        ?>
        <div class="il_ac_content_speakers_wrapper">
            <?php
            while( have_rows('speakers') ) : the_row();
                $speakers_name = get_sub_field('speakers_name');
                $speakers_position = get_sub_field('speakers_position');
        ?>
            <div class="<?php echo  $count_speakers > 1 ? 'il_ac_content_speakers' : 'il_ac_content_speaker' ?>">
                <p class="il_ac_content_name"><?php echo $speakers_name; ?></p>
                <p class="il_ac_content_position"><?php echo $speakers_position; ?></p>
            </div>
        <?php
            // End loop.
            endwhile;
        ?>
        </div>
        <?php
        else :
        endif;
        ?>
        
    </div>
</div>