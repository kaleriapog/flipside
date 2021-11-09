{{--
  Template Name: Home Template
--}}

@php
    $fields = get_field('title', $post->ID);
@endphp

@extends('layouts.app')

@include('blocks.hero')