@extends('layouts.main')
@section('content')


<div class="container">
    <div class="header-page ef-parallax-bg" style="background-image:url(https://picsum.photos/1170/550)">
        <div class="col-md-6 col-md-offset-6">
            <div class="row">
                <div class="inner-content">
                    <div class="header-content">
                        <h1>{{$content->title}}</h1>
                        <hr>
                        <p>Everything created in simple way</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="single-blog-wrapper">
        <div class="row">
            <div class="col-md-9">
                <h1>Pain of itself,but because and occasionally circumstances occur those who do not know how to pursue pleasure rationally encounter</h1>
            </div>
        </div>
        <div class="blog-post">
            <div class="blog-front-image">
                <div class="row">
                    <div class="full-blog-content">
                        <div class="container">
                            {!!$content->content!!}
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.10s">
                        <img src="https://picsum.photos/870/400" alt="Blog Image">
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="blog-front-content wow animated fadeInUp" data-wow-delay="0.20s">
                            <div class="blog-front-content-inner">
                               <span class="post-single-date">14 Jun - 2015</span>
                               <div class="share-buttons">
                                   <span class="info-title">Share:</span>
                                   <ul>
                                       <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                                       <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                                       <li><a href="#"><i class="iconmoon-google-plus"></i></a></li>
                                       <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                                   </ul>
                               </div>
                               <div class="blog-tags">
                                   <span class="info-title">Tags:</span>
                                   <ul>
                                        @foreach ($content->tags as $t)
                                            <li><a href="#">{{$t->tag}}</a></li>
                                        @endforeach
                                   </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
