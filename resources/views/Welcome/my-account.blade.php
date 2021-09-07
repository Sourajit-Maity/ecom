<x-layouts.welcome-layout>

    <section class="my-account cmn-gap2">
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
                            <li class="current-menu-item"><a href="#url">My account</a></li>
                            <li><a href="#url">saved addresses</a></li>
                        </ul>
                    </li>
                    <li><a href="#url">LOG OUT</a></li>
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
                                            <input type="text" placeholder="Smith">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Williams">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Email</label>
                                            <input type="email" placeholder="smith.williams@yopmail.com">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Company</label>
                                            <input type="text" placeholder="ws">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Address 1</label>
                                            <input type="text" placeholder="1 main st">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Address 2</label>
                                            <input type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>City</label>
                                            <input type="text" placeholder="san jose">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Country</label>
                                            <input type="text" placeholder="United States">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>State</label>
                                            <input type="text" placeholder="California">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Zip</label>
                                            <input type="text" placeholder="95131">
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Phone</label>
                                            <input type="tel" placeholder="5689458975 ">
                                        </div>
                                    </div>

                                    <div class="col-md-12 acound-form-col">
                                        <div class="form-input">
                                            <input type="submit" value="Edit">
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