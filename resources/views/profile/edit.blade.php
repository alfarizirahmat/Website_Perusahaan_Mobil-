@extends('layout.app')

@section('content')
<div class="container py-5">

    <h1 class="text-white">Edit Profil</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="text" class="label text-light">Nama User</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                            @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label text-white">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                <div class="mb-3">
                            <label for="password" class="form-label text-white">Password Baru (Opsional)</label>
                        <input type="password" class="form-control" id="password" name="password" value="">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label text-white">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('profile.show') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
