<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::all();
        return view('buku.index', compact('data'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect('/buku');
    }

    public function edit($id)
    {
        $data = Buku::find($id);
        return view('buku.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Buku::find($id);
        $data->update($request->all());
        return redirect('/buku');
    }

    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/buku');
    }
}