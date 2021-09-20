<x-layouts.welcome-layout>

    <section class="banner-section" style="background: url('{{asset("welcome_assets/images/banner-image.jpg")}}') no-repeat center center;">
        <div class="container banner-container">
            <div class="banner-row row">
                <div class="col-md-7 banner-col-left">
                    <div class="banner-cont">
                        <h1>
                            {{$homedetails->banner_heading}} <br>
                            
                        </h1>

                        <p> {{$homedetails->banner_sub_heading}}</p>                        

                        <a class="cmn-btn" href="{{route('welcome.design-tool')}}">GET STARTED NOW</a>
                    </div>
                </div>
                <div class="col-md-5 banner-col-right">
                    <div class="banner-image">
                        <img src="{{$homedetails->banner_image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-product cmn-gap">
        <div class="container">
            <div class="cmn-heading">
                <h2>Our Products</h2>
            </div>

            <div class="row product-row">
                <div class="col-lg-4 col-md-6 product-col">
                    <div class="product-card">
                        <div class="card-image">
                            <img src="{{asset('welcome_assets/images/product-01.png')}}" alt="">
                        </div>
                        <div class="product-cont">
                            <h4>Printed Badges</h4>
                            <a class="cmn-btn" href="{{route('welcome.design-tool')}}">Design now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-col">
                    <div class="product-card">
                        <div class="card-image">
                            <img src="{{asset('welcome_assets/images/product-02.png')}}" alt="">
                        </div>
                        <div class="product-cont">
                            <h4>Framed Badges</h4>
                            <a class="cmn-btn" href="{{route('welcome.design-tool')}}">Design now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-col">
                    <div class="product-card">
                        <div class="card-image">
                            <img src="{{asset('welcome_assets/images/product-03.png')}}" alt="">
                        </div>
                        <div class="product-cont">
                            <h4>Metallic Silver Badges</h4>
                            <a class="cmn-btn" href="{{route('welcome.design-tool')}}">Design now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-col">
                    <div class="product-card">
                        <div class="card-image">
                            <img src="{{asset('welcome_assets/images/product-04.png')}}" alt="">
                        </div>
                        <div class="product-cont">
                            <h4>Metallic Gold Badges</h4>
                            <a class="cmn-btn" href="{{route('welcome.design-tool')}}">Design now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-col">
                    <div class="product-card">
                        <div class="card-image">
                            <img src="{{asset('welcome_assets/images/product-05.png')}}" alt="">
                        </div>
                        <div class="product-cont">
                            <h4>Silver Badges</h4>
                            <a class="cmn-btn" href="{{route('welcome.design-tool')}}">Design now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 product-col">
                    <div class="product-card">
                        <div class="card-image">
                            <img src="{{asset('welcome_assets/images/product-06.png')}}" alt="">
                        </div>
                        <div class="product-cont">
                            <h4>Gold Badges</h4>
                            <a class="cmn-btn" href="{{route('welcome.design-tool')}}">Design now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="who-we-are-sec cmn-gap" style="background: url({{asset('welcome_assets/images/who-we-are.jpg')}}) no-repeat right center;">
        <div class="container">
            <div class="who-we-are-cont">
                <div class="cmn-heading">
                    <h2>{{$homedetails->content1_heading}}</h2>
                </div>
                <h3>{{$homedetails->content1_subheading}}</h3>
                <p>{{$homedetails->content1_text}}</p>
                <a href="#url">Read More</a>
            </div>
        </div>
    </section>

    <section class="company-benefits cmn-gap">
        <div class="container">
            <div class="cmn-heading">
                <h2>{{$homedetails->content2_heading}}</h2>
            </div>
            <p>{{$homedetails->content2_text}}</p>

            <div class="row benefits-row">
                <div class="col-md-5 benefits-left">
                    <img src="{{$homedetails->content2_image}}" alt="">
                </div>
                <div class="col-md-7 benefits-right">
                    <div class="benefits-cont">
                        <ul>
                            <li>
                                <div class="benefit-icon">
                                    <img src="{{$homedetails->content2_option_image1}}" alt="">
                                </div>
                                <div class="benefit-cont">
                                    <h4>{{$homedetails->content2_option_heading1}}</h4>
                                    <p> {{$homedetails->content2_option_text1}}</p>
                                   
                                </div>
                            </li>

                            <li>
                                <div class="benefit-icon">
                                    <img src="{{$homedetails->content2_option_image2}}" alt="">
                                </div>
                                <div class="benefit-cont">
                                    <h4>{{$homedetails->content2_option_heading2}}</h4>
                                    <p> {{$homedetails->content2_option_text2}} </p>
                                </div>
                            </li>

                            <li>
                                <div class="benefit-icon">
                                    <img src="{{$homedetails->content2_option_image3}}" alt="">
                                </div>
                                <div class="benefit-cont">
                                    <h4>{{$homedetails->content2_option_heading3}}</h4>
                                    <p>{{$homedetails->content2_option_text3}}</p>
                                </div>
                            </li>
                        </ul>
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