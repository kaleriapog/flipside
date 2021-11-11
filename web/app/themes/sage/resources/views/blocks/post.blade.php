@php
    $subblock_blog = get_field('subblock_blog', $post->ID);  
@endphp

<div>
    <?php the_title(); ?>
    @if(!empty($subblock_blog))
      @foreach($subblock_blog as $subblock_blog)
        @php
          $images = $subblock_blog['subblock_blog_images'];
          $title = $subblock_blog['subblock_blog_title'];
          $text = $subblock_blog['subblock_blog_text'];
        @endphp                                
        <div>
          @if(!empty($images))
            @foreach ($images as $image)
            <div>
              <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
            </div>  
            @endforeach
          @endif   
          <h4>{{ $title }}</h4>
          <div>{!! $text !!}</div>
        </div>
     @endforeach        
    @endif
</div>