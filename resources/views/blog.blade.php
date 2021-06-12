@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="header-page ef-parallax-bg" style="background-image:url({{asset('view/img/blog-header.jpg')}})">
            <div class="col-md-6 col-md-offset-6">
                <div class="row">
                    <div class="inner-content">
                        <div class="header-content">
                            <h1>Blog Posts</h1>
                            <hr>
                            <p>Everything created in simple way</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($article as $a)
        <div class="container margin-top">
            <div class="blog-wrapper">
                <div class="blog-post">
                    <div class="blog-front-image">
                        <div class="row">
                            <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.10s">
                                <img src="https://picsum.photos/id/{{$loop->iteration}}/870/400" alt="Blog Image">
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="blog-front-content wow animated fadeInUp" data-wow-delay="0.20s">
                                    <div class="blog-front-content-inner">
                                        <span class="post-date">{{$a->title}}</span>
                                        <h1>Idea of denouncing pleasure and praising pain was born</h1>
                                        <a href="/blog/{{$a->id}}">
                                        <i class="read-more-blog-icon pe-7s-angle-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    <div class="container">
        <ul class="pagination-ef wow animated fadeInUp" data-wow-delay="0.20s">
            {{-- <li>
                <a href="#">
                    <i class="pe-7s-angle-left"></i>
                </a>
            </li> --}}
            <li class="current"><a href="{{$article->links()}}"></a></li>
            {{-- <li>
                <a href="#">
                    <i class="pe-7s-angle-right"></i>
                </a>
            </li> --}}
        </ul>
    </div>
@endsection

@section('card')
@foreach ($article as $a)
<div class="col-md-4 col-sm-4 col-xs-12 mix branding">
    <div class="img home-portfolio-image">
        <img src="https://picsum.photos/id/{{$loop->iteration}}/370/400" alt="Portfolio Item">
        <div class="overlay-thumb">
            <a href="javascript:void(0)" class="like-product">
                <i class="ion-ios-heart-outline"></i>
                <span class="like-product">Liked</span>
                <span class="output">250</span>
            </a>
            <div class="details">
                <span class="title">{{$a->title}}</span>
                    @foreach ($a->tags as $t)
                        <span class="info">{{$t->tag}}</span>
                    @endforeach
            </div>
            <span class="btnBefore"></span>
            <span class="btnAfter"></span>
            <a class="main-portfolio-link" href="/blog/{{$a->id}}"></a>
        </div>
    </div>
</div>
@endforeach
@endsection
