@extends('layouts.main')


@section('content')
    <div class="judul ">
        <div class="jumbotron" style="background-image: url('../img/jumbotron.jpg');">
        </div>
        {{-- <img class="jumbotron" src="img/jumbotron.png" alt="jumbotron"> --}}
        <div class="overlay">
            <h2 class="fw-bold">SELAMAT DATANG !</h2>
            <hr width="10%" size="1px" class="mx-auto" color="#E5D9B6" style="border: 2px solid #E5D9B6;opacity: 1">
            <h1 class="fw-bold pt-5">DESA KADIPIRO</h1>
            <h1 class="fw-bold">SRAGEN JAWA TENGAH</h1>
            <div class="pt-4">
                <a href="/komoditas">
                    <button class="btn-krem">Komoditas</button>
                </a>
                <a href="/umkm">
                    <button class="btn-krem">UMKM</button>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row space hideme">
            <div class="col-6 align-self-center">
                <img src="img/desa.jpg" alt="" width="100%">
            </div>
            <div class="col-6 p-5 align-self-center">
                <h3 class="fw-bold">DESA KADIPIRO</h3>
                <p class="justify pt-3 fw-normal">Desa Kadipiro terletak di Kecamatan Sambirejo, Kabupaten Sragen, Provinsi
                    Jawa Tengah. Desa Kadipiro memiliki 3 wilayah kebayanan, yaitu : Kebayanan Kadipiro, Kebayanan Geneng,
                    dan Kebayanan Ledok. Dengan luas 3500 m² kondisi geografis Desa Kadipiro berada pada Lereng Gunung Lawu
                    berketinggian +- 200 MDPL. Jumlah penduduk +-4500 jiwa dengan mayoritas sebagai petani/pekebun.</p>
            </div>
        </div>
        <div class="row space hideme">
            <div class="col-6 p-5">
                <h3 class="fw-bold pt-5 text-center">VISI</h3>
                <hr width="3%" color="#285430" size="5px" class="mx-auto mt-0"
                    style="border: 2px solid #285430;opacity: 1" />
                <p class="justify pt-3 fw-normal">
                    Terwujudnya Pelayanan Terpada yang Prima di Desa Kadipiro
                </p>
            </div>
            <div class="col-6 p-5">
                <h3 class="fw-bold pt-5 text-center">MISI</h3>
                <hr width="3%" color="#285430" size="5px" class="mx-auto mt-0"
                    style="border: 2px solid #285430;opacity: 1" />
                <ol class="justify pt-3 fw-normal">
                    <li>
                        Mewujudkan pelayanan publik yang efektif, efisien, dan transparan
                    </li>
                    <li>
                        Peningkatan kualitas SDM yang Profesional dan Transparan
                    </li>
                    <li>
                        Meningkatakan sarana dan prasarana yang memadai
                    </li>
                </ol>
            </div>
        </div>
        <div class="mx-auto space hideme">
            <h3 class="fw-bold pt-5 text-center">IKON DESA KADIPIRO</h3>
            <div class="mx-auto mt-5 vidcon d-flex justify-content-center" id="video_div">
                <button id="buttonPlay" class="buttonPlay">
                    <img src={{ asset('/img/carbon_play-filled.png') }} alt="xx" width="100%">
                </button>
                <video id="banner-video" class="rounded-2 " preload="auto" height="360" loop
                    poster={{ asset('/img/jumbotron.jpg') }}>
                    <source src={{ asset('video/Video.mp4') }} type="video/mp4">
                </video>
            </div>
            <div class="d-flex justify-content-center my-5 rounded-3 mx-auto hideme galery_beranda" style="border: 1px solid black">
                <div id="carouselExampleIndicators" class="carousel  slide " style="width: 100%; height:100%">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img\1.jpeg') }}" class="d-block w-100 "
                                style=" object-fit: fill;height: 250px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img\2.jpeg') }}" class="d-block w-100 "
                                style=" object-fit: fill;height: 250px; alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img\3.jpg') }}" class="d-block w-100 "
                                style=" object-fit: fill;height: 250px; alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <p class="w-75">Jembatan Gantung Kedung Klaras melintasi keindahan Desa Kadipiro dengan pemandangan yang menawan. Di bawahnya, sawah hijau terhampar luas, menciptakan panorama yang menenangkan. Di cakrawala, Gunung Lawu yang menjulang menambahkan latar belakang yang megah. Suara gemericik air sungai yang mengalir di bawah jembatan menambahkan sentuhan alami. Sebagai ikon pariwisata Desa Kadipiro, jembatan ini menggambarkan harmoni alam dan menyambut para wisatawan untuk menikmati keindahan sederhana yang diberikan oleh lingkungan sekitar.</p>
            </div>
        </div>

        <div class="peta-card mx-auto space hideme">
            <h3 class="fw-bold pt-5 text-center">LOKASI DESA KADIPIRO</h3>
            <hr width="80%" size="1px" class="mx-auto" color="#E5D9B6"
                style="border: 2px solid #E5D9B6;opacity: 1">
            <div style="width: 60%" class="mx-auto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.567433307695!2d111.07704524068602!3d-7.504730830123148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1dfa259173b7%3A0x5027a76e355b4e0!2sKadipiro%2C%20Kec.%20Sambirejo%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689940957284!5m2!1sid!2sid"
                    width="100%" style="border:1px solid black; height: 35vw" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a href="https://goo.gl/maps/Fo3eA67Yw27cmP5P6" target="_blank">
                    <button class="btn-bukapeta">
                        Buka Peta
                    </button>
                </a>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                var ctrlVideo = document.getElementById("banner-video");
                $('#buttonPlay').click(function() {
                    // ctrlVideo.play();
                    if ($('#buttonPlay').hasClass("active")) {
                        ctrlVideo.pause();
                        // $('#buttonPlay').html("play");
                        $('#buttonPlay').toggleClass("active");
                    } else {
                        ctrlVideo.play();
                        // $('#buttonPlay').html("Pause");
                        $('#buttonPlay').toggleClass("active");
                    }
                });
            });
        </script>
    @endpush
@endsection
