<?php
if( have_rows('images') ): ?>
	<div class="il_block_images">
		<?php while( have_rows('images') ) : the_row();

			$image_id = get_sub_field('image');
			if( $image_id ):
                echo wp_get_attachment_image($image_id,'full');
            endif;

		endwhile; ?>
	</div>
<?php endif; ?>