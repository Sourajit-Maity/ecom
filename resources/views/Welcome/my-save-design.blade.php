<x-layouts.welcome-layout>

    <section class="design-sec cmn-gap2">
        <div class="container">
            <div class="user-nav">
                <ul>
                    <li><a href="#url">USER MENU</a></li>
                    <li><a href="{{route('welcome.design-tool')}}">CREATE NEW DESIGN</a></li>
                    <li class="current-menu-item"><a href="{{route('welcome.my-save-design')}}">MY SAVED DESIGNS</a></li>
                    <li><a href="{{route('welcome.order-history')}}">ORDER HISTORY</a></li>
                    <li class="menu-item-has-children">
                        <a href="#url">ACCOUNT</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('welcome.my-account')}}">My account</a></li>
                            <li><a href="{{route('welcome.saved-address')}}">saved addresses</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('welcome.logout-client')}}">LOG OUT</a></li>
                </ul>
            </div>

            <div class="design-content">
                <h3>My Saved Designs</h3>

                <div class="row design-row">
                    <div class="col-md-6 design-col-left">
                        <div class="images-sec">
                            <img src="{{asset('welcome_assets/images/design01.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 design-col-right">
                        <div class="design-cont">
                            <p><strong>Template Name:</strong>Template3 rename</p>
                            <p><strong>Date Created:</strong>19 August 2021</p>
                            <p><strong>Size:</strong>1" x 3"</p>
                            <p><strong>Fastener:</strong>Magnetic</p>
                            <div class="button-sec">
                                <a class="cmn-btn" href="#url">ORDER/EDIT</a>
                                <a class="cmn-btn" href="#url">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row design-row">
                    <div class="col-md-6 design-col-left">
                        <div class="images-sec">
                            <img src="{{asset('welcome_assets/images/design02.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 design-col-right">
                        <div class="design-cont">
                            <p><strong>Template Name:</strong>Template3 rename</p>
                            <p><strong>Date Created:</strong>19 August 2021</p>
                            <p><strong>Size:</strong>1" x 3"</p>
                            <p><strong>Fastener:</strong>Magnetic</p>
                            <div class="button-sec">
                                <a class="cmn-btn" href="#url">ORDER/EDIT</a>
                                <a class="cmn-btn" href="#url">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row design-row">
                    <div class="col-md-6 design-col-left">
                        <div class="images-sec">
                            <img src="{{asset('welcome_assets/images/design03.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 design-col-right">
                        <div class="design-cont">
                            <p><strong>Template Name:</strong>Template3 rename</p>
                            <p><strong>Date Created:</strong>19 August 2021</p>
                            <p><strong>Size:</strong>1" x 3"</p>
                            <p><strong>Fastener:</strong>Magnetic</p>
                            <div class="button-sec">
                                <a class="cmn-btn" href="#url">ORDER/EDIT</a>
                                <a class="cmn-btn" href="#url">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pagination">
                <ul>
                    <li class="prev"><a href="#url"><img src="{{asset('welcome_assets/images/arrow-right.svg')}}" alt=""></a></li>
                    <li class="active"><a href="#url"><span>1</span></a></li>
                    <li><a href="#url"><span>2</span></a></li>
                    <li><a href="#url"><span>3</span></a></li>
                    <li><a href="#url"><span>4</span></a></li>
                    <li><a href="#url"><span>...</span></a></li>
                    <li class="next"><a href="#url"><img src="{{asset('welcome_assets/images/arrow-right.svg')}}" alt=""></a></li>
                </ul>
            </div>

        </div>
    </section>
</x-layouts.welcome-layout>