@extends('layouts.main')
@section('content')
    <div class="container pt-5 mx-auto">
        <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3  text-center">
            <h2>Buat Postingan Baru</h2>
        </div>

        <div class="col-lg-6 mx-auto">
            <form method="POST" action="/post/{{ $post->short }}" class="mb-5" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="judul" class="form-label @error('judul') is-invalid @enderror"> judul </label>
                    <input type="text" class="form-control" id="judul" name="judul" required autofocus
                        value="{{ old('title', $post->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label"> Category </label>
                    <select class="form-select" name="category_id">

                        @foreach ($categories as $kategori)
                            @if ($post->category_id == $kategori->id)
                                <option value="{{ $kategori->id }}" selected>{{ $kategori->category }}</option>
                            @else
                                <option value="{{ $kategori->id }}">{{ $kategori->category }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label @error('image') is-invalid @enderror">Thumbnail </label>
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-2 col-sm-5 d-block">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="previewImage('#image','.img-preview')">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image2" class="form-label @error('image2') is-invalid @enderror">Image 2 </label>
                    <img src="{{ asset('storage/' . $post->image2) }}" class="img-preview2 img-fluid mb-2 col-sm-5 d-block">
                    <input class="form-control @error('image2') is-invalid @enderror" type="file" id="image2"
                        name="image2" onchange="previewImage('#image2','.img-preview2')">
                    @error('image2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image3" class="form-label @error('image3') is-invalid @enderror">Image 3 </label>
                    <img src="{{ asset('storage/' . $post->image3) }}"
                        class="img-preview3 img-fluid mb-2 col-sm-5 d-block">
                    <input class="form-control @error('image3') is-invalid @enderror" type="file" id="image3"
                        name="image3" onchange="previewImage('#image3','.img-preview3')">
                    @error('image3')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label"> isi </label>
                    @error('isi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="isi" type="hidden" name="isi" value="{{ old('body', $post->isi) }}"">
                    <trix-editor input="isi"></trix-editor>
                </div>

                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>

    <script>
        function previewImage(param, param2) {
            const image = document.querySelector(param);
            const imgPreview = document.querySelector(param2);

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;

            }
        }
    </script>
@endsection
