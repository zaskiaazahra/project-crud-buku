<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', compact('data'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect('/produk');
    }

    public function edit($id)
    {
        $data = Produk::find($id);
        return view('produk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->update($request->all());
        return redirect('/produk');
    }

    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect('/produk');
    }
}