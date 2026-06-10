<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NilaiController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->orderBy('ID')->get();
        return view('nilaikuliah.index', compact('nilaikuliah'));
    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP'        => 'required|string',
            'NilaiAngka' => 'required|integer|min:0',
            'SKS'        => 'required|integer|min:0'
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

    return redirect()->route('nilaikuliah.index')->with('success', 'Data Nilai berhasil ditambahkan.');
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

    /*public function destroy($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect()->route('keranjangbelanja.index')->with('success', 'Produk berhasil dibatalkan.');
    }*/
}
