<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->paginate(5);
        return view('dashboard.setting', compact('artikel'));
    }
}