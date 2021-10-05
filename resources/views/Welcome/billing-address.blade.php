<x-layouts.welcome-layout>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){ 
     $('#check-address').click(function(){ 
     if ($('#check-address').is(":checked")) {
      $('#shipping_first_name').val($('#first_name').val());
      $('#shipping_last_name').val($('#last_name').val());
      $('#shipping_street_address').val($('#street_address').val());
      $('#shipping_city').val($('#city').val());
	    $('#shipping_postal_code').val($('#postal_code').val());
      $('#shipping_company').val($('#company').val());
      $('#shipping_phone').val($('#phone').val());
      var country = $('#country option:selected').val();
      $('#shipping_country option[value=' + country + ']').attr('selected','selected');
	   var state = $('#state option:selected').val();
      $('#shipping_state option[value=' + state + ']').attr('selected','selected');
     } else { //Clear on uncheck
      $('#shipping_first_name').val("");
      $('#shipping_last_name').val("");
      $('#shipping_street_address').val("");
      $('#shipping_postal_code').val("");
	  $('#shipping_city').val("");
      $('#shipping_company').val("");
      $('#shipping_phone').val("");
      $('#shipping_postal_code').val("");
      $('#shipping_country option[value=""]').attr('selected','selected');
	  $('#shipping_state option[value=""]').attr('selected','selected');
     };
    });
 
   });
