@extends('layout.contact')

@section('content')
<div class="container py-5">
    <h1 class="text-light display-5 mb-4 text-center fw-bold animate-fade-in">Daftar Artikel</h1>

    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
        </div>
    @endif
    
            @if(Auth::user()->role === 'admin')
                <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-animated">Tambah Artikel</a>
        </div>
    @endif

    <div class="row">
        @forelse ($artikel as $item)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-dark text-light border-0 shadow-lg card-hover animate-zoom-in">
                    <div class="card-body">
                        <h5 class="card-title text-light">{{ $item->judul }}</h5>
                            <p class="card-text text-secondary" style="font-size: 0.9rem;">
                                {{ Str::limit($item->konten, 100) }}
                                </p>
                                    <p class="text-secondary" style="font-size: 0.8rem;">
                                            Dipublikasikan pada: {{ $item->created_at->format('d M Y') }}
                                        </p>
                                        <a href="{{ route('artikel.show', $item->id) }}" class="btn btn-outline-light btn-animated">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                    <div class="col-12">
                <p class="text-center text-secondary">Tidak ada artikel yang ditemukan.</p>
            </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $artikel->links() }}
    </div>
</div>
@endsection
