{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

  @include('blocks.hero')
  @include('blocks.accordion')
  @include('blocks.earn')
  @include('blocks.welcome')

@endsection