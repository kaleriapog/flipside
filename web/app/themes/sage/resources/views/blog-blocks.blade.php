{{--
  Template Name: Blog Blocks Template
  Template Post Type: post, page
--}}

@extends('layouts.app')

@section('content')

  @include('blocks.blog-preview')
  <section class="post-list">    
    <div class="post-list__wrapp main-width">
      <div class="post-list__items">
        @include('blocks.all-post')       
      </div>
      @include('blocks.view-more')  
    </div>
  </section>
  
@endsection