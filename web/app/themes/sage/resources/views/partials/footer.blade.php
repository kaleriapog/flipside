@php
$logo = get_field('logo', 'options');

$items_social = get_field('social_2', 'options');

@endphp

<footer class="footer">
  <div class="container main-width">
    <div class="footer_logo-wrapp">
    @if(!empty($logo))
      <a class="footer__logo logo" href="{{ home_url() }}" title="logo"><img src="{{ $logo['url'] }}" alt="{{ $logo['title'] }}"></a>
    @endif
    </div>
    <div class="footer__nav">
    @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
    @endif
    </div>
    <div class="footer__social">
      @if(!empty($items_social))
        @foreach($items_social as $social)
          @php
            $icon = $social['social_icon'];
            $link = $social['social_link'];
          @endphp  
          <a class="footer__social-link" href="{{$link}}">
            @if (!empty($icon))
              <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}">
            @endif
          </a>
        @endforeach
      @endif
    </div>
  </div>
</footer>
