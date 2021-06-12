@extends('layouts.main')
@section('content')

{{-- <div class="slider-container">
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">
        <div class="slide slide-0 active">
            <div class="slide__bg" style="background-image: url({{asset('view/img/full-slider/image_1.jpg')}});"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 1 1" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">THINK<span class="border-text">CREATIVE</span></h2>
                    <p>
                        THE DESIGN IS NOT THE ONLY ONE
                        <br> WHO CAN SEE, BUT IS ALSO A FUNCTION.
                    </p>
                </div>
            </div>
        </div>

        <div class="slide slide-1">
            <div class="slide__bg" style="background-image: url({{asset('view/img/full-slider/image_2.jpg')}});"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading"><span class="border-text">MODERN</span>SLIDER</h2>
                    <p>VOLUPTATUM MOLESTIAS RECUSANDAE QUAS REPREHENDERIT.</p>
                </div>
            </div>
        </div>

        <div class="slide slide-2">
            <div class="slide__bg" style="background-image: url({{asset('view/img/full-slider/image_3.jpg')}});"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">We accomplish individual projects</h2>
                </div>
            </div>
        </div>

        <div class="slide slide-3">
            <div class="slide__bg" style="background-image: url({{asset('view/img/full-slider/image_4.jpg')}});"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">New projects <span>Modern</span></h2>
                </div>
            </div>
        </div>

        <div class="slide slide-4">
            <div class="slide__bg" style="background-image: url({{asset('view/img/full-slider/image_1.jpg')}});"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading"><span>New projects And Modern</span></h2>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="slider-wrapper">
        <div class="slider-description">
            <div class="slider-description-inner">
                <h1>Pure<span>Elegance</span></h1>
            </div>
            <div class="cd-intro">
                <div class="cd-headline clip">
                    <span class="cd-words-wrapper">
                        <b class="is-visible">AWESOME THEME</b>
                        <b>MODERN COMBINATION</b>
                        <b>CREATIVE SOLUTIONS</b>
                    </span>
                </div>
            </div>
        </div>
        <div id="slider-ef" class="slider-images-wrapper">
                <img class="img-responsive" src="{{asset('view/img/slider/bendera jepun.jpg')}}" alt="Banner">
        </div>
    </div>
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
