<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $halaman = 'Pertanyaan';
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('pertanyaans.index', ['halaman' => $halaman], compact('pertanyaan'));
    }

    public function create()
    {
        $halaman = "Buat Pertanyaan";
        return view('pertanyaans.form', ['halaman' => $halaman]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaans',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Di Simpan!');
    }

    public function show($pertanyaan_id)
    {
        $halaman = 'Show';
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaans.show', compact('pertanyaan'), ['halaman' => $halaman]);
    }

    public function edit($pertanyaan_id)
    {
        $halaman = 'Edit';
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'), ['halaman' => $halaman]);
    }

    public function update($pertanyaan_id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaans',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Update Questions!');
    }

    public function destroy($pertanyaan_id)
    {
        $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'Question Berhail Di Delete!');
    }
}
