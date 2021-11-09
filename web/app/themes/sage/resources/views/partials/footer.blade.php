@php
$logo = get_field('logo', 'options');

$site_name = get_field('site_name', 'options');
$privacy = get_field('privacy', 'options');
$networks_social = get_field('networks_social', 'options');

@endphp

<footer class="footer">
  <div class="container main-width">
    <div class="footer__wrapp">
      <div class="footer__logo-wrapp">
      @if(!empty($logo))
        <a class="footer__logo logo" href="{{ home_url() }}" title="logo"><img src="{{ $logo['url'] }}" alt="{{ $logo['title'] }}"></a>
      @endif
      </div>
      <div class="footer__menu">
        <div class="footer__nav">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
        @endif
        </div>
        <div class="footer__social">
        @if(!empty($networks_social))
          @foreach($networks_social as $social)
            @php
              $icon = $social['icon_social'];
              $link = $social['link_social'];
            @endphp  
            <a class="footer__social-link" href="{{$link}}">{!! $icon !!}</a>
          @endforeach
        @endif
        </div>
      </div>  
    </div>
    <div class="footer__сopyright">
      <div class="">
        @if(!empty($site_name))
          <p>{{ $site_name }}</p>
        @endif  
      </div>
      <div class="footer__privacy">
        @if(!empty($privacy))
          @foreach($privacy as $privacy_item)
            @php
              $link = $privacy_item['privacy_link'];
            @endphp  
            <a class="footer__privacy-link" href="{{ $link['url'] }}" target="{{ $link['target'] }}">{{ $link['title'] }}</a>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</footer>
