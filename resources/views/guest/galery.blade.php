@extends('layouts.main')


@section('content')
    <div class="row" id="galery">
        <div class="container ">
            <div class="row my-5    ">
                @foreach ($galery as $galeri)
                    <div class="col-md-6">
                        <div class="card m-5 mb-1  text-center" style="border:none;box-shadow:none">
                            <img src="{{ asset('storage/' . $galeri->image) }}"
                                style=" object-fit: cover;height:250px; "class="card-img-top rounded-4" alt="perikanan">
                            <h5 class="py-3">{{ $galeri->judul }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
