<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $user = Auth::user(); 
    $user->name = $request->name;
    $user->email = $request->email;
    $data = [
        'email' => $request->email
    ];
    $data = [
        'name' => $request->name
    ];

    // Perbarui password jika diisi
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password); // Enkripsi password
    }

    $user->save;

    return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
}

}

