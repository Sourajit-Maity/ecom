<x-layouts.welcome-layout>
    <section class="Product-sec">
        <div class="container">
            <div class="row product-row">
                <div class="col-md-3 product-left">
                    <div class="product-list">
                        <ul>
                            <!-- <li class="active"><a href="#url">Plastic Badges</a></li> -->
                            @foreach($products as $product)
                                <li><a href="#url">{{$product->product_name}}</a></li> 
                                <a href="{{route('welcome.product-details',[$product->product_name])}}">View Details</a>
                            @endforeach                        
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 product-right">
                    <div class="product-cont">
                        <div class="product-card">
                            <div class="row product-row">
                                <div class="col-md-5 product-col-left">
                                    <img src="{{asset('welcome_assets/images/product-01.png')}}" alt="">
                                    <a href="{{route('welcome.product-details',[$product->product_name])}}">View Details</a>
                                </div>
                                <div class="col-md-7 product-col-right">
                                    <h4>
                                        Plastic Name Tags & Custom Name <br>
                                        Badges include:
                                    </h4>

                                    <div class="product-wrap">
                                        <div class="product-wrap-col">
                                            <ul>
                                                <li>
                                                    Full custom color printing
                                                    of logos and text
                                                </li>
                                                <li>
                                                    Option of pin or magnetic fastener
                                                </li>
                                                <li>Rapid production times</li>
                                                <li>No Design Fees</li>
                                                <li>No Minimums</li>
                                                <li>Quantity based prices</li>
                                            </ul>
                                        </div>
                                        <div class="product-wrap-col">
                                            <ul>
                                                <li>
                                                    Wide range of background color and font options
                                                </li>
                                                <li>
                                                    Scratch and fade-proof epoxy coating
                                                </li>
                                                <li>No Setup Fees</li>
                                                <li>Free Doming</li>
                                                <li>No Hidden Fees</li>
                                            </ul>
                                        </div> 
                                    </div>

                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="row product-row">
                                <div class="col-md-5 product-col-left">
                                    <img src="{{asset('welcome_assets/images/product-02.png')}}" alt="">
                                </div>
                                <div class="col-md-7 product-col-right">
                                    <h4>
                                        Plastic Name Tags & Custom Name <br>
                                        Badges include:
                                    </h4>

                                    <div class="product-wrap">
                                        <div class="product-wrap-col">
                                            <ul>
                                                <li>
                                                    Full custom color printing
                                                    of logos and text
                                                </li>
                                                <li>
                                                    Option of pin or magnetic fastener
                                                </li>
                                                <li>Rapid production times</li>
                                                <li>No Design Fees</li>
                                                <li>No Minimums</li>
                                                <li>Quantity based prices</li>
                                            </ul>
                                        </div>
                                        <div class="product-wrap-col">
                                            <ul>
                                                <li>
                                                    Wide range of background color and font options
                                                </li>
                                                <li>
                                                    Scratch and fade-proof epoxy coating
                                                </li>
                                                <li>No Setup Fees</li>
                                                <li>Free Doming</li>
                                                <li>No Hidden Fees</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="row product-row">
                                <div class="col-md-5 product-col-left">
                                    <img src="{{asset('welcome_assets/images/product-03.png')}}" alt="">
                                </div>
                                <div class="col-md-7 product-col-right">
                                    <h4>
                                        Plastic Name Tags & Custom Name <br>
                                        Badges include:
                                    </h4>

                                    <div class="product-wrap">
                                        <div class="product-wrap-col">
                                            <ul>
                                                <li>
                                                    Full custom color printing
                                                    of logos and text
                                                </li>
                                                <li>
                                                    Option of pin or magnetic fastener
                                                </li>
                                                <li>Rapid production times</li>
                                                <li>No Design Fees</li>
                                                <li>No Minimums</li>
                                                <li>Quantity based prices</li>
                                            </ul>
                                        </div>
                                        <div class="product-wrap-col">
                                            <ul>
                                                <li>
                                                    Wide range of background color and font options
                                                </li>
                                                <li>
                                                    Scratch and fade-proof epoxy coating
                                                </li>
                                                <li>No Setup Fees</li>
                                                <li>Free Doming</li>
                                                <li>No Hidden Fees</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>

                        <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#url"><img src="{{asset('welcome_assets/images/arrow-right.svg')}}" alt=""></a></li>
                                <li class="active"><a href="#url"><span>1</span></a></li>
                                <li><a href="#url"><span>2</span></a></li>
                                <li><a href="#url"><span>3</span></a></li>
                                <li><a href="#url"><span>4</span></a></li>
                                <li><a href="#url"><span>...</span></a></li>
                                <li class="next"><a href="#url"><img src="{{asset('welcome_assets/images/arrow-right.svg')}}" alt=""></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial cmn-gap">
        <div class="container">
            <div class="cmn-heading">
                <h2>They Said</h2>
            </div>

            <div class="testimonial-slider">
                @foreach($reviews as $review)
                    <div class="testimonial-card">
                    
                        <div class="iamge-sec">
                            <img src="{{asset('welcome_assets/images/testimonial01.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-cont">
                            <h4>{{$review->user->first_name}} {{$review->user->last_name}}</h4>
                            <p>{{ Str::limit($review->review_description , 100) }}
                            </p>
                            <a href="#url">Read More</a>
                        </div>
                    </div>
                @endforeach
 
            </div>
        </div>
    </section>
</x-layouts.welcome-layout>