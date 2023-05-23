<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ilogic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="il_blog_hero">
		<div class="il_blog_hero_content">
			<a class="il_blog_hero_back_link" href="<?php echo get_post_type_archive_link('post'); ?>">
				<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.82783 6.99999L7.77783 11.95L6.36383 13.364L-0.000167847 6.99999L6.36383 0.635986L7.77783 2.04999L2.82783 6.99999Z" fill="white"/>
				</svg>
				Back
			</a>
			<h1 class="il_blog_hero_title"><?php the_title(); ?></h1>
			<p class="il_blog_hero_excerpt">
				<?php 
				if (get_the_excerpt()) {
					echo get_the_excerpt();
				}  ?>
			</p>
			<?php
				$post_categories = get_the_category();
				if(count($post_categories)){ ?>
					<div class="il_bp_post_category_wrapper">
					<?php
						foreach($post_categories as $post_category){?>
							<span class="il_bp_post_category"><?php echo $post_category->name; ?></span>
					<?php } ?>
					</div>
				<?php
				}
			?>
		</div>
    </div>

	<div class="entry-content post_container">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ilogic' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ilogic' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
