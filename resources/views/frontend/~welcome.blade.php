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
            <a class="ban-link" href="{{ url('all-products')}}/{{($row->link)}}"></a>
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
                <h3 class="mbr-section-title display-2">{{$about->heading}} </h3>
                <small class="mbr-section-subtitle">{{$about->sub_heading}} </small>
                <div class="lead">
                    <p>{{$about->short_description}}.</p>
                </div>
                <div><a class="btn btn-primary" href="{{url('about')}}">Know about us</a></div>
            </div>
        </div>
    </div>
</section>
<!-- about-end -->

<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->


<!-- saree-heading-start -->
<section class="mbr-section mbr-section__container article" id="header3-5" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">saree</h3>
                <small class="mbr-section-subtitle">Hand painted and hand dyed saree</small>
            </div>
        </div>
    </div>
</section>
<!-- saree-heading-end -->

<!-- saree-gallery-start -->
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-4" style="background-color: rgb(255, 255, 255); padding: 30px 0;">
    <div class="mbr-cards-row row">
        @foreach($sari as $index=>$saree)
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0; padding-bottom:10px;">
                <div class="container product-box-each">
                    <div class="card cart-block">
                        <div class="card-img">
                            <a href="{{url('detail')}}/{{$saree->id}}/{{$saree->cat_id}}" class="pic-holder"><img src="assets/images/{{$saree->image}}" class="card-img-top" alt="saree-1" title="saree-1">
                                @if( $saree->in_stock  == 0)

                                    <span class="sold-out">Sold out</span>

                                @endif
                            </a>
                            <div class="pro-info-cir-3">
                                <a href="{{url('detail')}}/{{$saree->id}}/{{$saree->cat_id}}" class="pro-info-cir-each pro-info-price" title="Rs.{{$saree->price}}"><i class="fa fa-inr" aria-hidden="true"></i></a>
                                <a href="assets/images/{{$saree->image}}" data-fancybox data-caption="Saree 1" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{url('detail')}}/{{$saree->id}}/{{$saree->cat_id}}" class="pro-info-cir-each
                                    @if( $saree->in_stock  == 0)

                                        sold-out-off-price
@endif
                                        " title="Shop now"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="{{url('detail')}}/{{$saree->id}}/{{$saree->cat_id}}" class="content-link">
                                <h4 class="card-title"><span style="font-weight: normal;">{{$saree->prod_name}}</span></h4>
                                <p class="card-text">{{$saree->prod_description}}</p>
                            </a>
                            <div class="card-btn"><a href="{{url('detail')}}/{{$saree->id}}/{{$saree->cat_id}}" class="btn btn-primary"><span>Rs. {{$saree->price}}</span> &nbsp;Rs.{{$saree->discount_price}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- saree-gallery-end -->

<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->


<!-- Scarves-heading-start -->
<section class="mbr-section mbr-section__container article" id="header3-5" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Scarves</h3>
                <small class="mbr-section-subtitle">Mauris pharetra molestie imperdiet</small>
            </div>
        </div>
    </div>
</section>
<!-- Scarves-heading-end -->

<!-- Scarves-gallery-start -->
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-4" style="background-color: rgb(255, 255, 255); padding: 30px 0;">
    <div class="mbr-cards-row row">
        @foreach($scarff as $scarf)
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0; padding-bottom:10px;">
                <div class="container product-box-each">
                    <div class="card cart-block">
                        <div class="card-img">
                            <a href="{{url('detail')}}/{{$scarf->id}}/{{$scarf->cat_id}}" class="pic-holder"><img src="assets/images/{{$scarf->image}}" class="card-img-top" alt="saree-1" title="saree-1">
                                @if( $scarf->in_stock  == 0)

                                    <span class="sold-out">Sold out</span>

                                @endif
                            </a>
                            <div class="pro-info-cir-3">
                                <a href="{{url('detail')}}/{{$scarf->id}}/{{$scarf->cat_id}}" class="pro-info-cir-each pro-info-price" title="Rs.{{$scarf->price}}"><i class="fa fa-inr" aria-hidden="true"></i></a>
                                <a href="assets/images/{{$scarf->image}}" data-fancybox data-caption="Scarf 1" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{url('detail')}}/{{$scarf->id}}/{{$scarf->cat_id}}" class="pro-info-cir-each
                                    @if( $scarf->in_stock  == 0)

                                        sold-out-off-price
