{{--
  Template Name: Blog Blocks Template
  Template Post Type: post, page
--}}

@extends('layouts.app')

@section('content')

  @include('blocks.blog-preview')
  @include('blocks.all-post')

@endsection