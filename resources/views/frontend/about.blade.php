@extends('templates.frontend')

@section('content')

<!-- banner-start -->
<section class="inner-banner" style="background-image: url(assets/images/{{$about->header_image}});">


</section>
<!-- banner-end -->

<!-- about-start -->
<section class="mbr-section article" id="msg-box3-3" style="background-color: rgb(255, 255, 255); padding-top:40px; padding-bottom:40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-xs-center">
                <h3 class="mbr-section-title display-2">{{$about->heading}}</h3>
                <small class="mbr-section-subtitle">{{$about->sub_heading}}</small>
            </div>
        </div>
    </div>
</section>
<!-- about-end -->

<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->

<!-- About-text-start -->
<section class="mbr-section article" id="msg-box3-2" style="background-color: rgb(255, 255, 255); padding-top:0; padding-bottom:0;">
    <div class="container">
        <div class="row rate-para">
            <div class="col-md-6 text-xs-center pull-right">
                <div class="lead">
                    <div class="pic-holder"><img src="assets/images/{{$about->image1}}" /></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="lead ab-sec-txt">
                    <small class="mbr-section-subtitle">{{$about->title1}}</small>
                    <p>{{$about->description1}}</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About-text-end -->

<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->

<!-- About-text-start -->
<section class="mbr-section article" id="msg-box3-4" style="background-color: rgb(255, 255, 255); padding-top:0; padding-bottom:0;">
    <div class="container">
        <div class="row rate-para">
            <div class="col-md-6 text-xs-center">
                <div class="lead">
                    <div class="pic-holder"><img src="assets/images/{{$about->image2}}" /></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="lead ab-sec-txt">
                    <small class="mbr-section-subtitle">{{$about->title2}}</small>
                    <p><strong>Simply <a href="mailto:{{$header->email}}" target="_blank">write to us</a> and get feedback soon</strong>.<br />{{$about->description2}}.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About-text-end -->

<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->

<!-- About-text-start -->
<section class="mbr-section article" id="msg-box3-2" style="background-color: rgb(255, 255, 255); padding-top:0; padding-bottom:0;">
    <div class="container">
        <div class="row rate-para">
            <div class="col-md-6 text-xs-center pull-right">
                <div class="lead">
                    <div class="pic-holder"><img src="assets/images/{{$about->image3}}" /></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="lead ab-sec-txt">
                    <small class="mbr-section-subtitle">{{$about->title3}}.</small>
                    <p>{{$about->description3}}.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About-text-end -->

<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->

<!-- About-text-start -->
<section class="mbr-section article" id="msg-box3-4" style="background-color: rgb(255, 255, 255); padding-top:0; padding-bottom:0;">
    <div class="container">
        <div class="row rate-para">
            <div class="col-md-6 text-xs-center">
                <div class="lead">
                    <div class="pic-holder"><img src="assets/images/{{$about->image4}}" /></div>
                </div>
            </div>
            <div class="col-md-6" style="padding-bottom:40px;">
                <div class="lead ab-sec-txt">
                    <small class="mbr-section-subtitle">{{$about->title4}}.</small>
                    <p>{{$about->description4}}.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About-text-end -->


<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->
@stop