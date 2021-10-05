<x-layouts.welcome-layout>

    <section class="my-account add-address cmn-gap2">
        <div class="container">
            
            @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                    </div>
            @endif
            <div class="account-info">
                <h3>Add Address</h3> 

                <div class="row account-row">
                    <div class="col-md-12 add-address-right">
                    <form method="POST" action="{{ route('welcome.update-address', $address->id) }}" enctype="multipart/form-data">
                        @csrf 
                            <div class="accout-form">
                                <div class="row acound-form-row">
                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>First Name<span style="color:red"> *</span></label>
                                            <input id="first_name" type="text" placeholder="First Name *" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$address->first_name }}"  autocomplete="first_name">

                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                   @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Last Name<span style="color:red"> *</span></label>
                                            <input id="last_name" type="text" placeholder="Last Name *" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$address->last_name }}"  autocomplete="last_name">

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Nick name<span style="color:red"> *</span></label>
                                            <input id="nick_name" type="text" placeholder="Nick Name *" class="form-control @error('nick_name') is-invalid @enderror" name="nick_name" value="{{ $address->nick_name }}"  autocomplete="nick_name">

                                                @error('nick_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Company<span style="color:red"> *</span></label>
                                            <input id="company" type="text" placeholder="Company Name" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ $address->company }}"  autocomplete="company">

                                                @error('company')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Phone number<span style="color:red"> *</span></label>
                                            <input id="phone" type="tel" placeholder="Phone Number *" class="form-control @error('phone') is-invalid @enderror only-numeric" name="phone" value="{{ $address->phone }}"  autocomplete="phone">

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Street address<span style="color:red"> *</span></label>
                                            <input id="street_address" type="text" placeholder="Street Address*" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ $address->street_address }}"  autocomplete="street_address">

                                                @error('street_address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Postal code<span style="color:red"> *</span></label>
                                            <input id="postal_code" type="text" placeholder="postal code*" class="form-control @error('postal_code') is-invalid @enderror only-numeric" name="postal_code" value="{{ $address->postal_code }}"  autocomplete="postal_code">

                                                @error('postal_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>City<span style="color:red"> *</span></label>
                                            <input id="city" type="text" placeholder="City *" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $address->city }}"  autocomplete="city">

                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Country<span style="color:red"> *</span></label>
                                            <select  name="country" id="country" class="form-control @error('country') is-invalid @enderror" name="country"  autocomplete="country">
                                   
                                               @if($address->country != null) 
                                                    @foreach($oldcountry as $key => $value)
                                                        <option value="{{ $value }}">{{ $key }}</option>
                                                    @endforeach
                                                @else  
                                                        <option value=""disable selected>Select Country</option>                                                            
                                                @endif
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
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                        <label>State<span style="color:red"> *</span></label>
                                            <select  name="state" id="state" class="form-control @error('state') is-invalid @enderror" name="state"   autocomplete="state">
                                            
                                            @if($address->state != null) 
                                                    @foreach($oldstate as $key => $value)
                                                        <option value="{{ $value }}">{{ $key }}</option>
                                                    @endforeach
                                             @else  
                                                <option value=""disable selected>Select State</option>                                                            
                                             @endif
                                                                                                                            
                                                                
                                            </select>
                                            @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 acound-form-col">
                                        <div class="form-input">
                                            <input type="submit" value="Update address">
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
</x-layouts.welcome-layout><script>
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