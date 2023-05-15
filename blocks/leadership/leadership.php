<?php

if( have_rows('leader') ): ?>
<div class="il_block il_leadership-block">
    <?php

    while( have_rows('leader') ) : the_row();
        $leader_name = get_sub_field('leader_name');
        $leader_position = get_sub_field('leader_position');
        $leader_description = get_sub_field('leader_description');
        $leader_image_id = get_sub_field('leader_image');
    ?>
    <div class="container">
        <div class="il_leader-card">
            <div class="il_leader-card-info">
                <?php if( $leader_name ) : ?>
                    <h3 class="il_leader-name"><?php echo $leader_name; ?></h3>
                <?php endif; ?>
                <?php if( $leader_position ) : ?>
                    <p class="il_leader-position"><?php echo $leader_position; ?></p>
                <?php endif; ?>
                <?php if( $leader_description ) : ?>
                    <p class="il_leader-description"><?php echo $leader_description; ?></p>
                <?php endif; ?>
            </div>
            <?php if( $leader_image_id ) : ?>
                <div class="il_leader-card-image">
                <?php echo wp_get_attachment_image($leader_image_id,'full') ?>
                </div> 
            <?php endif; ?>
        </div>
    </div>
     <?php

    endwhile;
?>
</div>
<?php
else :
    // Do something...
endif;