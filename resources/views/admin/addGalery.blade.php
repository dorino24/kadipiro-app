@extends('layouts.main')
@section('content')
    <div class="container pt-5 mx-auto">
        <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3  text-center">
            <h2>Tambah Galery Baru</h2>
        </div>
        <div class="col-lg-6 mx-auto">
            <form method="POST" action="/galery" class="mb-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label @error('judul') is-invalid @enderror"> judul </label>
                    <input type="text" class="form-control" id="judul" name="judul" required autofocus
                        value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label @error('image') is-invalid @enderror">Foto </label>
                    <img class="img-preview img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="previewImage('#image','.img-preview')">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Tambah</button>
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
