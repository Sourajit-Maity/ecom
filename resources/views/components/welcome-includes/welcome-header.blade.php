<header class="main-head {{ Request::is('design-tool') ? 'product-head' : '' }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="top-head">
        <div class="container">
            <div class="top-head-wrap">
                <div class="login">
                    <ul>
                    @guest
                        <li><a href="{{route('welcome.login')}}">Login</a></li>
                        <li><a href="{{route('welcome.signup')}}">Signup</a></li>
                    @else
                    <!-- <li><a href="{{route('welcome.logout-client')}}">Logout</a></li> -->
                     @endguest   
                    </ul>
                </div>

                <div class="logo">
                    <a href="{{route('welcome.home')}}"><img src="{{asset('welcome_assets/images/logo.png')}}" alt=""></a>
                </div>
                @guest
                    <div class="cart-sec">
                    <p>Hi! Guest</p>
                    </div>
                @else
                    <div class="cart-sec">
                    <p>Hi! {{ Auth::user()->first_name }}    <a href="{{route('welcome.shopping-cart')}}">cart 2</a></p>
                        
                    </div>           
                @endguest 

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
                    @guest
                        
                    @else
                        <li class="{{ Request::is('edit-account') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.edit-account')}}">User Menu</a></li>
                    @endguest 
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

                @guest
                        
                    @else
                        <div class="w3-bar" style="background-color:#b3b3ff; height: 3px;" !imporatnt>
                                <a href="#" class="w3-bar-item w3-button"></a>  
                        </div>
                        <section class="my-account add-address cmn-gap2">
                         <div class="container">
                            <div class="user-nav">
                                <ul>                    
                                    <li class="{{ Request::is('welcome.my-account') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.my-account')}}">USER MENU</a></li>
                                    <li class="{{ Request::is('welcome.design-tool') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.design-tool')}}">CREATE NEW DESIGN</a></li>
                                    <li class="{{ Request::is('welcome.my-save-design') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.my-save-design')}}">MY SAVED DESIGNS</a></li>
                                    <li class="{{ Request::is('welcome.order-history') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.order-history')}}">ORDER HISTORY</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#url">ACCOUNT</a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('welcome.my-account') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.my-account')}}">My account</a></li>
                                            <li class="{{ Request::is('welcome.saved-address') ? 'current-menu-item' : '' }}"><a href="{{route('welcome.saved-address')}}">Saved addresses</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('welcome.logout-client')}}">LOG OUT</a></li>
                                </ul>
                            </div> 
                @endguest