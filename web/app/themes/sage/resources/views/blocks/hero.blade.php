@php

$title = get_field('title', $post->ID);
$image = get_field('image', $post->ID);
$image_arrow = get_field('way_down_icon', $post->ID);
$message = get_field('message', $post->ID);
$mobile_store = get_field('mobile_store', "$post->ID");
$social_hero = get_field('social_hero', "$post->ID");

@endphp

    <section class="hero">
        <div class="hero__wrapp main-width">
            <div class="hero__content">
                <div class="hero__title">
                    <h1 class="title hero-title">{{ $title }}</h1>
                </div>
                <div class="hero__image">
                    <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
                </div>
            </div>
            <div class="hero__info">
                <div class="hero__mobile-store mobile-store">
                    @if(!empty($mobile_store))
                        @foreach($mobile_store as $mobile_store)
                            @php
                                $icon = $mobile_store['store_icon'];
                                $link = $mobile_store['store_link'];
                            @endphp  
                            <a class="hero__mobile-store-link" href="{{$link}}" alt="{{ $image['title'] }}">{!! $icon !!}{{ $link['title'] }}</a>
                        @endforeach
                    @endif
                </div>
                @if(!empty($image_arrow))
                    <div class="hero__arrow-wrapp">
                        <img src="{{ $image_arrow['url'] }}" alt="{{ $image_arrow['title'] }}">
                    </div>
                @endif
                <div class="hero__social-wrapp">                
                    @if(!empty($message))
                        <p class="hero__message">{{ $message }}</p>
                    @endif    
                    <div class="hero__social">
                        @if(!empty($social_hero))
                            @foreach($social_hero as $social)
                                @php
                                $icon = $social['icon_social'];
                                $link = $social['link_social'];
                                @endphp  
                                <a class="hero__social-link" href="{{$link}}">{!! $icon !!}</a>
                            @endforeach
                        @endif
                    </div>
                </div>    
            </div>
        </div>
    </section>
