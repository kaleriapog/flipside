@php
    $links = get_field('button_earn', $post->ID);
    $title = get_field('title_earn', $post->ID);
    $description = get_field('description_earn', $post->ID);
    $image = get_field('image_earn', $post->ID);
    $image_small = get_field('image_small', $post->ID);
@endphp

<section class="earn">
    <div class="earn__wrapp main-width">
        <div class="earn__content">
            <h2 class="title">{{ $title }}</h2>
            <p>{{ $description }}</p>        
            <div class="earn__button button">
                @if(!empty($links))                  
                    <a class="button-link" href="{{ $links['url'] }}" target="{{ $links['target'] }}">{{ $links['title'] }}</a>            
                @endif
            </div>         
        </div>
        <div class="earn__image">
            <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
            <img class="image-small" src="{{ $image_small['url'] }}" alt="{{ $image_small['title'] }}">
        </div>
    </div>
</section>