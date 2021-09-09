<x-layouts.welcome-layout>

    <section class="banner-section about-banner" style="background: url('{{asset("welcome_assets/images/about-banner.jpg")}}')) no-repeat center center;">
        <div class="container banner-container">
            <div class="banner-row row">
                <div class="col-md-6 banner-col-left">
                    <div class="banner-cont">
                        <h1>About us</h1>
                    </div>
                </div>
                <div class="col-md-6 banner-col-right">
                    <div class="banner-image">
                        <img src="{{asset('welcome_assets/images/about-banner-2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="passion-sec cmn-gap">
        <div class="container">
            <div class="row passion-row">
                <div class="col-md-6 passion-left">
                    <div class="content">
                        <h2>Badges Ar e Our Passion</h2>
                        <p>
                            Badges may be small, but they are big to us. With their years of
                            experience, our entire team treats each and every badge we make as
                            if it were our own. We take the utmost pride in making the best
                            quality badges at a great price. Badges. Your Brand. Our Passion.
                        </p>

                        <div class="image-sec">
                            <img src="{{asset('welcome_assets/images/passion-image2.png')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-md-6 passion-right">
                    <div class="passion-image">
                        <img src="{{asset('welcome_assets/images/passion-image.png')}}" alt="">
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