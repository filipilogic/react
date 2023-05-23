<?php

get_header();
?>

<?php
	$title = get_field('inner_hero_title');
	$title_color = get_field('title_color');
	$our_title = get_the_title( get_option('page_for_posts', true) );
?>
	<main id="primary" class="site-main block_space_1_2">
		<div class="il_archive_blog_hero">
			<div class="container">
				<div class="il_archive_blog_hero_titile">
					<h1><?php echo $our_title; ?></h1>
					<img src="<?php echo get_template_directory_uri().'/assets/icons/archive-back.png'; ?>" alt="Archive cubes">
				</div>
				
			</div>	
		</div>
		<div class="container">
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); 
				$post_categories = get_the_category();
				
				?>
				<a class="il_blog_post_wrapper" href="<?php echo get_permalink(get_the_ID()) ?>">
                    <div class="il_blog_post">
					
						<div class="il_bp_left">
						<div class="il_bp_title"><h2 class="tg_title_1 tg_dark"><?php the_title(); ?><?php ?></h2></div>
						
						<span class="il_bp_meta"><?php  echo get_the_date('d M Y'); ?></span>

						<div class="il_bp_text">
						<?php if (get_the_excerpt()) {
							echo get_the_excerpt();
						} else {
							echo wp_trim_words(get_the_content(), 25);
						} 
							?>
						</div>
						<?php
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
						<div class="il_bp_right">
							<?php the_post_thumbnail(); ?>
						</div>
						
					</div>
				</a>

			<?php endwhile;

			the_posts_navigation();

		endif;
		?>
		</div>
	</main><!-- #main -->
	<div class="il_blog_footer">
		<div class="container">
			<img src="<?php echo get_template_directory_uri().'/assets/icons/blog-footer-2.png'; ?>" alt="Blog footer">
		</div>
	</div>

<?php
get_footer();
