@extends('template')
@section('title', 'Data Kursi')
@section('konten')

    <h2>Edit Data Kursi</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('kursi.update', $kursi->kodekursi) }}" method="POST" onsubmit="return validasiForm()">
        @csrf
        @method('PUT')

        <p>
            <label>Merk Kursi</label><br>
            <input type="text" name="merkkursi" id="merkkursi" maxlength="30" value="{{ old('merkkursi', $kursi->merkkursi) }}">
        </p>

         <p>
            <label>Stok Kursi</label><br>
            <input type="number" name="stockkursi" id="stockkursi" min="0" value="{{ old('stockkursi', $kursi->stockkursi) }}">
        </p>

        <p>
            <label>Tersedia</label><br>
            <select name="tersedia" id="tersedia">
                <option value="Y" {{ old('tersedia', $kursi->tersedia) == 'Y' ? 'selected' : '' }}>Ya</option>
                <option value="T" {{ old('tersedia', $kursi->tersedia) == 'T' ? 'selected' : '' }}>Tidak</option>
            </select>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('kursi.index') }}">Kembali</a>
    </form>

    <script>
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

            if (tersedia === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Status ketersediaan wajib dipilih",
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
