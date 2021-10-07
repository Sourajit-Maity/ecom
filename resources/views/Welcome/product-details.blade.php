<x-layouts.welcome-layout>
    <section class="Product-sec">
        <div class="container">
            <div class="row Product-row">
                <div class="col-md-5 product-left">
                    <div class="product-slider1">
                        <div>
                            <img src="{{asset('welcome_assets/images/product-01.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('welcome_assets/images/product-02.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('welcome_assets/images/product-03.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('welcome_assets/images/product-01.png')}}" alt="">
                        </div>
                    </div>

                    <div class="product-slider2">
                        <div>
                            <div class="small-image">
                                <img src="{{asset('welcome_assets/images/small-imaeg.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="small-image">
                                <img src="{{asset('welcome_assets/images/small-imaeg02.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="small-image">
                                <img src="{{asset('welcome_assets/images/small-imaeg03.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="small-image">
                                <img src="{{asset('welcome_assets/images/small-imaeg04.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 product-right">
                    <div class="product-dertails-cont">

                        <h3>{{$products->product_name}}</h3>
                        <p>
                        {{$products->product_description}}
                        </p>

                        <div class="price">
                            <h3>Price: <span>$9.99</span></h3>
                        </div>

                        <a class="cmn-btn" href="{{route('welcome.design-tool')}}">Design Now</a>

                    </div>
                </div>
            </div>

            <div class="table-sec">
                <table>
                    <tr>
                        <th colspan="2">Quantity Price</th>
                        <th colspan="7">*These prices will update automatically based on the design you choose above!</th>
                    </tr>
                    <tr>
                        <td>QTY:</td>
                        <td>1-10</td>
                        <td>11-20</td>
                        <td>21-30</td>
                        <td>31-50</td>
                        <td>51-100</td>
                        <td>101-250</td>
                        <td>251-1000</td>
                        <td>1000+</td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td>$9.99</td>
                        <td>$9.59</td>
                        <td>$9.39</td>
                        <td>$9.24</td>
                        <td>$8.89</td>
                        <td>$8.49</td>
                        <td>$8.24</td>
                        <td>$7.49</td>
                    </tr>
                </table>
            </div>

            <div class="you-may-like">
                <div class="cmn-heading">
                    <h2>You May Also Like</h2>
                </div>
                
                <div class="row you-may-like-row">
                @foreach($otherproducts as $otherproduct)
                    <div class="col-md-3 you-may-like-col">
                        <div class="rel-product-card">
                            <div class="product-image">
                               <img src="{{$otherproduct->product_photo_path}}" alt="">
                               <!-- <img src="{{asset('welcome_assets/images/product-03.png')}}" alt=""> -->

                            </div>
                            <div class="content">
                            
                                <h4>{{$otherproduct->product_name}}</h4>
                                <!-- <a class="cmn-btn" href="{{route('welcome.design-tool')}}">View Details</a> -->
                                <a class="cmn-btn" href="{{route('welcome.product-details',[$otherproduct->product_name])}}">View Details</a>
                            </div>
                        </div>
                    </div>
                   
                   @endforeach
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