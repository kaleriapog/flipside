@php
    $icon_rubric = get_field('icon_rubric', 'options');
@endphp

<section class="post-list">
    <div class="post-list__wrapp main-width">
        <div class="post-list__items">

            <?php
            $posts = get_posts( array(
                'numberposts' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' =>'',
                'post_type' => 'post',
                'suppress_filters' => true,
            ) );

            global $post;
            foreach( $posts as $post ){
                setup_postdata($post);
                $category = get_the_category();
                ?>
                <div class="post-list__item">
                    <p class="rubric">
                        <span class="icon_rubric">{!! $icon_rubric !!}</span>
                        <?php echo $category[0]->name; ?>
                    </p>
                    <div class="post-list__image">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                    <h2 class="title-post post-list__title"><?php echo get_the_title(); ?></h2>
                    <div class="post-list__quote">
                        <?php                           
                            $my_excerpt = get_the_excerpt();
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

        </div>
    </div>
</section>