</script>
    <section class="billing-address account-info cmn-gap2">
        <div class="container">
           
           

            @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
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
                                       @foreach ($address as $key => $value)                               
                                                    <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach 
                                   </select>
                                </div>
                            <form action="{{ route('welcome.save-billing-details') }}" method="POST" >
                                   @csrf
                                <div class="form-input">
                                    <label>First name*</label>
                                    <input id="first_name" type="text"  placeholder="First Name *" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  autocomplete="first_name">

                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Last Name*</label>
                                    <input id="last_name" type="text" placeholder="Last Name *" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name">

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Company</label>
                                    <input id="company" type="text" placeholder="Company Name" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}"  autocomplete="company">

                                        @error('company')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Street address*</label>
                                    <input id="street_address" type="text" placeholder="Street Address*" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}"  autocomplete="street_address">

                                        @error('street_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Postal code*</label>
                                    <input id="postal_code" type="text" placeholder="postal code*" class="form-control @error('postal_code') is-invalid @enderror only-numeric" name="postal_code" value="{{ old('postal_code') }}"  autocomplete="postal_code">

                                        @error('postal_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>City*</label>
                                    <input id="city" type="text" placeholder="City *" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  autocomplete="city">

                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Country*</label>
                                    <select  name="country" id="country" class="form-control @error('country') is-invalid @enderror" name="country"  autocomplete="country">
                                   
                                   <option value=""disable selected>Select Country</option>
                                       @foreach ($country as $key => $value)                               
                                       <option value="{{ $value }}">{{ $key }}</option>
                                       @endforeach                                                                               
                                                       
                               </select>
                               @error('country')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>State/Province*</label>
                                    <select  name="state" id="state" class="form-control @error('state') is-invalid @enderror" name="state"   autocomplete="state">
                                            
                                            <option value=""disable selected>Select State</option>
                                                                                                                        
                                                            
                                        </select>
                                        @error('state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Phone Number*</label>
                                    <input id="phone" type="tel" placeholder="Phone Number *" class="form-control @error('phone') is-invalid @enderror only-numeric" name="phone" value="{{ old('phone') }}"  autocomplete="phone">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                    <input type="checkbox" value="" id="check-address">
                                    <span> * My shipping information is the same as my billing.</span>
                                </label>
                            </div>
                          </div> 
                        

                            <div class="acound-form-col">
                                <div class="form-input">
                                    <label>Saved addresses</label>
                                   <select>
                                       <option>Select saved address</option>
                                       @foreach ($address as $key => $value)                               
                                                    <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach 
                                   </select>
                                </div>

                                <div class="form-input">
                                    <label>First name*</label>
                                    <input id="shipping_first_name" type="text" placeholder="First Name *" class="form-control @error('shipping_first_name') is-invalid @enderror" name="shipping_first_name" value="{{ old('shipping_first_name') }}"  autocomplete="shipping_first_name">

                                        @error('shipping_first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Last Name*</label>
                                    <input id="shipping_last_name" type="text" placeholder="Last Name *" class="form-control @error('shipping_last_name') is-invalid @enderror" name="shipping_last_name" value="{{ old('shipping_last_name') }}"  autocomplete="shipping_last_name">

                                        @error('shipping_last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Company</label>
                                    <input id="shipping_company" type="text" placeholder="Company Name" class="form-control @error('shipping_company') is-invalid @enderror" name="shipping_company" value="{{ old('shipping_company') }}"  autocomplete="shipping_company">

                                        @error('shipping_company')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Street address*</label>
                                    <input id="shipping_street_address" type="text" placeholder="Street Address*" class="form-control @error('shipping_street_address') is-invalid @enderror" name="shipping_street_address" value="{{ old('shipping_street_address') }}"  autocomplete="shipping_street_address">

                                        @error('shipping_street_address')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Postal code*</label>
                                    <input id="shipping_postal_code" type="text" placeholder="postal code*" class="form-control @error('shipping_postal_code') is-invalid @enderror only-numeric" name="shipping_postal_code" value="{{ old('shipping_postal_code') }}"  autocomplete="shipping_postal_code">

                                        @error('shipping_postal_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>City*</label>
                                    <input id="shipping_city" type="text" placeholder="City *" class="form-control @error('shipping_city') is-invalid @enderror" name="shipping_city" value="{{ old('shipping_city') }}"  autocomplete="shipping_city">

                                        @error('shipping_city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Country*</label>
                                    <select  name="shipping_country" id="shipping_country" class="form-control @error('shipping_country') is-invalid @enderror" name="shipping_country"  autocomplete="shipping_country">
                                   
                                   <option value=""disable selected>Select Country</option>
                                       @foreach ($country as $key => $value)                               
                                       <option value="{{ $value }}">{{ $key }}</option>
                                       @endforeach                                                                               
                                                       
                               </select>
                               @error('shipping_country')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>State/Province*</label>
                                    <select  name="stshipping_stateate" id="shipping_state" class="form-control @error('shipping_state') is-invalid @enderror" name="shipping_state"   autocomplete="shipping_state">
                                            
                                                 <option value=""disable selected>Select State</option>
                                            @foreach ($state as $key => $value)                               
                                                 <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach                                                                        
                                                            
                                        </select>
                                        @error('shipping_state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                 </div>

                                 <div class="form-input">
                                    <label>Phone Number*</label>
                                    <input id="shipping_phone" type="text" placeholder="Phone Number *" class="form-control @error('shipping_phone') is-invalid @enderror only-numeric" name="shipping_phone" value="{{ old('shipping_phone') }}"  autocomplete="shipping_phone">

                                        @error('shipping_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                @foreach($productiontimes as $productiontime)
                    <div class="col-md-4 production-col">
                        <div class="production-card">
                            <div class="heading">
                                <h3>{{$productiontime->production_time_name}}</h3>
                                <p>Production Time</p>
                            </div>
                            <div class="production-cont">
                            @if($productiontime->price == 0.00)
                                    <h2>Free</h2>
                            @else
                                   <h2>$ {{$productiontime->price}}</h2>
                            @endif   
    
                                <div class="production-time">
                                @if($productiontime->days == 2)
                                    <h4>1 to 2 Business days</h4>
                                @elseif($productiontime->days == 3)
                                    <h4>2 to 3 Business days</h4>
                                @else
                                    <h4>5 to 7 Business days</h4>
                                @endif 
                                    <p>production time</p>
                                </div>
    
                                <p>*Does not include shipping cost or shipping transit time.</p>
    
                            </div>
                        </div>
                    </div>
                  @endforeach
                   
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
<script>
    $(document).ready(function(){
        $("#country").change(function(){
            var val = $(this).val();
            $("#state").html('');
            var op='<option>Select State</option>';
            $("#state").append(op);
            jQuery.ajax({ 
                url : '/getstate/' +val,
                type : "GET",
                dataType : "json",
                success:function(data)
                {
                    
                    for(var i=0;i<data.length;i++){
                        op='<option value="'+data[i].id+'">'+data[i].state_name+'</option>';
                        $("#state").append(op);
                    }
                }
            });
            
        });
        $(".only-numeric").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
               
          if (!(keyCode >= 48 && keyCode <= 57)) {
            $(".error").css("display", "inline");
            return false;
          }else{
            $(".error").css("display", "none");
          }
      });
    });
</script>