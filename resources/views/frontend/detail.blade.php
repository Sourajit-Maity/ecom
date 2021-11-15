@extends('templates.frontend')
<div class="inner-page" id="saree-detail">
@section('content')
    <!-- Saree-detail-start -->

        <section class="mbr-section article" id="msg-box3-2" style="background-color: rgb(255, 255, 255);">

            <div class="container">

                <div class="row">
                    <div class="col-md-6 text-xs-center">
                        <div class="lead">
                            @if(Session::has('message'))
                                <div class="alert alert-info">
                                    {{Session::get('message')}}
                                </div>
                            @endif



                            <div class="pic-holder">
                                @foreach($detail as $show)
                                    <img id="cover_image" src="{{url('assets/images')}}/{{$show->image}}" alt="" />
                                    <div class="pro-info-cir-3 pro-info-cir-zoom">
                                        <a id="cover_image_link" href="{{url('assets/images')}}/{{$show->image}}" data-fancybox data-caption="Saree 3" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="product-detail-thumb-row">
                                <ul>
                                    @foreach($detailImage as $value)
                                        <li>
                                            <a href="javascript:"><img src="{{url('assets/images')}}/{{$value->image}}"  class="sub_image" alt="" /></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @foreach($detail as $value)
                            @if($value->youtube_link != null)
                                <div class="pic-holder video-box">

                                    <iframe width="600" height="300" src="https://www.youtube.com/embed/{{$value->youtube_link}}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            @else
                            @endif
                        @endforeach

                        @foreach($detail as $show)
                            <div class="row" style="margin-left:0; margin-right:0,">
                                <div class="lead ab-sec-txt pro-detail">
                                    <p class="mbr-section-subtitle pro-detail-title">Lorem ipsum dolor</p>
                                    <p>
                                        <span>Color :</span> {{$show->colour}}<br />
                                        <span>Size :</span>{{$show->size}}<br />
                                        <span>Material :</span> {{$show->matterial}}
                                    </p>
                                    @if($show->story != null)
                                        <small class="mbr-section-subtitle">Story :</small>
                                        <p>{{$show->story}}</p>
                                    @else
                                    @endif
                                </div>


                                <div class="detail-btn-row">
                                    <div class="price-class"><span>Rs.{{$show->price}}</span> &nbsp;Rs.{{$show->discount_price}}</div>

                                    @if( $show->in_stock  == 1)

                                    <a href="{{route('add-to-cart',['id' => $show->id])}}" id="add-cart-id" class="btn btn-success">Add to Cart</a>

{{--                                    <a href="{{route('add-to-cart',['id' => $show->id])}}" id="add-cart-id" class="btn btn-red">Buy now</a>--}}
                                    @endif
<br/>

                                </div>
                            </div>

                        @endforeach
                        <div class="row pay-detail-box">
                            <small class="mbr-section-subtitle suggest-text">Payment details :</small>
                            <div class="col-md-6 col-xs-12 col">
                                <img src="{{url('assets/images')}}/{{$payment->logo}}" alt="" /><br /><strong>+{{$payment->paytm_no}}</strong>
                            </div>
                            <div class="col-md-6 col-xs-12 col">
                                <strong>Bank details :</strong>
                                <p><span>Account no. :</span>{{$payment->account_no}}<br /><span>IFSC code :</span> {{$payment->ifsc_code}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Saree-detail-end -->

        <!-- horizontal-divi-start -->
        <div class="divi-border"><span></span><div class="theme-cir"></div></div>
        <!-- horizontal-divi-end -->

        <!-- Saree-related-start -->
        <section class="mbr-section article" id="msg-box3-2" style="background-color: rgb(255, 255, 255); padding-top:0; padding-bottom:0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="lead">
                            <small class="mbr-section-subtitle suggest-text">suggested items :</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-4" style="background-color: rgb(255, 255, 255); padding:0;">

            <div class="mbr-cards-row row">

                <div class="container">
                    @foreach($suggested as $suggest)
                        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0; padding-bottom:10px;">
                            <div class="">
                                <div class="card cart-block">

                                    <div class="card-img">
                                        <a href="{{url('detail')}}/{{$suggest->cat_id}}/{{$suggest->cat_name}}/{{$suggest->prod_id}}/{{$suggest->prod_name}}" class="pic-holder">
                                        <img src="{{url('assets/images')}}/{{$suggest->image}}" class="card-img-top" >
                                        </a>
                                        <div class="pro-info-cir-3">
                                            <a href="{{url('detail')}}/{{$suggest->cat_id}}/{{$suggest->cat_name}}/{{$suggest->prod_id}}/{{$suggest->prod_name}}" class="pro-info-cir-each pro-info-price" title="Rs.{{$suggest->price}}"><i class="fa fa-inr" aria-hidden="true"></i></a>
                                            <a href="{{url('assets/images')}}/{{$suggest->image}}" data-fancybox data-caption="Scarf 3" class="pro-info-cir-each pro-info-zoom" title="Zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="{{url('detail')}}/{{$suggest->cat_id}}/{{$suggest->cat_name}}/{{$suggest->prod_id}}/{{$suggest->prod_name}}" class="pro-info-cir-each " title="Shop now"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    @endforeach

                </div>
            </div>

        </section>
        <!-- Saree-related-end -->


        <!-- horizontal-divi-start -->
        <div class="divi-border"><span></span><div class="theme-cir"></div></div>
        <!-- horizontal-divi-end -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready( function ()
    {
//        var pathname = window.location.pathname;
//        var lastChar = pathname.substr(pathname.length - 1);
//        console.log(pathname);
//        console.log(lastChar);

        $('.sub_image').on('click',function(e)
        {
            var pic_src=this.src;
            $("#cover_image").removeAttr("src");
            $('#cover_image').attr("src",pic_src);
            $("#cover_image_link").removeAttr("href");
            $("#cover_image_link").attr("href", pic_src);

        });

        $('#add-cart-id').on('click',function(e)
        {
            var pathname = window.location.pathname;


            $('#sub-cart-id').text(pathname);
//            var result = pathname.split('/');
//            console.log(pathname);
//            console.log(result[2]);
//            console.log(result[3]);
        });
    });

</script>
@stop