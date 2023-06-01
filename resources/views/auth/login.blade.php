@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Login</h3>
                </div>
                
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="panel-body p-3">
                        <div class="form-group py-2">
                            <div class="input-field">
                                <span class="far fa-user p-2"></span>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="Username or Email" required :value="old('email')" />
                            </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field">
                                <span class="fas fa-lock px-2"></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Enter your Password" required />
                            </div>
                </form>
                </div>
                <div class="form-inline">
                    <input type="checkbox" name="remember" id="remember" />
                    <label for="remember" class="text-muted">Remember me</label>
            
                    @if (Route::has('password.request'))
                        <a class="ml-auto mb-0 text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            
                <button class="btn btn-primary btn-block mt-3" type="submit">Login</button>
                </form>
            
                <div class="text-center pt-4 text-muted">
                    Don't have an account?
                    <a href="{{ route('register') }}">Sign up</a>
                </div>
        </div>
        <div class="mx-3 my-2 py-2 bordert">
            <div class="text-center py-3">
                <a href="{{route('login')}}" target="_blank" class="px-2">
                    <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png"
                        alt="" />
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
