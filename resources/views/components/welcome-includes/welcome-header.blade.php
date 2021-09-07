<header class="main-head {{ Request::is('design-tool') ? 'product-head' : '' }}">

    <div class="top-head">
        <div class="container">
            <div class="top-head-wrap">
                <div class="login">
                    <ul>
                        <li><a href="{{route('welcome.login')}}">Login</a></li>
                        <li><a href="{{route('welcome.signup')}}">Signup</a></li>
                    </ul>
                </div>

                <div class="logo">
                    <a href="{{route('welcome.home')}}"><img src="{{asset('welcome_assets/images/logo.png')}}" alt=""></a>
                </div>

                <div class="cart-sec">
                    <a href="{{route('welcome.shopping-cart')}}">cart items 2</a>
                </div>

            </div>
        </div>
    </div>

    <div class="bottom-head">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler navbar-toggler-main" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="stick"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <button class="navbar-toggler navbar-toggler-main" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        <span class="stick"></span>
                    </button>
                    <ul class="navbar-nav">
                        <li class="{{ Request::is('/') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.home')}}">Home</a></li>
                        <li class="{{ Request::is('about-us') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.about-us')}}">About Us</a></li>
                        <li class="{{ Request::is('products') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.products')}}">Products</a></li>
                        <li class="{{ Request::is('faq') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.faq')}}">FAQs</a></li>
                        <li class="{{ Request::is('contact-us') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <button class="navbar-toggler" id="navoverlay" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
    </div>
</header>