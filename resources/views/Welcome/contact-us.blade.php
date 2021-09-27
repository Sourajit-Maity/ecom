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
                        <img src="{{$contactuspage->banner_image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="conatct-sec cmn-gap">
        <div class="container">
            <div class="contact-head">
                <h4>
                {{$contactuspage->content_heading}}
                </h4>
            </div>
            @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                    </div>
            @endif
            <div class="conatct-form">
               
                    <div class="row conatct-form-row">
                        <div class="col-md-6 conatct-form-col">
                            <div class="conatct-image">
                                <img src="{{$contactuspage->content_image}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 conatct-form-col">
                            <h3>Contact Us</h3>
                        
                        <form action="{{ route('welcome.contact-submit') }}" method="POST" >
                            @csrf 
                    
                           
                            <div class="form-input">
                                <input id="full_name" type="text" placeholder="Name *" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name">

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <input id="phone" type="text" placeholder="Phone Number *" class="form-control @error('phone') is-invalid @enderror only-numeric" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                               
                            <input id="email" type="email" placeholder="Email Address *" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <input id="address" type="text" placeholder="Address *" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <div class="row address-row">
                                    <div class="col-md-4 address-col">
                                        <div class="address-cont">
                                            <input id="city" type="text" placeholder="City *" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 address-col">
                                        <div class="address-cont">
                                            <input id="state" type="text" placeholder="State *" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state">

                                            @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 address-col">
                                        <div class="address-cont">
                                            <input id="zip" type="text" placeholder="Zip *" class="form-control @error('zip') is-invalid @enderror only-numeric" name="zip" value="{{ old('zip') }}" required autocomplete="zip">

                                            @error('zip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-input">
                                <input id="subject" type="text" placeholder="Subject *" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject">

                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-input">
                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" placeholder="Message *"></textarea>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <input type="submit" name="submit" class="submit"/>
                            </div>

                        </form>
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
<script>
    $(document).ready(function(){

        $(".only-numeric").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
               
          if (!(keyCode >= 48 && keyCode <= 57)) {
            $(".error").css("display", "inline");
            return false;
          }else{
            $(".error").css("display", "none");
          }
      });
    });
</script>