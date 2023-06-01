<?php
$title = get_field('past_events_title');
$description = get_field('past_events_description');
?>
<div class="il_block il_section il_past_events_section">
    <div class="container">
        <div class="il_past_events_section_header">
            <?php if($title) :?>
                <h3 class="il_past_events_title"><?php echo $title; ?></h3>
            <?php endif;

            if($description) : ?>
                <p class="il_past_events_description"> <?php echo $description; ?> </p>
            <?php endif;?>
        </div>
        <div class="il_past_events_section_posts">
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
                        $event_img = get_field_object('event_image',get_the_ID()); 
                        $event_excerpt = get_field_object('event_excerpt',get_the_ID()); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if ( $event_img) : ?>
                                    <img src="<?php echo $event_img['value']['url']; ?>" alt="<?php echo $event_img['value']['alt']; ?>">
                                <?php
                                endif;
                                ?>
                                <header class="entry-header">
                                    <h3 class="entry-title"><?php the_title(); ?></h3>
                                </header>
                                <div class="entry-content">
                                   <p><?php echo  $event_excerpt['value'];?></p> 
                                </div>
                                <span>Learn more</span>
                               

                            </a>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_query();
                endif;
            ?>
        </div>

    </div>
</div>
