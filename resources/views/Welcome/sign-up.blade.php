<x-layouts.welcome-layout>
    <section class="login-sec">
        <div class="container">
            <div class="login-form">
                <div class="login-head">
                    <h2>Signup</h2>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <div class="login-contnt">
                <form action="{{ route('welcome.register-submit') }}" method="POST" >
                     @csrf
                        <div class="accout-info">
                            <h2>Your Account Information</h2>
                            <div class="form-input">
                                <label>Email Address<span style="color:red"> *</span></label>
                                <input id="email" type="email" placeholder="Email Address *" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label>Password<span style="color:red"> *</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label>Verify Password<span style="color:red"> *</span></label>
                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="customer-info">
                            <h2>Customer Information</h2>
                            <div class="form-input">
                                <label>First name<span style="color:red"> *</span></label>
                                <input id="first_name" type="text" placeholder="First Name *" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  autocomplete="first_name">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label>Last name<span style="color:red"> *</span></label>
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
                                <label>Address 1<span style="color:red"> *</span></label>
                                <input id="address1" type="text" placeholder="Address1 *" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}"  autocomplete="address1">

                                @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-input">
                                <label>Address 2</label>
                                <input id="address2" type="text" placeholder="Address2" class="form-control" name="address2" value="{{ old('address2') }}"  autocomplete="address2">
                            </div> 

                            <div class="form-input">
                                <label>City<span style="color:red"> *</span></label>
                                <input id="city" type="text" placeholder="City *" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  autocomplete="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <label>Country<span style="color:red"> *</span></label>
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
                                <label>State<span style="color:red"> *</span></label>
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
                                <label>Zip<span style="color:red"> *</span></label>
                                <input id="zip" type="text" placeholder="Zip *" class="form-control @error('zip') is-invalid @enderror only-numeric" name="zip" value="{{ old('zip') }}"  autocomplete="zip">

                                @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <label>Phone<span style="color:red"> *</span></label>
                                <input id="phone" type="tel" placeholder="Phone Number *" class="form-control @error('phone') is-invalid @enderror only-numeric" name="phone" value="{{ old('phone') }}"  autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-input">
                                <img src="images/captcha.png" alt="">
                            </div>

                            <div class="form-input">
                                <div class="form_input_check">
                                    <label>
                                       <input type="checkbox" name="terms_condition" value="1"  class="form-control @error('terms_condition') is-invalid @enderror"/> 
                                        <!-- <input type="checkbox" name="terms_condition" id="checkme" value="1" onchange="isChecked(this, 'sub1')" /> -->
                                        <span> I agree to terms & conditions<span style="color:red"> *</span></span>
                                        @error('terms_condition')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </label>
                                </div>
                            </div>

                            <div class="form-input">
                            <!-- <input type="submit" name="sendNewSms" class="inputButton" disabled="disabled" id="sendNewSms" value=" Send " /> -->

                                <input type="submit" name="submit" />
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
<script>
    $(document).ready(function(){
        // var checker = document.getElementById('checkme');
        // var sendbtn = document.getElementById('sendNewSms');
        // checker.onchange = function(){
        // if(this.checked){
        //     sendbtn.disabled = false;
        // } else {
        //     sendbtn.disabled = true;
        // }

        // }

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