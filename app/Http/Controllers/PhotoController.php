<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;


class PhotoController extends Controller
{
    public function create()
    {
        return view('photos.create');
    }

    
    public function index()
    {
        $photos = Photo::all(); 
        return view('photos.index', compact('photos')); 
    }

    public function album()
{
    $photos = Photo::all(); // Ambil semua foto
    return view('dashboard.album', compact('photos')); // Ganti dengan nama view Anda
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:225',
            'desc' => 'required|string|max:255',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 

        $imageName = time().'.'.$request->path->extension();
        $request->path->move(public_path('images'), $imageName);

        photo::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'path' => $imageName,
        ]);


        return redirect()->route('photos.index')->with(session('success'), 'photo uploaded success.');
    }

        public function destroy($id)
        {
            $photos = photo::findOrFail($id);
            $photos->delete();

        return redirect()->route('photos.create')->with('success', 'Berhasil dihapus.');
    }        
}
