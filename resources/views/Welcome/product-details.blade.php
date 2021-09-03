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
                        <h3>FC-100 Full Color Digital Badges on Plastic</h3>
                        <p>
                            Badge and Sign Store's advanced computer technology can place any computer graphics
                            file on a rugged, plastic badge. No matter how complex and colorful your company logo
                            and artwork may be, our thermal transfer printing equipment can turn it into a badge
                            or card. There are no limits on the number of colors or the type styles you choose.
                            And to make them even more flexible, these badges can be written on with a Sharpie®
                            and then wiped clean with alcohol.
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
                    <div class="col-md-3 you-may-like-col">
                        <div class="rel-product-card">
                            <div class="product-image">
                                <img src="{{asset('welcome_assets/images/lated-product01.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Plastic Badges</h4>
                                <a class="cmn-btn" href="{{route('welcome.design-tool')}}">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 you-may-like-col">
                        <div class="rel-product-card">
                            <div class="product-image">
                                <img src="{{asset('welcome_assets/images/lated-product02.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Oval Badges</h4>
                                <a class="cmn-btn" href="{{route('welcome.design-tool')}}">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 you-may-like-col">
                        <div class="rel-product-card">
                            <div class="product-image">
                                <img src="{{asset('welcome_assets/images/lated-product03.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Aluminum Badges</h4>
                                <a class="cmn-btn" href="{{route('welcome.design-tool')}}">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 you-may-like-col">
                        <div class="rel-product-card">
                            <div class="product-image">
                                <img src="{{asset('welcome_assets/images/lated-product04.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Framed Badges</h4>
                                <a class="cmn-btn" href="{{route('welcome.design-tool')}}">View Details</a>
                            </div>
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