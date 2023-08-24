@extends('layouts.main')

@section('content')
    <div class="judul">
        <div class="row">
            <div class="col-6 p-0">
                <div class="jumbotron-kiri" style="background-image: url('../img/kayu.jpg')";>
                </div>
            </div>
            <div class="col-6 p-0">
                <div class="jumbotron-kanan" style="background-image: url('../img/mie.jpg')";>
                </div>
            </div>
        </div>
        {{-- <img class="jumbotron" src="img/jumbotron.png" alt="jumbotron"> --}}
        <div class="overlay">
            <h1 class="fw-bold"> UMKM </h1>
            <div style="width: 40%">
                <h4 class="mt-5">Mengembangkan UMKM untuk meningkatkan ekonomi masyarakat Desa Kadipiro dalam bidang
                    kuliner dan kerajinan</h4>
            </div>
        </div>
    </div>

    <div class="row space" id="kuliner">
        <div class="kotak-krem hideme">
            <h1 class="fw-bold text-center py-4">KULINER</h1>
        </div>
        <div class="container my-5 hideme">
            <div class="row">
                @foreach ($kuliner as $post)
                    <div class="col-md-4 my-5 px-4">
                        <div class="card p-0  h-100" style=" border-radius:15px; ">
                            <img src="{{ asset('storage/' . $post->image) }}"
                                style=" object-fit: cover;height:250px;width:100%" class="card-img-top" alt="perikanan">
                            <div class="card-body">
                                <h4 class="card-title fw-bold text-center">{{ $post->judul }}</h4>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <div style="text-align: right">
                                    <a href="/artikel/{{ $post->short }}" class="btn"
                                        style="background-color:#5F8D4E; color:white; border-radius: 15px">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </div>
    <div class="row space" id="kerajinan">
        <div class="kotak-krem hideme">
            <h1 class="fw-bold text-center py-4">KERAJINAN</h1>
        </div>
        <div class="container my-5 ">
            <div class="row">
                @foreach ($kerajinan as $post)
                    <div class="col-md-4 my-5 px-4">
                        <div class="card p-0  h-100" style=" border-radius:15px; ">
                            <img src="{{ asset('storage/' . $post->image) }}"
                                style=" object-fit: cover;height:250px;width:100%" class="card-img-top" alt="perikanan">
                            <div class="card-body">
                                <h4 class="card-title fw-bold text-center">{{ $post->judul }}</h4>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <div style="text-align: right">
                                    <a href="/artikel/{{ $post->short }}" class="btn"
                                        style="background-color:#5F8D4E; color:white; border-radius: 15px">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="row space hideme">
        <div class="peta-card mx-auto" style="width: 80% ">
            <h2 class="fw-bold pt-5 text-center">LOKASI UMKM</h2>
            <hr width="90%" size="1px" class="mx-auto" color="#E5D9B6" style="border: 2px solid #E5D9B6;opacity: 1">
            <div class="row justify-content-center my-5">
                <div class="col-6 px-5 align-self-center" style="max-width: 90%">
                    <h2 class="text-center fw-bold">KULINER</h2>
                    {{-- <iframe src="https://www.google.com/maps/d/embed?mid=1W3pJSfKSkN210w9F3R4S6-ykieq0DN0&ehbc=2E312F" width="640" height="480"></iframe> --}}
                    <iframe
                        src="https://www.google.com/maps/d/embed?mid=1W3pJSfKSkN210w9F3R4S6-ykieq0DN0&ehbc=2E312F"
                        width="100%" height="400" style="border:1px solid black;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://www.google.com/maps/d/u/0/edit?mid=1W3pJSfKSkN210w9F3R4S6-ykieq0DN0&usp=sharing" target="_blank">
                        <button class="btn-bukapeta">
                            Buka Peta
                        </button>
                    </a>
                </div>
                <div class="col-6 px-5 align-self-center" style="max-width: 90%">
                    <h2 class="text-center fw-bold ">KERAJINAN</h2>
                    <iframe
                        src="https://www.google.com/maps/d/embed?mid=1j1e3rGpIEwiFpJY0eDKpwmFTD0fpD5w&ehbc=2E312F"
                        width="100%" height="400" style="border:1px solid black;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://www.google.com/maps/d/u/0/edit?mid=1j1e3rGpIEwiFpJY0eDKpwmFTD0fpD5w&usp=sharing" target="_blank">
                        <button class="btn-bukapeta">
                            Buka Peta
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
