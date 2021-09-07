<x-layouts.welcome-layout>
    <section class="order-history cmn-gap2">
        <div class="container">
            <div class="user-nav">
                <ul>
                    <li><a href="#url">USER MENU</a></li>
                    <li><a href="#url">CREATE NEW DESIGN</a></li>
                    <li><a href="#url">MY SAVED DESIGNS</a></li>
                    <li class="current-menu-item"><a href="#url">ORDER HISTORY</a></li>
                    <li class="menu-item-has-children">
                        <a href="#url">ACCOUNT</a>
                        <ul class="sub-menu">
                            <li><a href="#url">My account</a></li>
                            <li><a href="#url">saved addresses</a></li>
                        </ul>
                    </li>
                    <li><a href="#url">LOG OUT</a></li>
                </ul>
            </div>

            <div class="order-table">
                <h2>Order History</h2>

                <table>
                    <tr>
                        <th>date</th>
                        <th>Order ID</th>
                        <th>status</th>
                        <th>Product</th>
                        <th>Total</th>
                    </tr>

                    <tr>
                        <td>17/08/2021</td>
                        <td>100</td>
                        <td>On Going</td>
                        <td>
                            <div class="image-wraper">
                                <div class="order-image">
                                    <img src="{{asset('welcome_assets/images/order01.png')}}" alt="">
                                    <a href="#url"><img src="{{asset('welcome_assets/images/close.svg')}}" alt=""></a>
                                </div>
                                <div class="order-name">
                                    <p>Plastic Badges</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            $ 9.99
                        </td>
                    </tr>

                    <tr>
                        <td>18/08/2021</td>
                        <td>101</td>
                        <td>On Going</td>
                        <td>
                            <div class="image-wraper">
                                <div class="order-image">
                                    <img src="{{asset('welcome_assets/images/order02.png')}}" alt="">
                                    <a href="#url"><img src="{{asset('welcome_assets/images/close.svg')}}" alt=""></a>
                                </div>
                                <div class="order-name">
                                    <p>Plastic Badges</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            $ 9.99
                        </td>
                    </tr>

                    <tr>
                        <td>19/08/2021</td>
                        <td>102</td>
                        <td>On Going</td>
                        <td>
                            <div class="image-wraper">
                                <div class="order-image">
                                    <img src="{{asset('welcome_assets/images/order03.png')}}" alt="">
                                    <a href="#url"><img src="{{asset('welcome_assets/images/close.svg')}}" alt=""></a>
                                </div>
                                <div class="order-name">
                                    <p>Plastic Badges</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            $ 9.99
                        </td>
                    </tr>

                </table>
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