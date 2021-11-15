@extends('templates.frontend')

@section('content')

<!-- banner-start -->
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-2">

    <ul id="ban-sld">
        @foreach ($banner as $row)
        <li style="background-image: url(assets/images/slides/{{$row->banner_images}});">
            @if($row->link == 'about')
            <a class="ban-link" href="{{ url('about')}}"></a>
            @else
            <a class="ban-link" href="{{ url('all-products')}}/{{($row->category_url)}}"></a>
                @endif
        </li>
                @endforeach
    </ul>

</section>
<!-- banner-end -->

<!-- about-start -->
<section class="mbr-section article" id="msg-box3-3" style="background-color: rgb(255, 255, 255); padding-top:40px; padding-bottom:40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-xs-center">
                <h3 class="mbr-section-title display-2">test </h3>
                <small class="mbr-section-subtitle">test </small>
                <div class="lead">
                    <p>test.</p>
                </div>
                <div><a class="btn btn-primary" href="{{url('about')}}">Know about us</a></div>
            </div>
        </div>
    </div>
</section>
<!-- about-end -->
@foreach($category as $data)
<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->


<!-- painting-heading-start -->
<section class="mbr-section mbr-section__container article" id="header3-5" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">{{$data->cat_name}}</h3>
                <small class="mbr-section-subtitle">{{$data->headerpage}}</small>
            </div>
        </div>
    </div>
</section>
<!-- painting-heading-end -->

<!-- painting-gallery-start -->
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-4" style="background-color: rgb(255, 255, 255); padding: 30px 0;">
    <div class="mbr-cards-row row">

        @foreach($products as $value)
            @if($data->id == $value->pc_id)
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0; padding-bottom:10px;">
                <div class="container product-box-each">
                    <div class="card cart-block">
                        <div class="card-img">
                            <a href="{{url('detail')}}/{{$value->cat_id}}/{{$value->cat_name}}/{{$value->p_id}}/{{$value->prod_name}}" class="pic-holder"><img src="assets/images/{{$value->image}}" class="card-img-top">
                                @if( $value->in_stock  == 0)

                                    <span class="sold-out">Sold out</span>

                                @endif
                            </a>

                            <div class="pro-info-cir-3">
                                <a href="{{url('detail')}}/{{$value->cat_id}}/{{$value->cat_name}}/{{$value->p_id}}/{{$value->prod_name}}" class="pro-info-cir-each pro-info-price" title="Rs.{{$value->price}}"><i class="fa fa-inr" aria-hidden="true"></i></a>
                                <a href="assets/images/{{$value->image}}" data-fancybox data-caption="Paint 1" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{url('detail')}}/{{$value->cat_id}}/{{$value->cat_name}}/{{$value->p_id}}/{{$value->prod_name}}" class="pro-info-cir-each
                                    @if( $value->in_stock  == 0)
                                        sold-out-off-price
                                    @endif
                                        " title="Shop now"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="{{url('detail')}}/{{$value->cat_id}}/{{$value->cat_name}}/{{$value->p_id}}/{{$value->prod_name}}" class="content-link">
                                <h4 class="card-title"><span style="font-weight: normal;">{{$value->prod_url}}</span></h4>
                                <p class="card-text">{{$value->prod_description}}</p>
                            </a>
                            <div class="card-btn"><a href="{{url('detail')}}/{{$value->cat_id}}/{{$value->cat_name}}/{{$value->p_id}}/{{$value->prod_name}}" class="btn btn-primary"><span>Rs. {{$value->price}}</span> &nbsp;Rs.{{$value->discount_price}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</section>
<!-- painting-gallery-end -->
@endforeach

<!-- Testimonial-start -->
<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding testimonial-box" id="msg-box1-8" style="background-color: rgb(245, 245, 245); padding-top: 30px; padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title text-primary display-2 text-xs-center"><small>Client Reviews</small></h3>
            </div>
        </div>
        <ul class="bxslider">
            @foreach($feedback as $feed)
            <li class="mbr-table-md-up">
                <div class="mbr-table-cell col-md-12 text-xs-center">
                    <h2 class="mbr-section-subtitle text-xs-center">test.</h2>
                    <div class="text-xs-center text-primary"><p>test<small>(test)</small></p></div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
<!-- Testimonial-end -->

<!-- subscribe-start -->
<section class="mbr-section" id="form2-8" style="background-color: rgb(35, 35, 35); padding-top:40px; padding-bottom:40px;">
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">STAY UPDATED</h3>
                    <small class="mbr-section-subtitle">Subscribe to our Newsletter</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                    <div data-form-alert="true"><div hidden="" data-form-alert-success="true">Thanks for filling out form!</div></div>
                    <form class="mbr-form" action="{{url('sub-email')}}" method="post" data-form-title="SUBSCRIBE FORM">
                    {{ csrf_field() }}
                        <div class="mbr-subscribe mbr-subscribe-dark input-group">
                            <input type="email" class="form-control" name="subscribe_email"  data-form-field="Email" placeholder="Enter Your Email Address..." >
                            <p class="help-block"></p>
                            @if($errors->has('subscribe_email'))
                                <p class="help-block" style="color: red">
                                    {{ $errors->first('subscribe_email') }}
                                </p>
                            @endif
                            <span class="input-group-btn"><button type="submit" class="btn btn-white">SUBSCRIBE</button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-end -->

@stop