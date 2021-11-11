

<?php
$posts = get_posts( array(
    'numberposts' => 1,
    'category_name' => 'Last post',
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' =>'',
    'post_type' => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>
    <div class="post-wrapp">
        <?php the_excerpt(); ?>
        <?php the_content(); ?>
        <div><?php echo get_the_post_thumbnail(181); ?></div>
        
        <a href="<?php echo get_permalink(); ?>">Читать далее</a>
    </div>
    <?php
}

wp_reset_postdata(); // сброс

?>

<p>Проверочный текст</p>