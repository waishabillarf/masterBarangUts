@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h4>{{ $pageTitle ?? 'Home' }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Sayangnya kecerdasan tidak bisa di download. {{ $pageTitle ?? 'Home' }}</h4>
        </div>
    </div>

    <div class="container mt-4">
        <h4 class="fw-bold">Biodata Mahasiswa</h4>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="fs-5"><strong>Judul :</strong> Cloud Computing</p>
                        <p class="fs-5"><strong>NIM  :</strong> opo jare</p>
                        <p class="fs-5"><strong>Prodi :</strong> Fakultas Rekayasa Industri </p>
                        <p class="fs-5"><strong>Kelas :</strong> 02 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
