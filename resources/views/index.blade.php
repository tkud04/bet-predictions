<?php
$void = 'javascript:void(0)';
?>
@extends('layout')

@section('title',"Welcome")

@section('content')
 @include('banner',['banners' => $banners])
 @include('upcoming-matches',['matches' => $matches])
 @include('news-area',['posts' => $posts]) 
 @include('tips',['tips' => $tips]) 
 @include('testimonials',['testimonials' => $testimonials]) 
@stop

