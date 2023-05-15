<?php
$style = get_field_object('choose_style');
$layout = get_field_object('layout');
$stack = get_field_object('stack');
$margin = get_field_object('margin');
$padding = get_field_object('padding');


$class = 'il_block il_mi_section';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $style ) ) {
    $class .=  ' ' . $style['value'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$sec_in_class = 'il_mi_section_inner container';
if ( ! empty( $layout ) ) {
    $sec_in_class .=  ' ' . $layout['value'];
}
if ( ! empty( $stack ) ) {
    $sec_in_class .=  ' ' . $stack['value'];
}


?>


<div class="<?php echo $class; ?>">
<?php get_template_part('components/background'); ?>
<div class="<?php echo $sec_in_class ?>">
<?php if( have_rows('info_box') ): ?>
<?php while( have_rows('info_box') ): the_row();
	$before_title = get_sub_field('before_title');
	$title = get_sub_field('title');
	$text = get_sub_field('text');
	$tag = get_sub_field('heading_tag');
	$title_color = get_sub_field('title_color');
	?>

	<div class="left">
		<div class="il_section_before_title"><?php echo $before_title ?></div>
		<<?php echo esc_html($tag); ?> class="il_section_title" style="color: <?php echo $title_color; ?>;"><?php echo $title; ?></<?php echo esc_html($tag); ?>>
		<div class="il_section_text"><?php echo $text ?></div>
		<?php get_template_part('components/buttons'); ?>
	</div>

<?php endwhile; ?>
<?php endif; ?>
	<div class="right">

		<?php while( have_rows('images') ) : the_row();
			$image = get_sub_field('image');

			$url = $image['url'];
			$title = $image['title'];
			$alt = $image['alt'];
			$caption = $image['caption']; ?>
			<div class="column">
				<figure class="il_mi_gallery-item">
				<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
				</figure>
			</div>
		<?php endwhile; ?>

	</div>
	

<?php if( have_rows('info_box_2') ): ?>
<?php while( have_rows('info_box_2') ): the_row();
	$before_title = get_sub_field('before_title');
	$title = get_sub_field('title');
	$text = get_sub_field('text');
	$tag = get_sub_field('heading_tag');
	$title_color = get_sub_field('title_color');
	?>

	<div class="info_box_2">
		<div class="il_section_before_title"><?php echo $before_title ?></div>
		<<?php echo esc_html($tag); ?> class="il_section_title" style="color: <?php echo $title_color; ?>;"><?php echo $title; ?></<?php echo esc_html($tag); ?>>
		<div class="il_section_text"><?php echo $text ?></div>
		<?php get_template_part('components/buttons'); ?>
	</div>

<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
