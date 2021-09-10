<x-layouts.welcome-layout>
    <section class="login-sec">
        <div class="container">
            <div class="login-form">
                <div class="login-head">
                    <h2>Login</h2>
                </div>

                <div class="login-contnt">
                    <h2>Your Account Information</h2>

                    <form action="{{ route('welcome.login-client') }}" method="POST" >
                         @csrf
                        <div class="form-input">
                            <label>Email</label>
                            <input id="email" type="email" placeholder="Enter Email*" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-input">
                            <label>Password</label>
                            <input id="password" type="password" placeholder="Enter Password*" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                        <input type="checkbox">
                                        <span> Remember me</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-input">
                                <a href="#url">Forgot password?</a>
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