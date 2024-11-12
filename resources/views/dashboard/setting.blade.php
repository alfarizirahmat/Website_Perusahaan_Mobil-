@extends('layout.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-custom">
            <div class="card-header">
                <h4>Settings</h4>
            </div>
            <div class="card-body">
                <p>Settings options will be available here.</p>
                
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
