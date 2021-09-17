<x-layouts.welcome-layout>
    <section class="login-sec">
        <div class="container">
            <div class="login-form">
                <div class="login-head">
                    <h2>Login</h2>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <div class="login-contnt">
                    <h2>Your Account Information</h2>

                    <form action="{{ route('welcome.login-client') }}" method="POST" >
                         @csrf
                        <div class="form-input">
                            <label>Email</label>
                            <input id="email" type="email" placeholder="Enter Email*" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-input">
                            <label>Password</label>
                            <input id="password" type="password" placeholder="Enter Password*" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
 
                        <div class="input-wraper">
                            <div class="form-input">
                                <div class="form_input_check">
                                    <label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span> Remember me</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-input">
                                 @if (Route::has('password.request'))
										 <a href="{{ route('password.request') }}">Forgot Password</a>
                                 @endif
                            </div>

                        </div>

                        <div class="form-input">
                            <input type="submit" value="Login">
                        </div>

                        <div class="form-input">
                            <p>Don't have an account? <a href="{{route('welcome.signup')}}">Sign Up</a></p>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
</x-layouts.welcome-layout>