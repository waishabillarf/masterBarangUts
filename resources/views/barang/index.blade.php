@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>{{ $pageTitle }}</h4>
            <a href="{{ route('barangs.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Id</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga_barang }}</td>
                        <td>{{ $barang->deskripsi_barang }}</td>
                        <td>{{ $barang->satuan->nama_satuan }}</td>
                        <td>@include('barang.action')</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
