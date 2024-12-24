@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h4>{{ $pageTitle ?? 'Home' }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! This is {{ $pageTitle ?? 'Home' }}</h4>
        </div>
    </div>

    <div class="container mt-4">
        <h4 class="fw-bold">Biodata Mahasiswa</h4>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="fs-5"><strong>Nama :</strong> Waishabilla Rahadian Firdaus</p>
                        <p class="fs-5"><strong>NIM  :</strong> 1204220074</p>
                        <p class="fs-5"><strong>Prodi :</strong> Fakultas Rekayasa Industri </p>
                        <p class="fs-5"><strong>Kelas :</strong> SISFOR </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
