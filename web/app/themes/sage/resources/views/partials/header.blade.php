@php
$logo = get_field('logo', 'options');
$links = get_field('button', 'options');
@endphp


<header class="header">
  <div class="container main-width header__wrapp">
    <div class="header__logo-wrapp">
      @if(!empty($logo))
        <a class="header__logo logo" href="{{ home_url() }}" title="logo"><img src="{{ $logo['url'] }}" alt="{{ $logo['title'] }}"></a>
      @endif
    </div>
    <div class="icon-menu-mob-wrapp">
      <span class="icon-menu-mob"></span>
    </div>
    <div class="header__navigation">
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      <div class="header__button button">
      @if(!empty($links))
        @foreach($links as $l)
          @php
             $link = $l['button_links'];
          @endphp
          <a class="button-link @if($loop->first)  @endif" href="{{ $link['url'] }}" target="{{ $link['target'] }}">{{ $link['title'] }}</a>
        @endforeach
      @endif
      </div>
    </div>
  </div>
</header>
