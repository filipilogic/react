<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ilogic
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() ); ?>
			<div class="post_container nav-container">
			<?php the_post_navigation(
				array(
					'prev_text' => '<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.82783 6.99999L7.77783 11.95L6.36383 13.364L-0.000167847 6.99999L6.36383 0.635986L7.77783 2.04999L2.82783 6.99999Z" fill="#2B286D"/>
					</svg> Back',
					'next_text' => 'Next <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M5.17217 6.99999L0.222168 11.95L1.63617 13.364L8.00017 6.99999L1.63617 0.635986L0.222168 2.04999L5.17217 6.99999Z" fill="#2B286D"/>
					</svg>',
				)
			); ?>
			</div>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<div class="il_blog_footer">
		<img src="<?php echo get_template_directory_uri().'/assets/icons/blog-footer.png'; ?>" alt="Blog footer">
	</div>

<?php
get_footer();
