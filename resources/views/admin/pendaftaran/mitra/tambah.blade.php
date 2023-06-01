@extends('layouts.dashboard')
@section('daftarmitra')
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Tambah Daftar Mitra</h3>
            <p class="text-subtitle text-muted">Tambah User ke Database</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('daftarmitra.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Name</label>
                                            <input type="text" class="form-control" placeholder="First Name"
                                                id="name" name="name" required {{-- value="{{ old('name', isset($user) ? $user->name : '') }}" --}}>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Email</label>
                                            <input type="email" class="form-control" placeholder="Masukan Email"
                                                id="email" name="email" required {{-- value="{{ old('EMAIL', isset($user) ? $user->email : '') }}" --}}>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password-column">Password</label>
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="Masukan Password" type="password" required
                                                {{-- value="{{ old('password', isset($user) ? $user->password : '') }}" --}}>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat Sanggar"
                                                id="alamat" name="alamat" required {{-- value="{{ old('name', isset($user) ? $user->name : '') }}" --}}>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">No Wa</label>
                                            <input type="number" class="form-control" placeholder="Masukan No Wa"
                                                id="nowa" name="nowa" required {{-- value="{{ old('name', isset($user) ? $user->name : '') }}" --}}>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Dokumentasi</label>
                                            <input type="file" class="form-control" placeholder="Masukan Dokumentasi"
                                                id="dokumentasi" name="dokumentasi" required {{-- value="{{ old('name', isset($user) ? $user->name : '') }}" --}}>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