@endif
                                        " title="Shop now"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="{{url('detail')}}/{{$scarf->id}}/{{$scarf->cat_id}}" class="content-link">
                                <h4 class="card-title"><span style="font-weight: normal;">{{$scarf->prod_name}}</span></h4>
                                <p class="card-text">{{$scarf->prod_description}}</p>
                            </a>
                            <div class="card-btn"><a href="{{url('detail')}}/{{$scarf->id}}/{{$scarf->cat_id}}" class="btn btn-primary"><span>Rs. {{$scarf->price}}</span> &nbsp;Rs.{{$scarf->discount_price}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- Scarves-gallery-end -->

<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->

<!-- painting-heading-start -->
<section class="mbr-section mbr-section__container article" id="header3-5" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Paintings</h3>
                <small class="mbr-section-subtitle">Paintings of rural community</small>
            </div>
        </div>
    </div>
</section>
<!-- painting-heading-end -->

<!-- painting-gallery-start -->
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-4" style="background-color: rgb(255, 255, 255); padding: 30px 0;">
    <div class="mbr-cards-row row">
        @foreach($painting as $paint)
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0; padding-bottom:10px;">
                <div class="container product-box-each">
                    <div class="card cart-block">
                        <div class="card-img">
                            <a href="{{url('detail')}}/{{$paint->id}}/{{$paint->cat_id}}" class="pic-holder"><img src="assets/images/{{$paint->image}}" class="card-img-top" alt="saree-1" title="saree-1">
                                @if( $paint->in_stock  == 0)

                                    <span class="sold-out">Sold out</span>

                                @endif
                            </a>
                            <div class="pro-info-cir-3">
                                <a href="{{url('detail')}}/{{$paint->id}}/{{$paint->cat_id}}" class="pro-info-cir-each pro-info-price" title="Rs.{{$paint->price}}"><i class="fa fa-inr" aria-hidden="true"></i></a>
                                <a href="assets/images/{{$paint->image}}" data-fancybox data-caption="Paint 1" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{url('detail')}}/{{$paint->id}}/{{$paint->cat_id}}" class="pro-info-cir-each
                                    @if( $paint->in_stock  == 0)

                                        sold-out-off-price
@endif
                                        " title="Shop now"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="{{url('detail')}}/{{$paint->id}}/{{$paint->cat_id}}" class="content-link">
                                <h4 class="card-title"><span style="font-weight: normal;">{{$paint->prod_name}}</span></h4>
                                <p class="card-text">{{$paint->prod_description}}</p>
                            </a>
                            <div class="card-btn"><a href="{{url('detail')}}/{{$paint->id}}/{{$paint->cat_id}}" class="btn btn-primary"><span>Rs. {{$paint->price}}</span> &nbsp;Rs.{{$paint->discount_price}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- painting-gallery-end -->


<!-- horizontal-divi-start -->
<div class="divi-border"><span></span><div class="theme-cir"></div></div>
<!-- horizontal-divi-end -->


<!-- agri-waste-heading-start -->
<section class="mbr-section mbr-section__container article" id="header3-5" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">agri waste products</h3>
                <small class="mbr-section-subtitle">agricultural waste products</small>
            </div>
        </div>
    </div>
</section>
<!-- agri-waste-heading-end -->

<!-- agri-waste-gallery-start -->
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-4" style="background-color: rgb(255, 255, 255); padding: 30px 0;">
    <div class="mbr-cards-row row">
        @foreach($agrewaste as $waste)
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0; padding-bottom:10px;">
                <div class="container product-box-each">
                    <div class="card cart-block">
                        <div class="card-img">
                            <a href="{{url('detail')}}/{{$waste->id}}/{{$waste->cat_id}}" class="pic-holder"><img src="assets/images/{{$waste->image}}" class="card-img-top" alt="saree-1" title="saree-1">
                                @if( $waste->in_stock  == 0)

                                    <span class="sold-out">Sold out</span>

                                @endif
                            </a>
                            <div class="pro-info-cir-3">
                                <a href="{{url('detail')}}/{{$waste->id}}/{{$waste->cat_id}}" class="pro-info-cir-each pro-info-price" title="Rs.{{$waste->price}}"><i class="fa fa-inr" aria-hidden="true"></i></a>
                                <a href="assets/images/{{$waste->image}}" data-fancybox data-caption="Agri waste 1" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{url('detail')}}/{{$waste->id}}/{{$waste->cat_id}}" class="pro-info-cir-each
                                    @if( $waste->in_stock  == 0)

                                        sold-out-off-price
@endif
                                        " title="Shop now"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="{{url('detail')}}/{{$waste->id}}/{{$waste->cat_id}}" class="content-link">
                                <h4 class="card-title"><span style="font-weight: normal;">{{$waste->prod_name}}</span></h4>
                                <p class="card-text">{{$waste->prod_description}}</p>
                            </a>

                            <div class="card-btn"><a href="{{url('detail')}}/{{$waste->id}}/{{$waste->cat_id}}" class="btn btn-primary"><span>Rs. {{$waste->price}}</span> &nbsp;Rs.{{$waste->discount_price}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- agri-waste-gallery-end -->

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
                    <h2 class="mbr-section-subtitle text-xs-center">{{$feed->feedback}}.</h2>
                    <div class="text-xs-center text-primary"><p>{{$feed->name}}<small>({{$feed->designation}})</small></p></div>
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
                        <!-- <input type="hidden" value="2p+erLJTqTaQ7LAs83h/m5fMHjaF1PPP3Zgf12jAf1pCrlblSHZUrMGhfJNZZG2X4Iu6JU8gpZVFjyqro9EemqMz+d4pAKQGGLco7RVLPl96KCABPotjzYqJdAGwqO1o" data-form-email="true"> -->
                        <div class="mbr-subscribe mbr-subscribe-dark input-group">
                            <input type="email" class="form-control" name="subscribe_email" required="" data-form-field="Email" placeholder="Enter Your Email Address..." >
                            <span class="input-group-btn"><button type="submit" class="btn btn-white">SUBSCRIBE</button></span>
                        </div>
                    </form>
                     @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-end -->

@stop