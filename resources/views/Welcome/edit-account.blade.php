<x-layouts.welcome-layout>

    <section class="my-account cmn-gap2">
        <div class="container">
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
                    <li><a href="#url">LOG OUT</a></li>
                </ul>
            </div>

            <div class="account-info edit-account">
                <h3>Edit Account info</h3>

                <div class="row account-row">
                    <div class="col-md-2 accout-col-left">
                        <div class="profile-image">
                            <img src="{{asset('welcome_assets/images/user-profile.png')}}" alt="">
                        </div>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
                    <div class="col-md-10 accout-col-right">
                       
                    <form method="POST" action="{{ route('welcome.update-account', $users->id) }}" enctype="multipart/form-data">
                        @csrf                
                            <div class="accout-form">
                                <div class="row acound-form-row">
                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>First Name<span style="color:red"> *</span></label>
                                            <input type="text" value = "{{ Auth::user()->first_name }}"  placeholder="Smith" class="form-control @error('first_name') is-invalid @enderror" name="first_name">
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
                                            <input type="text" value = "{{ Auth::user()->last_name }}"  placeholder="Williams" class="form-control @error('last_name') is-invalid @enderror" name="last_name">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Email<span style="color:red"> *</span></label>
                                            <input type="email" value = "{{ Auth::user()->email }}"  placeholder="smith.williams@yopmail.com" class="form-control @error('email') is-invalid @enderror" name="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Company<span style="color:red"> *</span></label>
                                            <input type="text" value = "{{ Auth::user()->company }}"  placeholder="ws" class="form-control @error('company') is-invalid @enderror" name="company">
                                            @error('company')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Address 1<span style="color:red"> *</span></label>
                                            <input type="text" value = "{{ Auth::user()->address1 }}"  placeholder="1 main st" class="form-control @error('address1') is-invalid @enderror" name="address1">
                                            @error('address1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Address 2</label>
                                            <input type="text" name = "address2" value = "{{ Auth::user()->address2 }}" >
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>City<span style="color:red"> *</span></label>
                                            <input type="text" value = "{{ Auth::user()->city }}"  placeholder="san jose" class="form-control @error('city') is-invalid @enderror" name="city">
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
                                            <select  name="country" id="country" class="form-control @error('country') is-invalid @enderror" name="country"  autocomplete="country" class="form-control @error('country') is-invalid @enderror" name="country">                                   
                                                
                                                @if($users->country != null) 
                                                    @foreach($country as $key => $value)
                                                        <option value="{{ $value }}">{{ $key }}</option>
                                                    @endforeach
                                                @else  
                                                        <option value=""disable selected>Select Country</option>                                                            
                                                @endif
                                                @foreach ($countrys as $key => $value)                               
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
                                            <select  name="state" id="state" class="form-control @error('state') is-invalid @enderror" name="state"   autocomplete="state" class="form-control @error('state') is-invalid @enderror" name="state">                                  
                                               
                                                @if($users->state != null) 
                                                    @foreach($state as $key => $value)
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

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Zip<span style="color:red"> *</span></label>
                                            <input type="text" value = "{{ Auth::user()->zip }}"  placeholder="95131" class="form-control @error('zip') is-invalid @enderror only-numeric" name="zip">
                                            @error('zip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 acound-form-col">
                                        <div class="form-input">
                                            <label>Phone<span style="color:red"> *</span></label>
                                            <input type="text" value = "{{ Auth::user()->phone }}"  placeholder="5689458975 " class="form-control @error('phone') is-invalid @enderror only-numeric" name="phone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 acound-form-col">
                                        <div class="form-input">
                                            <input type="submit" value="Save Changes">
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