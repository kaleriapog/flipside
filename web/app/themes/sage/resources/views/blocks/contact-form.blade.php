@php
    
$title = get_field('title_contact', $post->ID); 
$subtitle = get_field('subtitle_contact', $post->ID); 
$form_contact = get_field('form_contact', $post->ID);

@endphp

<section class="contact-form">
    <div class="contact-form__wrapp main-width">
        <div class="contact-form__description">
            <h2 class="title">{{ $title }}</h2>
            <p class="subtitle">{{ $subtitle }}</p>
        </div>
        <div class="contact-form__form">
            {!! $form_contact !!}
        </div>
    </div>
</section>