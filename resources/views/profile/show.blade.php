@extends('layout.log')

@section('content')
<div class="container py-5">
    <h1 class="text-light mb-4">Pengaturan Profil</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="mb-3">
                            <label for="text" class="label text-light">Nama User</label>
                                    <input type="user" class="form-control" id="user" name="user" value="{{ Auth::user()->name }}" >
                                </div>

                                <div class="mb-3">
                            <label for="email" class="form-label text-light">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                    </div>

                <div class="mt-5 text-center">
            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-primary btn-animated">edit</a>
        </div>     
    </form>
</div>
@endsection
