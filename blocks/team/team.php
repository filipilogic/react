<?php

$margin = get_field_object('margin');
$padding = get_field_object('padding');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'il_block team';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $cols ) ) {
    $class .=  ' ' . $cols['value'];
}
if ( ! empty( $tab_cols ) ) {
    $class .=  ' ' . $tab_cols['value'];
}
if ( ! empty( $mob_cols ) ) {
    $class .=  ' ' . $mob_cols['value'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$member_class = 'member';
if ( ! empty( $block['className'] ) ) {
    $member_class .= ' ' . $block['className'];
}

 ?>
<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background');
	 
	if ( have_rows('team_row') ) : ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
	</div>

	<?php while( have_rows('team_row') ) : the_row();
	if ( have_rows('member') ) : ?>

		<div class="il_team_row container">
			<?php $item=1; ?>
			<?php while( have_rows('member') ) : the_row();
				$image = get_sub_field('image');
				$size = 'full';
				$name = get_sub_field('name');
				$description = get_sub_field('description');
				$position = get_sub_field('position');
				$rand_id = uniqid();
				?>
					<div id="ilMember_<?php echo $rand_id ?>_id" data-member="ilMember_<?php echo $rand_id; ?>" class="il_team_member il_member_<?php echo $item; ?>">
						<?php if( $image ) { ?>
							<figure class="member_image">
								<?php echo wp_get_attachment_image( $image, $size ); ?>
							</figure>
						<?php } ?>
						<h4 class="member_name"><?php echo $name; ?></h4>
						<span class="member_position"><?php echo $position ?></span>
						<span class="member_button">Learn More</span>
					</div>
					<div id="ilMember_<?php echo $rand_id; ?>" class="member_text member_text_<?php echo $item; ?>">
					<span class="close"><svg id="x" xmlns="http://www.w3.org/2000/svg" width="17.659" height="17.659" viewBox="0 0 17.659 17.659"><g id="Group_195" data-name="Group 195"><path id="Path_319" data-name="Path 319" d="M10.3,8.834l7.056-7.056A1.039,1.039,0,0,0,15.886.309L8.83,7.365,1.773.309A1.039,1.039,0,0,0,.3,1.777L7.361,8.834.3,15.89a1.039,1.039,0,1,0,1.469,1.469L8.83,10.3l7.056,7.056a1.039,1.039,0,0,0,1.469-1.469Z" transform="translate(0 -0.004)" fill="#2BB99B"/></g></svg></span>
						<div class="member_text_inner">
							<div class="member_text_inner_left">
								<?php if( $image ) { ?>
									<figure class="member_image">
										<?php echo wp_get_attachment_image( $image, $size ); ?>
									</figure>
								<?php } ?>
							</div>
							<div class="member_text_inner_right">
								<h2 class="member_box_name tg_title_1 tg_light"><?php echo $name; ?></h2>
								<span class="member_box_position"><?php echo $position ?></span>
								<div class="member_box_description"><?php echo $description; ?></div>
							</div>
						</div>
					</div>
					<?php $item++; ?>
			<?php endwhile; ?>
			
		</div>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
</div>
