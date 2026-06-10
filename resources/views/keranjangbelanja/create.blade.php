@extends('template')
@section('title', 'Tambah Data Produk')
@section('konten')

    <a href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header fw-bold">
            Form Tambah Data Produk
        </div>

        <div class="card-body">
            <form action="{{ route('keranjangbelanja.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" maxlength="11" value="{{ old('KodeBarang') }}" placeholder="Masukkan kode barang...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="Jumlah" id="Jumlah" class="form-control" min="0" value="{{ old('Jumlah') }}" placeholder="Masukkan jumlah...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="Harga" id="Harga" class="form-control" min="0" value="{{ old('Harga') }}" placeholder="Masukkan harga...">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data Produk" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
