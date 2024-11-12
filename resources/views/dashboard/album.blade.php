@extends('layout.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-custom">
            <div class="card-header">
                <h4>Photo Albums</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    @foreach($photos as $photo)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/' . $photo->path) }}" class="card-img-top" alt="{{ $photo->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $photo->title }}</h5>
                                <p class="card-text">{{ $photo->desc }}</p>
                                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if($photos->isEmpty())
                    <p>No photos found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
