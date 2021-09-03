<x-layouts.welcome-layout>
    <section class="banner-section contact-banner" style="background: url('{{asset("welcome_assets/images/about-banner.jpg")}}')) no-repeat center center;">
        <div class="container banner-container">
            <div class="banner-row row">
                <div class="col-md-6 banner-col-left">
                    <div class="banner-cont">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-md-6 banner-col-right">
                    <div class="banner-image">
                        <img src="{{asset('welcome_assets/images/contact-banner-image.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="conatct-sec cmn-gap">
        <div class="container">
            <div class="contact-head">
                <h4>
                    Comments, questions, and concerns are always welcome. Drop us a line and one
                    of our friendly customer service representatives will get back to you.
                </h4>
            </div>

            <div class="conatct-form">
                <form>
                    <div class="row conatct-form-row">
                        <div class="col-md-6 conatct-form-col">
                            <div class="conatct-image">
                                <img src="{{asset('welcome_assets/images/conatct-image.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 conatct-form-col">
                            <h3>Contact Us</h3>
                            <div class="form-input">
                                <input type="text" placeholder="Name *">
                            </div>

                            <div class="form-input">
                                <input type="tel" placeholder="Phone Number *">
                            </div>

                            <div class="form-input">
                                <input type="email" placeholder="Email Address *">
                            </div>

                            <div class="form-input">
                                <input type="text" placeholder="Address *">
                            </div>

                            <div class="form-input">
                                <div class="row address-row">
                                    <div class="col-md-4 address-col">
                                        <div class="address-cont">
                                            <input type="text" placeholder="City *">
                                        </div>
                                    </div>
                                    <div class="col-md-4 address-col">
                                        <div class="address-cont">
                                            <input type="text" placeholder="State *">
                                        </div>
                                    </div>

                                    <div class="col-md-4 address-col">
                                        <div class="address-cont">
                                            <input type="text" placeholder="Zip *">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-input">
                                <input type="text" placeholder="Subject *">
                            </div>

                            <div class="form-input">
                                <textarea placeholder="Message *"></textarea>
                            </div>

                            <div class="form-input">
                                <input type="submit" value="Send">
                            </div>


                        </div>
                    </div>
                </form>
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