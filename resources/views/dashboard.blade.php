@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h2>{{ Auth::user()->name }}</h2>
                        <h2>{{ Auth::user()->role }}</h2>
                        You are Logged In
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
