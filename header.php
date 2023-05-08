<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ilogic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php the_field('head_script', 'option') ?> <!-- Head(er) External Code -->
	<?php wp_head(); ?>
	<meta name="theme-color" content="<?php the_field('primary_color', 'option'); ?>" />
	<style>
		:root {
			--color-1: <?php the_field('primary_color', 'option'); ?>;
			--color-2: <?php the_field('secondary_color', 'option'); ?>;
			--color-3: <?php the_field('third_color', 'option'); ?>;
			--color-text: <?php the_field('text_color', 'option'); ?>;
		}
	</style>
</head>

<body <?php body_class(); ?>>
<?php the_field('body_top_script', 'option') ?> <!-- Body Top External Script -->
<?php wp_body_open(); ?>
<div id="page" class="site header-version-1">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ilogic' ); ?></a>
		<?php
			// Check rows existexists.
			if( have_rows('top_buttons', 'option') ): ?>
			<div class="header-top <?php the_field('buttons_position', 'option') ?>">
				<div class="section_inner">

				<?php while( have_rows('top_buttons', 'option') ) : the_row();

					$top_button = get_sub_field('top_button');
					$tb_url = $top_button['url'];
					$tb_title = $top_button['title'];
					$tb_target = $top_button['target'] ? $top_button['target'] : '_self'; ?>

					<a class="il_btn" href="<?php echo esc_url( $tb_url ); ?>" target="<?php echo esc_attr( $tb_target ); ?>"><?php echo esc_html( $tb_title ); ?></a>

				<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>

	<header id="masthead" class="header-main">
		<div class="container header-main-inner">
			<div class="logo-wrap">
				<?php
				the_custom_logo(); ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
			<!-- Mobile Nav Button -->
			<input type="checkbox" class="menu-toggle" id="menu_trigger">
			<label for="menu_trigger">
				<span></span>
				<span></span>
				<span></span>
			</label>
			<!-- Mobile Nav Button -->
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<?php
			$nav_btn = get_field('button_after_nav', 'option');
			if( $nav_btn ):
				$nav_btn_url = $nav_btn['url'];
				$nav_btn_title = $nav_btn['title'];
				$nav_btn_target = $nav_btn['target'] ? $nav_btn['target'] : '_self';
				?>
				<a class="nav-button il_btn" href="<?php echo esc_url( $nav_btn_url ); ?>" target="<?php echo esc_attr( $nav_btn_target ); ?>"><?php echo esc_html( $nav_btn_title ); ?></a>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->
