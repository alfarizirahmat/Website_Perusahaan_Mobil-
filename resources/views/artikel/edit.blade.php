@extends('layout.artikel')

@section('content')
<h1 class="text-white">Edit Artikel</h1>
<hr>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ isset($artikel) ? route('artikel.update', $artikel->id) : route('artikel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        @if(isset($artikel)) @method('PUT') @endif
            <div class="mb-3">
                <label for="judul" class="form-label text-white">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $artikel->judul ?? '') }}">
                        </div>
                    <div class="mb-3">
                <label for="konten" class="form-label text-white">Konten</label>
            <textarea name="konten" class="form-control" rows="4">{{ old('konten', $artikel->konten ?? '') }}</textarea>
        </div>
    <button type="submit" class="btn btn-success">{{ isset($artikel) ? 'Update' : 'Simpan' }}</button>
</form>

@if(isset($artikel))
            <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" class="mt-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus Artikel</button>
            </form>
            @endif
@endsection
