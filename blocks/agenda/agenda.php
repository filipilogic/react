<?php
$agenda_style = get_field('agenda_style');

$agenda_main_class = '';
if($agenda_style === 'style-1' ){
	$agenda_main_class = 'agenda_style_1';
}
if($agenda_style === 'style-2' ){
	$agenda_main_class = 'agenda_style_2';
}

if ( have_rows('agenda_tabs') ) :

$margin = get_field_object('margin');
$padding = get_field_object('padding');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'il_block il_agenda '.$agenda_main_class;
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if( get_field('stack_tabs') ) {
    $class .= ' ' . 'stack_tabs';
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

 ?>
<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php 
if($agenda_style !== 'style-2' ){
	get_template_part('components/background'); 
}
?>
<div class="container">
	<?php get_template_part('components/intro'); ?>
	<?php $item=1; ?>
		<div class="il_agenda_wrap">
			<header class="il_tabs_nav">
				<ul>
			<?php while( have_rows('agenda_tabs') ) : the_row();
				$title = get_sub_field('agenda_tab_title');
			?>
				<li><a data-tab = "<?php echo $item; ?>" href="#"><?php echo $title; ?></a></li>
				<?php $item++;?>
			<?php endwhile; ?>
			</ul>
			</header>
			<section class="il_tabs_content">
				<?php $item=1; ?>
				<?php while( have_rows('agenda_tabs') ) : the_row();

				?>
					<div data-tab="<?php echo $item; ?>" class="il_tab">

					<?php

					// Check rows existexists.
					if( have_rows('time_slot') ):

						// Loop through rows.
						while( have_rows('time_slot') ) : the_row();

							// Load sub field value.
							if($agenda_style === 'style-1' ){
								get_template_part('template-parts/content', 'agenda-1' );
							}
							if($agenda_style === 'style-2' ){
								get_template_part('template-parts/content', 'agenda-2' );
							}
							
							
						 // End loop.
						endwhile;
					endif; ?>


					</div>
				<?php $item++;?>
				<?php endwhile; ?>
			</section>
		</div>
	</div>
</div>
<?php endif; ?>
