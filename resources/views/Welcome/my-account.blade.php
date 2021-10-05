<x-layouts.welcome-layout>

    <section class="my-account cmn-gap2">
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

            <div class="account-info">
                <h3>Account info</h3>

                <div class="row account-row">
                    <div class="col-md-2 accout-col-left">
                        <div class="profile-image">
                            <img src="{{asset('welcome_assets/images/user-profile.png')}}" alt="">
                        </div>
                    </div>

                    <div class="col-md-10 accout-col-right">
                        <form>
                            <div class="accout-form">
                                <div class="row acound-form-row">
                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>First Name</label>
                                            <input type="text" value = "{{ Auth::user()->first_name }}" readonly placeholder="Smith">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Last Name</label>
                                            <input type="text" value = "{{ Auth::user()->last_name }}" readonly placeholder="Williams">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Email</label>
                                            <input type="email" value = "{{ Auth::user()->email }}" readonly placeholder="smith.williams@yopmail.com">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Company</label>
                                            <input type="text" value = "{{ Auth::user()->company }}" readonly placeholder="ws">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Address 1</label>
                                            <input type="text" value = "{{ Auth::user()->address1 }}" readonly placeholder="1 main st">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Address 2</label>
                                            <input type="text" value = "{{ Auth::user()->address2 }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>City</label>
                                            <input type="text" value = "{{ Auth::user()->city }}" readonly placeholder="san jose">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Country</label>
                                            <input type="text" value = "{{ $country }}" readonly placeholder="United States">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>State</label>
                                            <input type="text" value = "{{ $state }}" readonly placeholder="California">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Zip</label>
                                            <input type="text" value = "{{ Auth::user()->zip }}" readonly placeholder="95131">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Phone</label>
                                            <input type="text" value = "{{ Auth::user()->phone }}" readonly placeholder="5689458975 ">
                                        </div>
                                    </div>

                                    <div class="col-md-12 acound-form-col">
                                        <div class="form-input">
                                        <a href="{{ route('welcome.edit-account') }}" class="btn btn-success">Edit</a> 
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>

             </div>
        </div>
    </section>
</x-layouts.welcome-layout>