<?php

namespace App\Http\Controllers;

use App\Models\Abaout;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Produk;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $data = [
            'abaout' => Abaout::first(),
            'service' => Service::limit(4)->get(),
            'blog' => Blog::limit(4)->get(),
            'banner' => Banner::get(),
            'content' => 'home/home/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function abaout()
    {
        $data = [
            'abaout' => Abaout::first(),
            'content' => 'home/tentangkami/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function service()
    {
        $data = [
            'service' => Service::get(),
            'content' => 'home/services/index'
        ];
        return view('home.layouts.wrapper', $data);
    }


}
