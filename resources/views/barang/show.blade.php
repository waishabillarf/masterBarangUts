@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-xl-4">
                <div class="p-5 bg-light rounded-3 border">
                    <div class="mb-3 text-center">
                        <i class="bi bi-person-circle fs-1"></i>
                        <h4 class="mt-2">Detail Barang</h4>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <h5>{{ $barang->nama_barang }}</h5>
                    </div>
                    <div class="mb-3">
                        <label for="hargaBarang" class="form-label">Harga Barang</label>
                        <h5>{{ $barang->harga_barang }}</h5>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $barang->deskripsi_barang }}</h5>
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <h5>{{ $barang->satuan->nama_satuan }}</h5>
                    </div>
                    <hr>
                    <div class="d-grid">
                        <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                            <i class="bi bi-arrow-left-circle-fill me-2"></i> Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
