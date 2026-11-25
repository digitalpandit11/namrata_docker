<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'postCount'  => Post::count(),
            'adminCount' => User::where('is_admin', true)->count(),
        ]);
    }
}
