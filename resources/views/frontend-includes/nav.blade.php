@inject('request', 'Illuminate\Http\Request')
<!-- header-start -->
<section id="ext_menu-0">
    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">
            <div class="mbr-table">
                <div class="col-sm-4 col-xs-12 mob-full-width">
                    <div class="navbar-brand">
                        <a href="{{ url('/')}}" class="navbar-logo">
                        <img src="{{url('assets/images')}}/logo.png" alt="Prameya" title="Prameya">
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12 mob-full-width">
                    <div class="row">
                        <ul class="social-link">
                            <li>
                                <a href="mailto:test@gmail.com" target="_blank" class="phone-class mail-class"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;test@gmail.com</a>
                            </li>
                            <li>
                                <span class="phone-class"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; 123456789</span>
                            </li>
                        </ul>
                    </div>
                    {{--<a style="float: right" href="{{route('shoppingCart')}}">--}}
                        {{--<i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping Cart--}}
                        {{--<span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>--}}
                    {{--</a>--}}
                    <div class="row">
                        <ul class="social-link social-link2">
                                @if ($header->fb_link)
                                    <li>
                                        <a href="{{$header->fb_link}}" class="social-link-icon"><img src="{{url('assets/images/facebook.png')}}" alt="Prameya facebook" title="Prameya facebook" target="_blank"/></a>
                                    </li>
                                 @endif
                                @if ($header->insta_link)
                                    <li>
                                        <a href="{{$header->insta_link}}" class="social-link-icon"><img src="{{url('assets/images/instagram.png')}}" alt="Prameya instagram" title="Prameya instagram" target="_blank"/></a>
                                    </li>
                                @endif
                                

                            <li>
                                <a href="#" class="cart-cir" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    @if(Session::has('cart'))
                                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12" style="padding-right:0;">
                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>
                    <ul class="nav-dropdown collapse nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <!-- <li class="nav-item"><a class="nav-link link " href="{{ url('/')}}">home</a></li> -->
                        <li class="{{ Request::is('/') ? 'current-menu-item' : '' }} nav-item"><a class="nav-link link" href="{{route('welcome.home')}}">Home</a></li>

                        <li class="nav-item"><a class="nav-link link " href="{{ url('about')}}">about</a></li>
                        @foreach($menu as $value)
                        <li class="nav-item"><a id="val_{{$value->id}}" class="nav-link link {{ $request->segment(1) == 'all-products' && $request->segment(2) == $value->category_url ? 'active' : '' }} " href="{{ url('all-products')}}/{{$value->category_url}}">{{$value->category_name}}</a></li>
                        @endforeach
                        <li class="nav-item"><a class="nav-link link " href="{{ url('contact-us')}}">contact us</a></li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready( function ()
        {
            var pathname = window.location.pathname;
            var lastChar = pathname.substr(pathname.length - 1);

                $("#val_"+lastChar).addClass("active");
        });

    </script>

</section>
<!-- header-end -->