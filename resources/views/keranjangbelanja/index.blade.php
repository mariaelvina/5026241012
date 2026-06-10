@extends('template')
@section('title', 'Data Produk')
@section('konten')

    <h2>Produk di Keranjang Belanja</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('keranjangbelanja.create') }}"class="btn btn-warning">Beli</a>


    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse($keranjangbelanja as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>{{ number_format($row->Harga) }}</td>
                <td>{{ number_format($row->Jumlah * $row->Harga) }}</td>
                <td>
                    <form action="{{ route('keranjangbelanja.destroy', $row->ID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data Produk.</td>
            </tr>
        @endforelse
    </table>
@endsection
