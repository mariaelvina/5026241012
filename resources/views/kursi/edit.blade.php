@extends('template')
@section('title', 'Edit Data Kursi')
@section('konten')

    <a href="{{ route('kursi.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header fw-bold">
            Form Edit Data Kursi
        </div>

        <div class="card-body">
            <form action="{{ route('kursi.update', $kursi->kodekursi) }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="merkkursi" class="col-sm-2 col-form-label">Merk Kursi</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkkursi" id="merkkursi" class="form-control" maxlength="30" value="{{ old('merkkursi', $kursi->merkkursi) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockkursi" class="col-sm-2 col-form-label">Stok Kursi</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockkursi" id="stockkursi" class="form-control" min="0" value="{{ old('stockkursi', $kursi->stockkursi) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <div class="form-check form-switch fs-5">
                            <input class="form-check-input" type="checkbox" role="switch" id="toggleTersedia"
                                   {{ old('tersedia', $kursi->tersedia) == 'Y' ? 'checked' : '' }}>
                            <label class="form-check-label text-muted ms-2" id="labelTersedia">Ya</label>
                        </div>
                        <input type="hidden" name="tersedia" id="tersedia" value="{{ old('tersedia', $kursi->tersedia) }}">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        const toggle = document.getElementById('toggleTersedia');
        const label = document.getElementById('labelTersedia');
        const hiddenInput = document.getElementById('tersedia');

        function updateToggleState() {
            if (toggle.checked) {
                label.innerText = 'Ya';
                hiddenInput.value = 'Y';
            } else {
                label.innerText = 'Tidak';
                hiddenInput.value = 'T';
            }
        }

        updateToggleState();

        toggle.addEventListener('change', updateToggleState);

        function validasiForm() {
            let merkkursi = document.getElementById('merkkursi').value.trim();
            let stockkursi = document.getElementById('stockkursi').value.trim();
            let tersedia = document.getElementById('tersedia').value;

            if (merkkursi === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Merk kursi wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (merkkursi.length > 30) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Merk kursi maksimal 30 karakter",
                    icon: "error"
                });
                return false;
            }

            if (stockkursi === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stok kursi wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (parseInt(stockkursi) < 0) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stok kursi tidak boleh kurang dari 0",
                    icon: "error"
                });
                return false;
            }

            if (tersedia !== 'Y' && tersedia !== 'T') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Status tersedia hanya boleh berisi Y atau T",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
