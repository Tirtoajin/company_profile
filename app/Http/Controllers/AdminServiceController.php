<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Service',
            'service' => Service::get(),
            'content' => 'admin/service/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // buat nambah service
        $data = [
            'title' => 'Tambah Service',
            'content' => 'admin/service/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat valdasi form service
        //dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'desc' => 'required',

        ]);


        Alert::success('Sukses', 'Berhasil menambah data');
        Service::create($data);
        return redirect('/admin/service');

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
            'title' => 'Edit Service',
            'service' => Service::find($id),
            'content' => 'admin/service/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $service = Service::find($id);
        $data = $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'desc' => 'required',

        ]);



        $service->update($data);
        Alert::success('Sukses', 'Data sudah diupdate');
        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service = Service::find($id);
        $service->delete();
        Alert::success('Sukses', 'Data sudah dihapus');
        return redirect('/admin/service');
    }
}
