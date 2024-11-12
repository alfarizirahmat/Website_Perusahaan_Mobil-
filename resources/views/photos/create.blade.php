@extends('layout.photos')

@section('content')
<div class="container">

    <div class="container" style="margin-top: 100px">
        <h2 class="">Upload Foto</h2>
            <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label text-white">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                    <div class="mb-3">
                                        <label for="desc" class="form-label text-white">Keterangan</label>
                                    <input type="text" class="form-control" id="desc" name="desc" required>
                                </div>
                            <div class="mb-3">
                        <label for="path" class="form-label text-white">Foto yang akan di Upload</label>
                    <input type="file" class="form-control" id="path" name="path" required>
                </div>
            <button type="submit" class="btn btn-success">Kirim</button>
        </form>
    </div>
</div>
@endsection
