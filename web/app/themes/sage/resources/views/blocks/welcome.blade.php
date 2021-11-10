@php
    $mobile_store = get_field('mobile_store', "$post->ID");
    if (empty($mobile_store)) {
        $mobile_store = get_field('mobile_store', 76);
    }
    $title_welcome = get_field('title_welcome', "$post->ID");
    $subtitle_welcome = get_field('subtitle_welcome', "$post->ID");
@endphp

<section class="welcome">
    <div class="main-widht welcome__wrapp">
        <h2 class="title">{{ $title_welcome }}</h2>
        <p class="welcome__subtitle">{{ $subtitle_welcome }}</p>
        <div class="welcome__mobile-store mobile-store">
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
    </div>

</section>