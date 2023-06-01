@extends('layouts.dashboard')
@section('daftarmitra')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Mitra Table</h3>
                    <p class="text-subtitle text-muted">Daftar Mitra yang tersimpan di database</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mitra</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('mitra.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No Wa</th>
                                <th>Dokumentasi Sanggar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftar as $mitra)
                                <tr>
                                    <td>{{ $mitra->id }}</td>
                                    <td>{{ $mitra->nama }}</td>
                                    <td>{{ $mitra->email }}</td>
                                    <td>{{ $mitra->alamat }}</</td>
                                    <td>{{ $mitra->No_Wa }}</</td>
                                    <td>{{ $mitra->Dokumentasi }}</</td>
                                    <td>
                                        {{ $mitra->validasi ? 'Tervalidasi' : 'Belum Tervalidasi' }}
                                        @if(!$mitra->validasi)
                                        <form method="POST" action="{{ route('daftarmitra.validasi', $mitra->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit">Validasi</button>
                                        </form>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <form action="" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
