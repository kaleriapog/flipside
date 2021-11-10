@php

$image = get_field('image_accordion', $post->ID);
$accordion_items = get_field('accordion_items', $post->ID);

@endphp

<section class="accordion">
    <div class="main-width accordion__wrapp">
        <div class="accordion__image">
            <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
        </div>
        <div class="accordion__content">
            <ul class="accordion__content-wrapp" id="accordion">
                @if(!empty($accordion_items))
                    @foreach($accordion_items as $accordion_item)
                        @php
                            $title = $accordion_item['accordion_title'];
                            $description = $accordion_item['accordion_description'];
                        @endphp                                
                        <li class="accordion__content-item">
                            <div class="accordion__content-title">
                                <h4>{{ $title }}</h4>
                            </div>
                            <div class="accordion__content-description">
                                <p>{{ $description }}</p>
                            </div>
                        </li>
                    @endforeach        
                @endif
            </ul>
        </div>
    </div>
</section>