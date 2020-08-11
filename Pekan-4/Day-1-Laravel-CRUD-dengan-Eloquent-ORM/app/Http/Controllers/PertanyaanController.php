<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;

class PertanyaanController extends Controller
{
    public function index()
    {
        // Query Builder
        // $pertanyaan = DB::table('questions')->get(); // select * from questions

        // Eloquent
        $pertanyaan = Question::all();
        return view('pertanyaans.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:questions',
            'content' => 'required'
        ]);
        // Query Builder
        // $query = DB::table('questions')->insert([
        //     "title" => $request["title"],
        //     "content" => $request["content"]
        // ]);

        // Eleqouent
        // $pertanyaan = new Question;
        // $pertanyaan->title = $request["title"];
        // $pertanyaan->content = $request["content"];
        // $pertanyaan->save();

        // Mass Assignment
        $pertanyaan = Question::create([
            "title" => $request["title"],
            "content" => $request["content"]
        ]);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Di Simpan!');
    }

    public function show($pertanyaan_id)
    {
        // Query Builder
        // $pertanyaan = DB::table('questions')->where('id', $pertanyaan_id)->first();
        // Model Eloquent
        $pertanyaan = Question::find($pertanyaan_id);
        return view('pertanyaans.show', compact('pertanyaan'));
    }

    public function edit($pertanyaan_id)
    {
        // Query Builder
        // $halaman = 'Edit';
        // $pertanyaan = DB::table('questions')->where('id', $pertanyaan_id)->first();

        // Model Eloquent
        $pertanyaan = Question::find($pertanyaan_id);
        return view('pertanyaans.edit', compact('pertanyaan'));
    }

    public function update($pertanyaan_id, Request $request)
    {
        // $request->validate([
        //     'title' => 'required|unique:questions',
        //     'content' => 'required'
        // ]);

        // Query Builder
        // $query = DB::table('questions')->where('id', $pertanyaan_id)->update([
        //     'title' => $request['title'],
        //     'content' => $request['content']
        // ]);

        $update = Question::where('id', $pertanyaan_id)->update([
            "title" => $request["title"],
            "content" => $request["content"]
        ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Update Pertanyaan!');
    }

    public function destroy($pertanyaan_id)
    {
        // Query Builder
        // $query = DB::table('questions')->where('id', $pertanyaan_id)->delete();

        // Model Eloquent
        Question::destroy($pertanyaan_id);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhail Di Delete!');
    }
}
