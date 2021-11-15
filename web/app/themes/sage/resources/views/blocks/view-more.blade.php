@php
global $wp_query;

// текущая страница
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'paged' => $paged
);



$the_query = new WP_Query( $query_args );
// максимум страниц
$max_pages = $the_query->max_num_pages;

// если текущая страница меньше, чем максимум страниц, то выводим кнопку
if( $paged < $max_pages ) {
    echo '<div id="loadmore" style="text-align:center;">
        <a href="#" data-max_pages="' . $max_pages . '" data-paged="' . ++$paged . '" class="button view-more">View More</a>
    </div>';
}

@endphp   