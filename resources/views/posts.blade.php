<?php
$img = 'images/breadcrumbs/about.jpg'; 
$bodyClass = 'home-two';
?>
@extends('layout')

@section('title',"Blog")

@section('content')
 @include('banner-2',['img' => $img,'title' => 'Blog'])

   <!-- Home Blog Start Here -->
   <div id="rs-blog" class="rs-blog sec-spacer">
            <div class="container">
                <div class="row">  
                    <?php
                      foreach($posts as $p){
                        $url = 'post?tag='.$p['tag'];
                    ?>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="{{$url}}"><img src="{{$p['img']}}" alt="{{$p['title']}}"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> {{$p['date']}}</span>
                                <h3><a href="{{$url}}">{{$p['title']}} </a></h3>
                                <p>{{$p['summary']}}</p>
                                <div class="read-more">
                                    <a href="{{$url}}">Read More</a>
                                </div>
                            </div>
						</div> 
					</div>
                    <?php
                      }
                    ?>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="default-pagination text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <!--
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                 -->
                                <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Blog End Here -->
 
@stop
