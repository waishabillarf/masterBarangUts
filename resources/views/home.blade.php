@extends('layouts.app')

@section('content')
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barangs.index') }}">List Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! This is {{ $pageTitle }}</h4>
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
                        <p class="fs-5"><strong>Prodi :</strong> Sistem Informasi</p>
                        <p class="fs-5"><strong>Kelas :</strong> IS - 05 - 02</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
