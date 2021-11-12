@php
  $subblock_blog = get_field('subblock_blog', $post->ID); 
  $category = get_the_category(); 
  $icon_rubric = get_field('icon_rubric', 'options');
  $name_links = get_field('name_links', 'options');
  $networks_social = get_field('social_icons_post', 'options');
  $written_by = get_field('written_by', 'options');
  $author = get_user_meta($post->post_author);
@endphp

<section class="post">
  <div class="main-width post__wrapp">
    <p class="rubric">
      <span class="icon_rubric">{!! $icon_rubric !!}</span>
      <?php echo $category[0]->name; ?>
  </p>
    <h2 class="title-post title">
      <?php the_title(); ?>
    </h2>    
      @if(!empty($subblock_blog))
        @foreach($subblock_blog as $subblock_blog)
          @php
            $images = $subblock_blog['subblock_blog_images'];
            $title = $subblock_blog['subblock_blog_title'];
            $text = $subblock_blog['subblock_blog_text'];
          @endphp                                
          <div class="post__sub-block">
            <div class="post__sub-block-images">
              @if(!empty($images))
              @foreach ($images as $image)
              <div class="post__sub-block-image">
                <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
              </div>  
              @endforeach
            @endif 
            </div>              
            <div class="post__sub-block-text">
              @if(!empty($title))
                <h4 class="sub-block-title">{{ $title }}</h4>
              @endif
              @if(!empty($text))              
                <p>{!! $text !!}</p>
              @endif
            </div>            
          </div>
       @endforeach        
      @endif
      <div class="share-block">
        <div class="share-block__wrapp">
          <span class="share-block__title">{{ $name_links }}</span>
          @if(!empty($networks_social))
            @foreach($networks_social as $social)
              @php
                $icon = $social['social_icon_post'];
                $link = $social['social_icons_post_links'];
              @endphp  
              <a class="social-link" href="{{$link}}">{!! $icon !!}</a>
            @endforeach
          @endif
        </div>        
        <div class="written-by">
          <span class="written-by__written">{{ $written_by }}</span>   
          <span class="written-by__name">{{ $author['first_name'][0] }} {{ $author['last_name'][0] }}</span>
          <div class="written-by__image">
            <?php 
              global $post;
              $url = get_avatar_url( $post);
              $img = '<img alt="" src="'. $url .'">';
              echo $img;
            ?>
          </div>         
        </div>
      </div>
  </div>
</section>