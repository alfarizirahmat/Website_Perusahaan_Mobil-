@extends('layout.artikel')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <h1 class="text-light display-4 mb-3 animate-fade-in">{{ $artikel->judul }}</h1>
                <p class="text-secondary mb-4 animate-fade-in" style="font-size: 0.9rem;">
                    Dipublikasikan pada: {{ $artikel->created_at->format('d M Y') }}
                </p>

                @if ($artikel->gambar)
                    <div class="mb-4 text-center animate-zoom-in">
                        <img src="{{ asset('storage/' . $artikel->gambar) }}" class="img-fluid rounded shadow-lg" alt="Gambar Artikel">
                    </div>
                @endif

                <div class="text-light article-content animate-fade-in" style="line-height: 1.7;">
                    <p>{!! nl2br(e($artikel->konten)) !!}</p>
                </div>

                <div class="mt-5 text-center">
                    <a href="{{ route('artikel.index') }}" class="btn btn-outline-primary btn-animated">Kembali ke Daftar Artikel</a>
                        </div>
                            @if(Auth::user()->role === 'admin')
                        <div class="mt-5 text-center">
                    <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-outline-primary btn-animated">Edit Artikel</a>
                </div>            
            @endif
        </div>
    </div>
</div>
@endsection
