<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeProdukController extends Controller
{
    //
    function index()
    {
        $data = [
            'produk' => Produk::get(),
            'content' => 'home/produk/index'
        ];
        return view('home.layouts.wrapper', $data);
    }
    public function show(string $id)
    {
        //
        $data = [
            'produk' => Produk::find($id),
            'content' => 'home/produk/show'
        ];
        return view('home.layouts.wrapper', $data);
    }
}
