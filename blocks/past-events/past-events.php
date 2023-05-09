<?php
$title = get_field('past_events_title');
$description = get_field('past_events_description');
?>
<div class="il_block il_section past_events_section">
    <div class="container">
        <div class="past_events_section_header">
            <?php if($title) :?>
                <h3><?php echo $title; ?></h3>
            <?php endif;

            if($description) : ?>
                <p> <?php echo $description; ?> </p>
            <?php endif;?>
        </div>
        <div class="past_events_section_posts">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'events',
                    'posts_per_page' => 2,
                );
                $events = new WP_Query( $args );
                
                if ( $events->have_posts() ) :
                
                    while ( $events->have_posts() ) :
                        $events->the_post();
              
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                            ?>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div>
                            </a>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>

    </div>
</div>
