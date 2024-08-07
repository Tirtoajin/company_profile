<?php

namespace App\Http\Controllers;

use App\Models\Abaout;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Abaout',
            'abaout' => Abaout::first(),
            'content' => 'admin/abaout/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
        //
        $abaout = Abaout::first();
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            //'cover' => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($abaout->cover != null) {
                unlink($abaout->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();

            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        } else {
            $data['cover'] = $abaout->cover;
        }

        $abaout->update($data);
        Alert::success('Sukses', 'Data sudah diupdate');
        return redirect('/admin/abaout');
    }
}
