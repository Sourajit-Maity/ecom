<x-layouts.welcome-layout>
    <section class="order-history cmn-gap2">
        <div class="container">
            <div class="user-nav">
                <ul>
                    <li><a href="#url">USER MENU</a></li>
                    <li><a href="#url">CREATE NEW DESIGN</a></li>
                    <li><a href="#url">MY SAVED DESIGNS</a></li>
                    <li><a href="#url">ORDER HISTORY</a></li>
                    <li class="menu-item-has-children">
                        <a href="#url">ACCOUNT</a>
                        <ul class="sub-menu">
                            <li><a href="#url">My account</a></li>
                            <li class="current-menu-item"><a href="#url">saved addresses</a></li>
                        </ul>
                    </li>
                    <li><a href="#url">LOG OUT</a></li>
                </ul>
            </div>

            <div class="order-table saved-address">
                <div class="address-wrap">
                    <h2>Address list</h2>
                    <a class="cmn-btn" href="#url">+ Add address</a>
                </div>
                

                <table>
                    <tr>
                        <th>Nick name</th>
                        <th>Street address</th>
                        <th>city</th>
                        <th>Postal code</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>John Adraham</td>
                        <td>4364 Don Jackson Lane.</td>
                        <td>Italy</td>
                        <td>93773</td>
                        <td>
                            <div class="table-btn">
                                <a class="cmn-btn" href="#url">ORDER/EDIT</a>
                                <a class="cmn-btn" href="#url">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Sharuk Rana</td>
                        <td>1234 Don Jackson Lane.</td>
                        <td>India</td>
                        <td>54789</td>
                        <td>
                            <div class="table-btn">
                                <a class="cmn-btn" href="#url">ORDER/EDIT</a>
                                <a class="cmn-btn" href="#url">Delete</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Brock Joe</td>
                        <td>887 Queen Jackson Lane.</td>
                        <td>German</td>
                        <td>11155</td>
                        <td>
                            <div class="table-btn">
                                <a class="cmn-btn" href="#url">ORDER/EDIT</a>
                                <a class="cmn-btn" href="#url">Delete</a>
                            </div>
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