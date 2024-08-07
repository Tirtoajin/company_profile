<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Banner',
            'banner' => Banner::get(),
            'content' => 'admin/banner/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // buat nambah banner
        $data = [
            'title' => 'Tambah Banner',
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat valdasi form banner
        //dd($request->all());
        $data = $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            'gambar' => 'required',
        ]);

        $data['urutan'] = 0;
        //upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }

        Alert::success('Sukses', 'Berhasil menambah data');
        Banner::create($data);
        return redirect('/admin/banner');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Edit Banner',
            'banner' => Banner::find($id),
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $banner = Banner::find($id);
        $data = $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            // 'urutan' => 'required',
            // 'gambar' => 'required',
        ]);

        $data['urutan'] = 0;
        //upload gambar
        if ($request->hasFile('gambar')) {

            if ($banner->gambar != null) {
                unlink($banner->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = $banner->gambar;
        }

        $banner->update($data);
        Alert::success('Sukses', 'Data sudah diupdate');
        return redirect('/admin/banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $banner = Banner::find($id);

        if ($banner->gambar != null) {
            unlink($banner->gambar);
        }

        $banner->delete();
        Alert::success('Sukses', 'Data sudah dihapus');
        return redirect('/admin/banner');
    }
}
