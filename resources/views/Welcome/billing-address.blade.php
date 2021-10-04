<x-layouts.welcome-layout>

    <section class="billing-address account-info cmn-gap2">
        <div class="container">
            <form>
            <div class="user-nav">
                <ul>
                    <li><a href="#url">USER MENU</a></li>
                    <li><a href="{{route('welcome.design-tool')}}">CREATE NEW DESIGN</a></li>
                    <li><a href="{{route('welcome.my-save-design')}}">MY SAVED DESIGNS</a></li>
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


            <div class="row billing-row">
                <div class="col-lg-6 billing-left">
                    <div class="billig-card">
                        <h3>Billing Address</h3>

                        <div class="imoportant">
                            <p><strong>Important</strong> - Billing address must match billing address for credit card.</p>
                        </div>
                        

                            <div class="acound-form-col">
                                <div class="form-input">
                                    <label>Saved addresses</label>
                                   <select>
                                       <option>Select saved address</option>
                                   </select>
                                </div>

                                <div class="form-input">
                                    <label>First name*</label>
                                    <input type="text" placeholder="Smith">
                                 </div>

                                 <div class="form-input">
                                    <label>Last Name*</label>
                                    <input type="text" placeholder="Williams">
                                 </div>

                                 <div class="form-input">
                                    <label>Company</label>
                                    <input type="text" placeholder="ws">
                                 </div>

                                 <div class="form-input">
                                    <label>Street address*</label>
                                    <input type="text" placeholder="4364 Don Jackson Lane.">
                                 </div>

                                 <div class="form-input">
                                    <label>Postal code*</label>
                                    <input type="text" placeholder="93773">
                                 </div>

                                 <div class="form-input">
                                    <label>City*</label>
                                    <input type="text" placeholder="san jose">
                                 </div>

                                 <div class="form-input">
                                    <label>Country*</label>
                                   <select>
                                       <option>united states</option>
                                   </select>
                                 </div>

                                 <div class="form-input">
                                    <label>State/Province*</label>
                                   <select>
                                       <option>California</option>
                                   </select>
                                 </div>

                                 <div class="form-input">
                                    <label>Phone Number*</label>
                                   <select>
                                       <option>5689458975</option>
                                   </select>
                                 </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 billing-right">
                    <div class="billig-card shipping">
                        <h3>Shipping Address</h3>
                          <div class="form-input">
                            <div class="form_input_check">
                                <label>
                                    <input type="checkbox">
                                    <span> * My shipping information is the same as my billing.</span>
                                </label>
                            </div>
                          </div> 
                        

                            <div class="acound-form-col">
                                <div class="form-input">
                                    <label>Saved addresses</label>
                                   <select>
                                       <option>Select saved address</option>
                                   </select>
                                </div>

                                <div class="form-input">
                                    <label>First name*</label>
                                    <input type="text">
                                 </div>

                                 <div class="form-input">
                                    <label>Last Name*</label>
                                    <input type="text">
                                 </div>

                                 <div class="form-input">
                                    <label>Company</label>
                                    <input type="text">
                                 </div>

                                 <div class="form-input">
                                    <label>Street address*</label>
                                    <input type="text" placeholder="Enter a location">
                                 </div>

                                 <div class="form-input">
                                    <label>Postal code*</label>
                                    <input type="text">
                                 </div>

                                 <div class="form-input">
                                    <label>City*</label>
                                    <input type="text">
                                 </div>

                                 <div class="form-input">
                                    <label>Country*</label>
                                   <select>
                                       <option>united states</option>
                                   </select>
                                 </div>

                                 <div class="form-input">
                                    <label>State/Province*</label>
                                   <select>
                                       <option>California</option>
                                   </select>
                                 </div>

                                 <div class="form-input">
                                    <label>Phone Number*</label>
                                    <input type="tel">
                                 </div>
                            </div>
                    </div>
                </div>
            </div>


            <div class="production-sec">
                <h3>Upgrade Production Time</h3>

                <div class="imoportant">
                    <p>This is the time it takes us to produce the physical products in our facility.</p>
                </div>

                <div class="row production-row">
                    <div class="col-md-4 production-col">
                        <div class="production-card">
                            <div class="heading">
                                <h3>Standard</h3>
                                <p>Production Time</p>
                            </div>
                            <div class="production-cont">
                                <h2>Free</h2>
    
                                <div class="production-time">
                                    <h4>5 to 7 Business days</h4>
                                    <p>production time</p>
                                </div>
    
                                <p>*Does not include shipping cost or shipping transit time.</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 production-col">
                        <div class="production-card">
                            <div class="heading">
                                <h3>Recommended</h3>
                                <p>Production Time</p>
                            </div>
                            <div class="production-cont">
                                <h2>$15.00</h2>
    
                                <div class="production-time">
                                    <h4>2 to 3 Business days</h4>
                                    <p>production time</p>
                                </div>
    
                                <p>*Does not include shipping cost or shipping transit time.</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 production-col">
                        <div class="production-card">
                            <div class="heading">
                                <h3>Fast</h3>
                                <p>Production Time</p>
                            </div>
                            <div class="production-cont">
                                <h2>$25.00</h2>
    
                                <div class="production-time">
                                    <h4>1 to 2 Business days</h4>
                                    <p>production time</p>
                                </div>
    
                                <p>*Does not include shipping cost or shipping transit time.</p>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mathod-sec">
                <div class="row billing-row">
                    <div class="col-lg-6 billing-left">
                        <div class="billig-card">
                            <h3>Shipping Method</h3>
                            <div class="acound-form-col">
                                    <div class="form-input">
                                        <div class="form_input_check">
                                            <label>
                                                <input type="checkbox">
                                                <span>$ 7.49 - Standard Shipping</span>
                                                <span>
                                                    Ships First Class USPS once production is complete. Transit 
                                                    time 3-5 business days.
                                                </span>
                                            </label>
                                        </div>
                                    </div>
    
                                    <div class="form-input">
                                        <div class="form_input_check">
                                            <label>
                                                <input type="checkbox">
                                                <span>$ 18.99 - Priority Shipping</span>
                                                <span>
                                                    Ships USPS Priority once production is complete.Transit time
                                                     2-3 business days.
                                                </span>
                                            </label>
                                        </div>
                                     </div>
    
                                     <div class="form-input">
                                        <div class="form_input_check">
                                            <label>
                                                <input type="checkbox">
                                                <span>$ 4.99 - Have your own FEDEX / UPS Account? Enter it here!</span>
                                                <span>
                                                    We will ship on your FedEx or UPS account once production is 
                                                    complete. Enter your account number and the shipping speed 
                                                    preferred below.
                                                </span>
                                            </label>
                                        </div>
                                     </div>
    
                                     <div class="form-input">
                                        <input type="text" placeholder="FedEx Account here">
                                      </div>
    
                                     <div class="form-input">
                                       <select>
                                           <option>Select Shipping Speed</option>
                                       </select>
                                     </div>
    
                                     <p>
                                        This option is only availble if you upgrade the production time.
                                     </p>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 billing-right">
                        <div class="billig-card shipping">
                            <h3>Order Comments</h3>                        
                                <div class="acound-form-col">
                                    <div class="form-input">
                                        <textarea placeholder="Lorem Ipsum is simply dummy text of the printing."></textarea>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-sec">
                <h3>Payment Method</h3>

                <ul>
                    <li>
                        <div class="form_input_check">
                            <label>
                                <input type="checkbox">
                                <span>Credit Card</span>
                            </label>
                        </div>
                    </li>

                    <li>
                        <div class="form_input_check">
                            <label>
                                <input type="checkbox">
                                <span>Paypal</span>
                            </label>
                        </div>
                    </li>

                    <li>
                        <div class="form_input_check">
                            <label>
                                <input type="checkbox">
                                <span>Pay by Check</span>
                            </label>
                        </div>
                    </li>
                </ul>

                <div class="payment-opt">
                    <ul>
                        <li><a href="#url"><img src="images/visa.png" alt=""></a></li>
                        <li><a href="#url"><img src="images/master.png" alt=""></a></li>
                        <li><a href="#url"><img src="images/american-express.png" alt=""></a></li>
                        <li><a href="#url"><img src="images/discover.png" alt=""></a></li>
                    </ul>
                </div>

                <div class="card-details">
                    <h3>Card Details </h3>

                    <div class="row card-details-row">
                        <div class="col-md-8 card-details-col">
                            <div class="form-input">
                                <label>Card Number</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-md-4 card-details-col">
                            <div class="form-input">
                                <label>CVV</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row card-details-row">
                        <div class="col-md-7 card-details-col">
                            <div class="form-input">
                                <label>Expiration Date</label>
                                <select>
                                    <option>1- January</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 card-details-col">
                            <div class="form-input">
                                <label>Year</label>
                                <select>
                                    <option>2021</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="continue-sec">
                <input type="submit" value="Continue"> 
            </div>

        </form>
        </div>
    </section>

</x-layouts.welcome-layout>