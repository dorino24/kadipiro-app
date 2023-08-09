@extends('layouts.main')
@section('content')
    <div class="container pt-5 mx-auto">
        <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3  text-center">
            <h2>Buat Postingan Baru</h2>
        </div>

        <div class="col-lg-6 mx-auto">
            <form method="POST" action="/post" class="mb-5" enctype="multipart/form-data">
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
                    <label for="category" class="form-label"> Category </label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $kategori)
                            @if (old('category_id') == $kategori->id)
                                <option value="{{ $kategori->id }}" selected>{{ $kategori->category }}</option>
                            @else
                                <option value="{{ $kategori->id }}">{{ $kategori->category }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label @error('harga') is-invalid @enderror"> Harga  </label>
                    <input type="text" class="form-control" id="harga" name="harga" required autofocus
                        value="{{ old('harga') }}">
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nomor" class="form-label @error('nomor') is-invalid @enderror"> Nomor WA </label>
                    <div class="form-control border border-0 p-0">
                        <input type="number" disabled value="+62" placeholder="+62" style="width: 11%">
                        <input type="number" class="form-control" style="width:88%; display: inline;" id="nomor"
                            name="nomor" required autofocus value="{{ old('nomor') }}">
                    </div>
                    @error('nomor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label @error('alamat') is-invalid @enderror"> Alamat </label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required autofocus
                        value="{{ old('alamat') }}">
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label @error('image') is-invalid @enderror">Thumbnail </label>
                    <img class="img-preview img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="previewImage('#image','.img-preview')">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image2" class="form-label @error('image2') is-invalid @enderror">Image 2 </label>
                    <img class="img-preview2 img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('image2') is-invalid @enderror" type="file" id="image2"
                        name="image2" onchange="previewImage('#image2','.img-preview2')">
                    @error('image2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image3" class="form-label @error('image3') is-invalid @enderror">Image 3 </label>
                    <img class="img-preview3 img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('image3') is-invalid @enderror" type="file" id="image3"
                        name="image3" onchange="previewImage('#image3','.img-preview3')">
                    @error('image3')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image4" class="form-label @error('image4') is-invalid @enderror">Image 4 (optional)
                    </label>
                    <img class="img-preview4 img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('image4') is-invalid @enderror" type="file" id="image4"
                        name="image4" onchange="previewImage('#image4','.img-preview4')">
                    @error('image4')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image5" class="form-label @error('image5') is-invalid @enderror">Image 5
                        (optional)</label>
                    <img class="img-preview5 img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('image5') is-invalid @enderror" type="file" id="image5"
                        name="image5" onchange="previewImage('#image5','.img-preview5')">
                    @error('image5')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image6" class="form-label @error('image6') is-invalid @enderror">Image 6 (optional)
                    </label>
                    <img class="img-preview6 img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('image6') is-invalid @enderror" type="file" id="image6"
                        name="image6" onchange="previewImage('#image6','.img-preview6')">
                    @error('image6')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label"> isi </label>
                    @error('isi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}">
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
