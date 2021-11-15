@php  
    $icon_rubric = get_field('icon_rubric', 'options');
    $args = array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'post',
                'suppress_filters' => true,
);
    if(!empty($query_args)){
        $args = $query_args;
    }
@endphp

<?php
    $posts = get_posts( $args );

    foreach( $posts as $post ){
        
        setup_postdata($post);
        $category = get_the_category($post->ID);
               
        $color = get_field('color_rubric', $category[0]);

        ?>

        <div class="post-list__item">
            <p class="rubric" style="color: {!! $color !!}">
                <span class="icon_rubric">{!! $icon_rubric !!}</span>
                <?php echo $category[0]->name; ?>                
            </p>
            <div class="post-list__image">
                <?php echo get_the_post_thumbnail($post->ID); ?>
            </div>
            <h2 class="title-post post-list__title"><?php echo get_the_title($post->ID); ?></h2>
            <div class="post-list__quote">
                <?php                           
                    $my_excerpt = get_the_excerpt($post->ID);
                    if (strlen($my_excerpt) > 145) {
                        $my_excerpt = substr($my_excerpt, 0, 145) . '  . . .';
                    }
                    if ( $my_excerpt ){
                        echo wpautop( $my_excerpt );
                    }
                    else {
                        echo wpautop('No page description');
                    } 
                ?>
            </div>
            <div class="show-more">
                <a class="show-more-link" href="<?php echo get_permalink(); ?>">Read Article</a>
            </div>
        </div>      
        <?php
    }

    wp_reset_postdata(); // сброс

?>


               

            


