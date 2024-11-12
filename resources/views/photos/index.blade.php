@extends('layout.photos')

@section('content')
<div class="container">

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
                </div>
            @endif

                @if(Auth::user()->role === 'admin')
                    <section class="py-5 text-center container">
                        <div class="row py-lg-5">
                            <div class="col-lg-6 col-md-8 mx-auto">
                                <h1 class="fw-light text-white">Album</h1>
                                    <p class="lead text-white"></p>
                                        <p>
                                    <a href="/photos/create"  onclick="showContent('upload gambar')" class="btn btn-secondary my-2">Upload Gambar</a>
                                </p>
                            </div>
                        </div>
                    </section>
                @endif

                <div class="album py-5 bg-body-transparant">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach ($photos as $photo)
                                <div class="col">
                                    <div class="card shadow-sm bg-secondary">
                                        <img src="{{ asset('images/' . $photo->path) }}" class="card-img-top img-fluid" style="height: 250px; object-fit: cover;" alt="{{ $photo->title }}">
                                            <div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
                                                <h5 class="card-title text-white fw-bold">{{ $photo->title }}</h5>
                                                    <p class="card-text text-white fw-semibold">{{ $photo->desc }}</p>
                                                        <div class="d-flex justify-content-between align-items-center">

                                                            @if(Auth::user()->role === 'admin')
                                                        <div class="btn-group">
                                                        <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display:inline">
                                                    @csrf
                                                @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin untuk dihapus?')" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                    @endif

                                <small class="text-muted text-white">{{ $photo->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


</div>
@endsection
