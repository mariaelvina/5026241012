<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjangbelanja.index', compact('keranjangbelanja'));
    }

    public function create()
    {
        return view('keranjangbelanja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer|digits_between:1,11',
            'Jumlah'     => 'required|integer|min:0',
            'Harga'      => 'required|integer|min:0'
        ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);

    return redirect()->route('keranjangbelanja.index')->with('success', 'Produk berhasil ditambahkan.');
}

   /* public function edit($kodekursi)
    {
        $kursi = DB::table('keranjangbelanja')->where('ID', $ID)->first();

        if (!$keranjangbelanja) {
            abort(404);
        }

        return view('kursi.edit', compact('kursi'));
    }*/

   /* public function update(Request $request, $kodekursi)
    {
        $request->validate([
            'merkkursi'  => 'required|string|max:30',
            'stockkursi' => 'required|integer|min:0',
            'tersedia'   => 'required|string|size:1|in:Y,T',
        ]);

        DB::table('kursi')
            ->where('kodekursi', $kodekursi)
            ->update([
                'merkkursi'  => $request->merkkursi,
                'stockkursi' => $request->stockkursi,
                'tersedia'   => $request->tersedia,
            ]);

        return redirect()->route('kursi.index')->with('success', 'Data kursi berhasil diubah.');
    }*/

    public function destroy($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect()->route('keranjangbelanja.index')->with('success', 'Produk berhasil dibatalkan.');
    }
}
