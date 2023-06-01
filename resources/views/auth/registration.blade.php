@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="py-4 panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Register</h3>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="panel-body p-3">
                        <div class="form-group">
                            <div class="input-field">
                                <span class="far fa-user px-2"></span>
                                <input type="text" name="name" placeholder="Enter Username" required
                                    :value="old('name')" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-field">
                                <span class="far fa-user px-2"></span>
                                <input type="text" name="email" placeholder="Enter your Email" required
                                    :value="old('email')" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-field">
                                <span class="fas fa-lock px-2"></span>
                                <input type="password" name="password" placeholder="Enter your Password" required />
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="input-field">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                                </div>
                            </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Register</button>
            </form>

            <div class="text-center pt-4 text-muted">
                Already have an account?
                <a href="{{ route('login') }}">Sign In</a>
            </div>

    </div>
</div>
@endsection
