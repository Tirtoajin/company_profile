<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Produk',
            'produk' => Produk::get(),
            'content' => 'admin/produk/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // buat nambah produk
        $data = [
            'title' => 'Tambah Produk',

            'content' => 'admin/produk/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required|min:50',
            'cover' => 'required',
        ]);
        //upload cover
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();

            $storage = 'uploads/produks/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        } else {
            $data['cover'] = null;
        }

        Alert::success('Sukses', 'Berhasil menambah data');
        Produk::create($data);
        return redirect('/admin/produk');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Edit Produk',
            'produk' => Produk::find($id),
            'content' => 'admin/produk/show'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Edit Produk',
            'produk' => Produk::find($id),

            'content' => 'admin/produk/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $produk = Produk::find($id);
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            // 'cover' => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($produk->cover != null) {
                unlink($produk->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();

            $storage = 'uploads/produks/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        } else {
            $data['cover'] = $produk->cover;
        }

        $produk->update($data);
        Alert::success('Sukses', 'Data sudah diupdate');
        return redirect('/admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $produk = Produk::find($id);

        if ($produk->cover != null) {
            unlink($produk->cover);
        }

        $produk->delete();
        Alert::success('Sukses', 'Data sudah dihapus');
        return redirect('/admin/produk');
    }
}
