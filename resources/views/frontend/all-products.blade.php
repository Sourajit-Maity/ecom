@extends('templates.frontend')

@section('content')
    <section class="inner-banner" style="background-image: url(../assets/images/{{$product_category->header_image}});"></section>


    <section class="mbr-section article" id="msg-box3-3" style="background-color: rgb(255, 255, 255); padding-top:40px; padding-bottom:40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">{{$product_category->headerpage}}</h3>
                    <small class="mbr-section-subtitle">{{$product_category->sub_headerpage}}t</small>
                    <div class="lead">
                        <p>{{$product_category->description_page}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php $count=3 @endphp

    @foreach($painting as $index=>$paint)
        @if($index%4==0 )
            <div class="divi-border"><span></span><div class="theme-cir"></div></div>
            <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-4" style="background-color: rgb(255, 255, 255); padding: 30px 0;">
                <div class="mbr-cards-row row">
        @endif


                <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0; padding-bottom:10px;">
                    <div class="container product-box-each">
                        <div class="card cart-block">
                            <div class="card-img">
                                <a href="{{url('detail')}}/{{$paint->cat_id}}/{{$paint->cat_name}}/{{$paint->product_id}}/{{$paint->prod_name}}" class="pic-holder">

                                    <img src="{{url('assets/images')}}/{{$paint->image}}" class="card-img-top" >
                                    @if( $paint->in_stock  == 0)

                                        <span class="sold-out">Sold out</span>

                                    @endif
                                </a>
                                <div class="pro-info-cir-3">
                                    <a href="{{url('detail')}}/{{$paint->cat_id}}/{{$paint->cat_name}}/{{$paint->product_id}}/{{$paint->prod_name}}" class="pro-info-cir-each pro-info-price" title="Rs.{{$paint->discount_price}}"><i class="fa fa-inr" aria-hidden="true"></i></a>
                                    <a href="{{url('assets/images')}}/{{$paint->image}}" data-fancybox data-caption="Agri waste 3" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    <a href="{{url('detail')}}/{{$paint->cat_id}}/{{$paint->cat_name}}/{{$paint->product_id}}/{{$paint->prod_name}}" class="pro-info-cir-each
                                    @if( $paint->in_stock  == 0)

                                            sold-out-off-price
                                    @endif
                                    " title="Shop now"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="card-block">
                                <a href="{{url('detail')}}/{{$paint->cat_id}}/{{$paint->cat_name}}/{{$paint->product_id}}/{{$paint->prod_name}}" class="content-link">
                                    <h4 class="card-title"><span style="font-weight: normal;">{{$paint->prod_name}}</span></h4>
                                    <p class="card-text">{{$paint->prod_description}}</p>
                                </a>
                                <div class="card-btn"><a href="{{url('detail')}}/{{$paint->cat_id}}/{{$paint->cat_name}}/{{$paint->product_id}}/{{$paint->prod_name}}" class="btn btn-primary"><span>Rs. {{$paint->price}}</span> &nbsp;Rs.{{$paint->discount_price}}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        @if ($index == $count)
                <br class="clear" />
            </div>

        </section>
            @php $count=$count + 4 @endphp
         {{--<div class="divi-border"><span></span><div class="theme-cir"></div></div>--}}
        @endif
    @endforeach
    <br class="clear" />
        </div>

        </section>
         <div class="divi-border"><span></span><div class="theme-cir"></div></div>

    <!-- handmade-gallery-end -->

    <!-- horizontal-divi-start -->

    <!-- horizontal-divi-end -->
@stop