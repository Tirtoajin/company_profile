<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Pesan;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    function index()
    {
        $data = [
            'pesan' => Pesan::count(),
            'blog' => Blog::count(),
            'service' => Service::count(),
            'user' => User::count(),

            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
