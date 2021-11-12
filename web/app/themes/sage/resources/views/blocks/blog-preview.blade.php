@php
    $icon_rubric = get_field('icon_rubric', 'options');
@endphp

<?php
$last_posts = get_posts( array(
    'numberposts' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' =>'',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;
foreach( $last_posts as $post ){
    setup_postdata($post);
    $category = get_the_category();
    ?>
    <section class="post-preview">
        <div class="post-preview__wrapp main-width">
            <div class="post-preview__image">
                <?php echo get_the_post_thumbnail(); ?>                
            </div>
            <div class="post-preview__content">
                <p class="rubric">
                    <span class="icon_rubric">{!! $icon_rubric !!}</span>
                    <?php echo $category[0]->name; ?>
                </p>
                <h2 class="title-post"><?php echo get_the_title(); ?></h2>
                <div class="post-preview__quote">
                    <?php     
                        $my_excerpt = get_the_excerpt();
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
        </div>
    </section>
    <?php
}

wp_reset_postdata(); // сброс

?>
