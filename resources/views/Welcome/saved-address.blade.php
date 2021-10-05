<x-layouts.welcome-layout>
    <section class="order-history cmn-gap2">
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
            @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                    </div>
            @endif
            <div class="order-table saved-address">
                <div class="address-wrap">
                    <h2>Address list</h2>
                    <a class="cmn-btn" href="{{route('welcome.add-address')}}">+ Add address</a>
                </div>
                

                <table>
                 <thead>
                    <tr>
                        <th>Nick name</th>
                        <th>Street address</th>
                        <th>city</th>
                        <th>Postal code</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($shippingaddresses) > 0)
                            @foreach ($shippingaddresses as $shippingaddress)
                    <tr>
        
                        <td>{{ $shippingaddress->nick_name }}</td>
                        <td>{{ $shippingaddress->street_address }}</td>
                        <td>{{ $shippingaddress->city }}</td>
                        <td>{{ $shippingaddress->postal_code }}</td>
                        
                        <td>
                            <div class="table-btn">
                                <a class="cmn-btn" href="{{ route('welcome.edit-address',[$shippingaddress->id]) }}">ORDER/EDIT</a>
                                <a class="cmn-btn" href="{{route('welcome.delete-address',['id'=>$shippingaddress->id])}}">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                        @else
                            <tr>
                                <td colspan="7">No entries in table</td>
                            </tr>
                        @endif
                    </tbody>

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