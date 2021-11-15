<!-- footer-start -->
<section class="mbr-footer mbr-section mbr-section-md-padding" id="contacts5-6" style="background-color: rgb(255, 255, 255); padding-top:40px; padding-bottom:40px;">
    <div class="row">
        <div class="mbr-company col-xs-12 col-md-6 col-lg-3">
            <div class="mbr-company card">
                <div><a href="prameya"><img src="{{url('assets/images')}}/{{$header->logo}}" class="card-img-top" alt="prameya" title="prameya"></a></div>
                <div class="card-block">
                    <p class="card-text">{{$footer->about}}.</p>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <span class="list-group-icon"><span class="etl-icon icon-phone mbr-iconfont-company-contacts5"></span></span>
                        <span class="list-group-text">{{$footer->phone}}or {{$footer->fax}}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="list-group-icon"><span class="etl-icon icon-map-pin mbr-iconfont-company-contacts5"></span></span>
                        <span class="list-group-text">{{$footer->address}}</span>
                    </li>
                    <li class="list-group-item active">
                        <span class="list-group-icon"><span class="etl-icon icon-envelope mbr-iconfont-company-contacts5"></span></span>
                        <span class="list-group-text"><a href="mailto:{{$footer->email}}">{{$footer->email}}</a></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mbr-footer-content col-xs-12 col-md-6 col-lg-3">
            <h4>Categories</h4>
            <ul>
                @foreach($menu as $value)
                <li><a href="{{ url('all-products')}}/{{$value->cat_url}}" class="text-primary">{{$value->cat_name}}</a></li>
                    @endforeach
            </ul>
        </div>
        <div class="mbr-footer-content col-xs-12 col-md-6 col-lg-3">
            <p><strong>Contacts</strong><br>Email:{{$footer->email}}<br>Phone: {{$footer->phone}}<br>Fax: {{$footer->fax}}<br><br><br><strong>Address</strong><br>{{$footer->address}}</p>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3" data-form-type="formoid">
            <div data-form-alert="true">
                <div hidden="" data-form-alert-success="true">Thanks for filling out form!</div>
            </div>
            <form action="{{url('email-submit')}}" method="post" data-form-title="MESSAGE">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="form-control-label" for="contacts5-6-email">Email<span class="form-asterisk">*</span></label>
                    <input type="text" class="form-control input-sm input-inverse" name="email"  data-form-field="Email" id="contacts5-6-email">
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block" style="color: red">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="contacts5-6-message">Message</label>
                    <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="5" id="contacts5-6-message"></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('message'))
                        <p class="help-block" style="color: red">
                            {{ $errors->first('message') }}
                        </p>
                    @endif
                </div>

                <div><button type="submit" class="btn btn-info">Contact us</button></div>
            </form>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-7" style="background-color: rgb(235, 235, 235); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    <div class="container">
        <p class="text-xs-center">Copyright (&copy;) {{$footer->copy_right}} Prameya.</p>
    </div>
</footer>
<!-- footer-end -->

<!-- js-start -->
<script src="{{url('assets/web/assets/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/tether/tether.min.js')}}"></script>
<script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/smooth-scroll/SmoothScroll.js')}}"></script>
<script src="{{url('assets/viewportChecker/jquery.viewportchecker.js')}}"></script>
<script src="{{url('assets/dropdown/js/script.min.js')}}"></script>
<script src="{{url('assets/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
<script src="{{url('assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js')}}"></script>
<script src="{{url('assets/theme/js/script.js')}}"></script>
{{--<script src="{{url('assets/formoid/formoid.min.js')}}"></script>--}}

<script src="{{url('assets/modified/js/jquery.fancybox.min.js')}}"></script>



<!-- Testimonial-slider -->
<!-- bxSlider Javascript file -->
<script src="{{url('assets/modified/js/jquery.bxslider.min.js')}}"></script>
<!-- bxSlider CSS file -->
<link href="{{url('assets/modified/css/jquery.bxslider.css')}}" rel="stylesheet" />
<script>
    $(document).ready(function(){

        $('.bxslider').bxSlider({
            mode:'vertical',
            useCSS: false,
            auto: true,
            speed: 500,
            pager: true
        });

        // Home-slider
        $('#ban-sld').bxSlider({
            auto: true,
            pager: true,
            mode:'horizontal'
        });
    });
</script>
<!-- js-end -->

<input name="animation" type="hidden">
<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>