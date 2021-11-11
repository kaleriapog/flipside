@php
    $image_bg = get_field('image_bg', $post->ID);
@endphp
<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <main class="main" style="background-image: url('{{ $image_bg['url'] }}');">
      @php do_action('get_header') @endphp
      @include('partials.header')
        @yield('content')
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif      
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </main>
  </body>
</html>
