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
                        <p class="fs-5"><strong>Anggota :</strong> Ahmad Sukron Faishal Ashari</p>
                        <p class="fs-5"><strong>Anggota :</strong> Waishabilla Rahadian Firdaus</p>
                        <p class="fs-5"><strong>Anggota :</strong> Muhammad Rayhan Labib Afifi</p>
                        <p class="fs-5"><strong>Anggota :</strong> Muhammad Gabriel Araaf</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
