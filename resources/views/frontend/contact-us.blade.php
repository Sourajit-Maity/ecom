@extends('templates.frontend')

@section('content')
    <!-- banner-start -->
    <section class="inner-banner" style="background-image: url(assets/images/{{$contact->banner_image}});">

    </section>
    <!-- banner-end -->

    <!-- about-start -->
    <section class="mbr-section article" id="msg-box3-3" style="background-color: rgb(255, 255, 255); padding-top:40px; padding-bottom:40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">{{$contact->header}}</h3>
                    <small class="mbr-section-subtitle">{{$contact->description}}</small>
                </div>
            </div>
        </div>
    </section>
    <!-- about-end -->

    <!-- horizontal-divi-start -->
    <div class="divi-border"><span></span><div class="theme-cir"></div></div>
    <!-- horizontal-divi-end -->

    <!-- Contact-text-start -->
    <section class="mbr-section article" id="msg-box3-2" style="background-color: rgb(255, 255, 255); padding-top:0; padding-bottom:0;">
        <div class="container">
            <div class="row rate-para">
                <div class="col-md-3 col-xs-12">
                    <div class="lead ab-sec-txt contact-form-lft">
                        <p class="contact-info-text"><strog class="mbr-section-subtitle">Address :</strog><br />{{$footer->address}}</p>
                        <p class="contact-info-text"><strog class="mbr-section-subtitle">Email :</strog><br /><a href="mailto:{{$footer->email}}" target="_blank">{{$footer->email}}</a></p>
                        <p class="contact-info-text"><strog class="mbr-section-subtitle">Phone :</strog><br />+{{$footer->phone}}</p>
                        <p class="contact-info-text"><strog class="mbr-section-subtitle">Fax :</strog><br />{{$footer->fax}}</p>
                    </div>
                </div>
                @if (Session::has('message'))
                    <div class="note note-info success-message-box">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif
                <div class="col-md-5 col-xs-12 feedback-form">
                    <small class="mbr-section-subtitle">Say few words</small>
                    <div class="lead">
                        <form action="{{url('feedback-submit')}}" method="post" data-form-title="MESSAGE" id="feedback">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="name"  placeholder="Name" />
                                <p class="help-block"></p>
                                @if($errors->has('name'))
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="designation" placeholder="Designation" />
                                <p class="help-block"></p>
                                @if($errors->has('designation'))
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('designation') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm input-inverse" name="event_name"  placeholder="Event Name" />
                                <p class="help-block"></p>
                                @if($errors->has('event_name'))
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('event_name') }}
                                    </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-sm input-inverse" name="feedback" data-form-field="Feedback" rows="5" placeholder="Feedback" ></textarea>
                                <p class="help-block"></p>
                                @if($errors->has('feedback'))
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('feedback') }}
                                    </p>
                                @endif
                            </div><br class="clear" />
                            <div class="col-captcha">
                                <div class="g-recaptcha" data-sitekey="6LcTfzAUAAAAAB6uPOlw6a8QRzdzYrhLXMs16Lf9"></div>
                            </div>
                            <div class="col-captcha-btn"><button type="submit" class="btn btn-info pull-right">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 mob-hidden">
                    <div class="lead contact-pic-col">
                        <div class="pic-holder"><img src="{{url('assets/images')}}/{{$contact->des_image}}" /></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact-text-end -->

    <!-- Map-start -->
    <section class="mbr-section mbr-section-nopadding" id="index-map1-0">
        <div class="mbr-map">
            <iframe src="{{$footer->map}}" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!-- Map-end -->

    <!-- subscribe-start -->
    <section class="mbr-section" id="form2-8" style="background-color: rgb(35, 35, 35); padding-top:40px; padding-bottom:40px;">
        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">STAY UPDATED</h3>
                        <small class="mbr-section-subtitle">Subscribe to our Newsletter</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-section mbr-section-nopadding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                        <div data-form-alert="true"><div hidden="" data-form-alert-success="true">Thanks for filling out form!</div></div>
                        <form class="mbr-form" action="{{url('sub-email')}}" method="post" data-form-title="SUBSCRIBE FORM">
                        {{ csrf_field() }}
                            <div class="mbr-subscribe mbr-subscribe-dark input-group">
                                <input type="email" class="form-control" name="subscribe_email" data-form-field="Email" placeholder="Enter Your Email Address..." >
                                <p class="help-block"></p>
                                @if($errors->has('subscribe_email'))
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('subscribe_email') }}
                                    </p>
                                @endif
                                <span class="input-group-btn"><button type="submit" class="btn btn-white">SUBSCRIBE</button></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-end -->
    <script>
        $(function()
            {
                $('#feedback').submit(function(event)
                    {
                        var verify = grecaptcha.getResponse();
                        if(verify.length === 0){
                            event.preventDefault();
                        }
                    }
                );
            }
        );

    </script>
@stop