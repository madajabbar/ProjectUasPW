@extends('layouts.main')
@section('content')
<div class="container">
    <div class="header-page ef-parallax-bg" style="background-image:url(https://picsum.photos/1170/550)">
        <div class="col-md-6 col-md-offset-6">
            <div class="row">
                <div class="inner-content">
                    <div class="header-content">
                        <h1>About Us</h1>
                        <hr>
                        <p>Everything created in simple way</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="main-title near-content">
        <h1>WE ARE OAK AGENCY</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p style="font-size: 18px; line-height: 26px;">Who loves or pursues or desires to <b>DESIGN</b> pain of itself,but because and occasionally circumstances occur pain can procure him some great easure of the past.</p>
        </div>
        <div class="col-md-4">
            <p>THE CREATIVE qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima quis nostrum exercitationem ullam corporis suscipit aliquid.</p>
        </div>
        <div class="col-md-4">
            <p><strong>WEB DESIGN</strong> qui dolorem ipsum quia dolor sit amet, MINIMALISM adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="row">
        <div class="col-md-12">
            <div class="our-story wow fadeInUp" style="background: url(https://picsum.photos/870/500) no-repeat" data-wow-duration="0.5s" data-wow-delay="0.2s">
               <div class="col-md-6 col-md-offset-6">
                    <div class="our-story-content wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="our-story-content-inner">
                            <h1>OUR STORY</h1>
                            <hr>
                            <p>
                                Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally
                                encounter consequences that are extremely painful. <br><br>
                                Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example.
                            </p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top">
    <div class="main-title">
        <h1>WHY CHOOSE US?</h1>
        <hr>
        <h6>Except to obtain some advantage from it</h6>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="services-home-page">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="icon-tools"></span>
                            <hr>
                        </div>
                        <h4>BRANDING</h4>
                        <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because.</p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="icon-globe"></span>
                            <hr>
                        </div>
                        <h4>PLAN OF WORK</h4>
                        <p>The actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because.</p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                    <div class="row">
                        <div class="services-icon">
                            <span class="icon-paintbrush"></span>
                            <hr>
                        </div>
                        <h4>ILUSTRATION</h4>
                        <p>Pound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
            <div class="our-story-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <img src=" {{url('https://picsum.photos/680/675')}} " alt="Our Story">
            </div>
    </div>
</div>

<div class="container margin-top">
    <div class="main-title">
        <h1>OUR AMAZING TEAM</h1>
        <hr>
        <h6>Except to obtain some advantage from it</h6>
    </div>
    <div class="owl-carousel team">
        @for ($x=0;$x<=3;$x++)
        <div>
            <div class="img member">
                <img src="{{url('https://picsum.photos/350/400')}}" alt="Team Member">
                <div class="overlay-thumb">
                    <div class="overlay-member-content">
                        <div class="overlay-member-content-inner">
                            <span class="position">WEB DEVELOPER</span>
                            <hr>
                            <ul class="member-social-media">
                                <li><a href="http://facebook.com" target="_blank">Facebook</a></li>
                                <li><a href="http://twitter.com" target="_blank">Twitter</a></li>
                                <li><a href="https://dribbble.com/" target="_blank">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="btnBefore"></span>
                    <span class="btnAfter"></span>
                </div>
            </div>
            <span class="member-name">Madajabbar Palapa Hakim</span>
        </div>
        @endfor
    </div>
</div>
@endsection
