<x-layouts.welcome-layout>

    <section class="banner-section" style="background: url('{{asset("welcome_assets/images/banner-image.jpg")}}') no-repeat center center;">
        <div class="container banner-container">
            <div class="banner-row row">
                <div class="col-md-7 banner-col-left">
                    <div class="banner-cont">
                        <h1>
                            Lorem ipsum dolor amet <br>
                            <span>custom badges </span>
                        </h1>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Phasellus ut
                            leo, tortor vehicula ante lectus. Diam integer <br> nulla lectus cursus
                            ultrices in.
                        </p>

                        <a class="cmn-btn" href="{{route('welcome.design-tool')}}">GET STARTED NOW</a>
                    </div>
                </div>
                <div class="col-md-5 banner-col-right">
                    <div class="banner-image">
                        <img src="{{asset('welcome_assets/images/banner-image2.png')}}" alt="">
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
                    <h2>Who We Are</h2>
                </div>
                <h3>BADGES ARE OUR PASSION</h3>
                <p>
                    Badges may be small, but they are big to us. With their years of experience,
                    our entire team treats each and every badge we make as if it were our own.
                    We take the utmost pridein making the best quality badges at a great price.
                    Badges. Your Brand. Our Passion.
                </p>
                <a href="#url">Read More</a>
            </div>
        </div>
    </section>

    <section class="company-benefits cmn-gap">
        <div class="container">
            <div class="cmn-heading">
                <h2>Company Benefits</h2>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Habitant massa imperdiet purus amet, at nullam arcu <br> dignissim netus.
                Purus in in in dignissim cum fermentum est. Mattis vehicula morbi odio viverra.
            </p>

            <div class="row benefits-row">
                <div class="col-md-5 benefits-left">
                    <img src="{{asset('welcome_assets/images/company-benefits.png')}}" alt="">
                </div>
                <div class="col-md-7 benefits-right">
                    <div class="benefits-cont">
                        <ul>
                            <li>
                                <div class="benefit-icon">
                                    <img src="{{asset('welcome_assets/images/benefits-icon01.svg')}}" alt="">
                                </div>
                                <div class="benefit-cont">
                                    <h4>Setup Charges</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="benefit-icon">
                                    <img src="{{asset('welcome_assets/images/benefits-icon02.svg')}}" alt="">
                                </div>
                                <div class="benefit-cont">
                                    <h4>Minimums</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="benefit-icon">
                                    <img src="{{asset('welcome_assets/images/benefits-icon03.svg')}}" alt="">
                                </div>
                                <div class="benefit-cont">
                                    <h4>Shipping</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.
                                    </p>
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
                <div class="testimonial-card">
                    <div class="iamge-sec">
                        <img src="{{asset('welcome_assets/images/testimonial01.jpg')}}" alt="">
                    </div>
                    <div class="testimonial-cont">
                        <h4>Michael</h4>
                        <p>I was last-minute and they took on the job and moved quickly.
                            They did a great job printing the badges for my event.
                            I would highly recommend them.
                        </p>
                        <a href="#url">Read More</a>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="iamge-sec">
                        <img src="{{asset('welcome_assets/images/testimonial02.jpg')}}" alt="">
                    </div>
                    <div class="testimonial-cont">
                        <h4>Kailey</h4>
                        <p>
                            QUICK RESPONSES!!! They turned an <br> order in less than 24 hours for me.
                        </p>
                        <a href="#url">Read More</a>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="iamge-sec">
                        <img src="{{asset('welcome_assets/images/testimonial01.jpg')}}" alt="">
                    </div>
                    <div class="testimonial-cont">
                        <h4>Michael</h4>
                        <p>
                            I was last-minute and they took on the job and moved quickly.
                            They did a great job printing the badges for my event.
                            I would highly recommend them.
                        </p>
                        <a href="#url">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.welcome-layout>