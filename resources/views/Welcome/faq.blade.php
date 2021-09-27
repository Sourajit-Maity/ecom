<x-layouts.welcome-layout>
    <section class="banner-section faq-banner" style="background: url('{{asset("welcome_assets/images/about-banner.jpg")}}') no-repeat center center;">
        <div class="container banner-container">
            <div class="banner-row row">
                <div class="col-md-6 banner-col-left">
                    <div class="banner-cont">
                        <h1>{{$faqpage->content_heading}}</h1>
                    </div>
                </div>
                <div class="col-md-6 banner-col-right">
                    <div class="banner-image">
                        <img src="{{$faqpage->banner_image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-sec cmn-gap">
        <div class="container">
        @foreach($faqs as $faq)
            <div class="faq-content">
                <div class="accordion" id="accordionExample">
               
                    <div class="accordion-item">
                    
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{$faq->question}}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{$faq->answer}}</p>
                            </div>
                        </div>
                    
                    </div>
                

                </div>
            </div>
        @endforeach
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