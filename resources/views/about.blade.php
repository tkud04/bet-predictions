<?php
$img = 'images/breadcrumbs/about.jpg'; 
$bodyClass = 'home-two';
?>
@extends('layout')

@section('title',"About Us")

@section('content')
 @include('banner-2',['img' => $img,'title' => 'About Us'])

 <!-- Club Section Start -->
 <div class="rs-club sec-spacer">
			<div class="container">
                <h3 class="title-bg">About Our Club</h3>
				<div class="row">
					<div class="col-md-6 col-ms-12">
						<div class="rs-club-text">
							<p>Donec sed pellentesque purus, ut tempus odio. Etiam dapibus non orci vel sodales. Vestibulum dignissim laoreet semper. Phasellus elit felis, vehicula vel porta quis, venenatis ac magna. Sed dapibus placerat nisi nec tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam posuere ex at quam finibus, vitae bibendum nibh mollis. Nunc et velit eget nibh rutrum fringilla eu vitae risus. Nulla in convallis nisl, a ullamcorper nulla.</p>
							<p>There are many variations of passages of Lorem Ipsum available, but they can  majority have suffered alteration in some form, by injected humour, or there randomised words which don't look even slightly believable.and they useings The standard Lorem Ipsum passage, used since the 1500s.</p>
						</div>
					</div>
					<div class="col-md-6  col-ms-12">
						<div class="rs-club-image">
							<img src="images/breadcrumbs/club.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
</div>
<!-- Club Section End -->

 <!--Testimonils Section Start Here-->
 <div class="testimonil-section-page sec-spacer">
            <div class="overly-bg"></div>
            <div class="container">
                <h3 class="title-bg">Users Feedback</h3>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tesitmonial-inner">
							@foreach($testimonials as $t)
                            <div class="single-testimonil text-center">
                                <div class="author-info">
                                    <img src="images/avatar.jpg" width='101' height='101' alt="{{$t['name']}}" />
                                    <h4>{{$t['name']}} <span>{{$t['location']}}</span></h4>
                                    <p>{!! $t['comment'] !!}</p>
                                </div>
                            </div>
							@endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Testimonils Section End Here-->

@stop
