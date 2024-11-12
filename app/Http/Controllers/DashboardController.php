<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artikel;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Dashboard.index');
    }

    public function album()
    {
        return view('Dashboard.album');
    }

    public function user()
    {

        $users = User::all();

        return view('Dashboard.user', compact('users'));
    }

    public function setting()
    {
        $artikel = Artikel::latest()->paginate(5);

        return view('dashboard.setting', compact('artikel'));
    }

}
