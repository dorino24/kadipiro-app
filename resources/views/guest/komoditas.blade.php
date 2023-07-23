@extends('layouts.main')


@section('content')
    <div class="judul ">
        <div class="row ">
            <div class="col-6 p-0">
                <div class="jumbotron-kiri" style="background-image: url('../img/padi.png')";>
                </div>
            </div>
            <div class="col-6 p-0">
                <div class="jumbotron-kanan" style="background-image: url('../img/lele.png')";>
                </div>
            </div>
        </div>
        {{-- <img class="jumbotron" src="img/jumbotron.png" alt="jumbotron"> --}}
        <div class="overlay">
            <h1 class="fw-bold"> KOMODITAS </h1>
            <div style="width: 40%">
                <h4 class="mt-5">Memberdayakan komoditas utama Desa Kadipiro dalam sektor pertanian dan perikanan</h4>
            </div>
        </div>
    </div>

    <div class="row space " id="perikanan">
        <div class="kotak-krem hideme">
            <h1 class="fw-bold text-center py-4">PERIKANAN</h1>
        </div>

        <div class="container d-flex flex-wrap my-5 justify-content-start hideme" >
            @foreach ($perikanan as $post)
                <div class="card m-5" style="max-width:350px; border-radius:15px; ">
                    <img src="{{ asset('storage/' . $post->image) }}" style=" object-fit: cover;height:250px" class="card-img-top" alt="perikanan">
                    <div class="card-body">
                        <h4 class="card-title fw-bold text-center">{{ $post->judul }}</h4>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <div style="text-align: right">
                            <a href="/artikel/{{ $post->short }}" class="btn"
                                style="background-color:
                      #5F8D4E; color:white; border-radius: 15px">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="row space" id="pertanian">
        <div class="kotak-krem hideme">
            <h1 class="fw-bold text-center py-4">PERTANIAN</h1>
        </div>
        <div class="container d-flex flex-wrap my-5 justify-content-start hideme">
            @foreach ($pertanian as $post)
                <div class="card m-5" style="max-width:350px; border-radius:15px; ">
                    <img src="{{ asset('storage/' . $post->image) }}" style=" object-fit: cover;height:250px" class="card-img-top" alt="padi">
                    <div class="card-body">
                        <h4 class="card-title fw-bold text-center">{{ $post->judul }}</h4>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <div style="text-align: right">
                            <a href="/artikel/{{ $post->short }}" class="btn"
                                style="background-color:
                      #5F8D4E; color:white; border-radius: 15px">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row space hideme">
        <div class="peta-card mx-auto" style="width: 80% ">
            <h2 class="fw-bold pt-5 text-center">LOKASI KOMODITAS</h2>
            <hr width="90%" size="1px" class="mx-auto" color="#E5D9B6" style="border: 2px solid #E5D9B6;opacity: 1">
            <div class="row justify-content-center my-5">
                <div class="col-6 px-5 align-self-center" style="max-width: 90%">
                    <h2 class="text-center fw-bold">PERIKANAN</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.567433307695!2d111.07704524068602!3d-7.504730830123148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1dfa259173b7%3A0x5027a76e355b4e0!2sKadipiro%2C%20Kec.%20Sambirejo%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689940957284!5m2!1sid!2sid"
                        width="100%" height="400" style="border:1px solid black;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://goo.gl/maps/Fo3eA67Yw27cmP5P6" target="_blank">
                        <button class="btn-bukapeta">
                            Buka Peta
                        </button>
                    </a>
                </div>
                <div class="col-6 px-5 align-self-center" style="max-width: 90%">
                    <h2 class="text-center fw-bold ">PERTANIAN</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.567433307695!2d111.07704524068602!3d-7.504730830123148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1dfa259173b7%3A0x5027a76e355b4e0!2sKadipiro%2C%20Kec.%20Sambirejo%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689940957284!5m2!1sid!2sid"
                        width="100%" height="400" style="border:1px solid black;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://goo.gl/maps/Fo3eA67Yw27cmP5P6" target="_blank">
                        <button class="btn-bukapeta">
                            Buka Peta
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
