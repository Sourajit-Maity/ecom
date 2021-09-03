<x-layouts.welcome-layout>
    <section class="login-sec">
        <div class="container">
            <div class="login-form">
                <div class="login-head">
                    <h2>Signup</h2>
                </div>

                <div class="login-contnt">
                    <form>
                        <div class="accout-info">
                            <h2>Your Account Information</h2>
                            <div class="form-input">
                                <label>Email Address*</label>
                                <input type="email">
                            </div>
                            <div class="form-input">
                                <label>Password*</label>
                                <input type="password">
                            </div>
                            <div class="form-input">
                                <label>Verify Password*</label>
                                <input type="password">
                            </div>
                        </div>

                        <div class="customer-info">
                            <h2>Customer Information</h2>
                            <div class="form-input">
                                <label>First name*</label>
                                <input type="text">
                            </div>
                            <div class="form-input">
                                <label>Last name*</label>
                                <input type="text">
                            </div>
                            <div class="form-input">
                                <label>Company</label>
                                <input type="text">
                            </div>
                            <div class="form-input">
                                <label>Address 1*</label>
                                <input type="text">
                            </div>
                            <div class="form-input">
                                <label>Address 2</label>
                                <input type="text">
                            </div>

                            <div class="form-input">
                                <label>City*</label>
                                <input type="text">
                            </div>

                            <div class="form-input">
                                <label>Country*</label>
                                <select>
                                    <option>United States</option>
                                </select>
                            </div>

                            <div class="form-input">
                                <label>State*</label>
                                <select>
                                    <option>Please Select</option>
                                </select>
                            </div>

                            <div class="form-input">
                                <label>Zip*</label>
                                <input type="text">
                            </div>

                            <div class="form-input">
                                <label>Phone*</label>
                                <input type="tel">
                            </div>

                            <div class="form-input">
                                <img src="images/captcha.png" alt="">
                            </div>

                            <div class="form-input">
                                <div class="form_input_check">
                                    <label>
                                        <input type="checkbox">
                                        <span> I agree to terms & conditions</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-input">
                                <input type="submit" value="Sign up">
                            </div>

                            <div class="form-input">
                                <p>Have an account? <a href="{{route('welcome.login')}}">Log in</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.welcome-layout>