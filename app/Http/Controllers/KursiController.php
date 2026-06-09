<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KursiController extends Controller
{
    public function index()
    {
        $kursi = DB::table('kursi')->orderBy('kodekursi')->get();
        return view('kursi.index', compact('kursi'));
    }

    public function create()
    {
        return view('kursi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merkkursi'  => 'required|string|max:30',
            'stockkursi' => 'required|integer|min:0',
            'tersedia'   => 'required|string|size:1|in:Y,T'
        ]);

        DB::table('kursi')->insert([
            'merkkursi'  => $request->merkkursi,
            'stockkursi' => $request->stockkursi,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect()->route('kursi.index')->with('success', 'Data kursi berhasil ditambahkan.');
    }

    public function edit($kodekursi)
    {
        $kursi = DB::table('kursi')->where('kodekursi', $kodekursi)->first();

        if (!$kursi) {
            abort(404);
        }

        return view('kursi.edit', compact('kursi'));
    }

    public function update(Request $request, $kodekursi)
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
    }

    public function destroy($kodekursi)
    {
        DB::table('kursi')->where('kodekursi', $kodekursi)->delete();

        return redirect()->route('kursi.index')->with('success', 'Data kursi berhasil dihapus.');
    }
}
