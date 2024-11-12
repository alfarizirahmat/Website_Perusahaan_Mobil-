<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $photos = Photo::all(); // Ambil semua foto
        return view('dashboard.album', compact('photos'));
    }
}

