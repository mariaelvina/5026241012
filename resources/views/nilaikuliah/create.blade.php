@extends('template')
@section('title', 'Tambah Data Nilai')
@section('konten')

    <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header fw-bold">
            Form Tambah Data Nilai
        </div>

        <div class="card-body">
            <form action="{{ route('nilaikuliah.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" maxlength="11" value="{{ old('NRP') }}" placeholder="Masukkan NRP">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiAngka" id="NilaiAngka" class="form-control" min="0" value="{{ old('Nilai Angka') }}" placeholder="Masukkan nilai (angka)">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="SKS" id="SKS" class="form-control" min="0" value="{{ old('SKS') }}" placeholder="Masukkan jumlah SKS">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data Nilai" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
