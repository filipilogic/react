<?php
$stack = get_field_object('stack');
$margin = get_field_object('margin');
$padding = get_field_object('padding');


$class = 'il_block il_video_section';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$sec_in_class = 'il_section_inner container';
if ( ! empty( $stack ) ) {
    $sec_in_class .=  ' ' . $stack['value'];
}


?>


<div class="<?php echo $class; ?>">
<?php get_template_part('components/background'); ?>
<div class="<?php echo $sec_in_class ?>">
<?php if( have_rows('info_box') ): ?>
<?php while( have_rows('info_box') ): the_row();
	$title = get_sub_field('title');
	$text = get_sub_field('text');
	$tag = get_sub_field('heading_tag');
	$title_color = get_sub_field('title_color');
	?>

	<div class="left">
		<<?php echo esc_html($tag); ?> class="il_section_title" style="color: <?php echo $title_color; ?>;"><?php echo $title; ?></<?php echo esc_html($tag); ?>>
		<div class="il_section_text"><?php echo $text ?></div>
		<?php get_template_part('components/buttons'); ?>
	</div>

<?php endwhile; ?>
<?php endif; ?>
<div class="right">
	<?php
	$image = get_field('media');
	$video_link = get_field('video_link');
	?>
	
	<?php if( $video_link ): ?>
		<a data-fancybox='video' data-type="iframe" data-preload="true" data-width="1270" data-height="720" href="<?php echo $video_link; ?>"  rel="lightbox">
		<?php endif; ?>
		<?php if( $image ) {
			$size = 'full';
			echo wp_get_attachment_image( $image, $size );
		} ?>
		<?php if( $video_link ): ?>
		</a>
	<?php endif; ?>

	</div>
</div>
</div>
