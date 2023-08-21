@extends('layouts.main')


@section('content')
    <div class="judul ">
        <div class="jumbotron" style="background-image: url('../img/jumbotron.png');">
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
                <p class="justify pt-3 fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugit
                    ea molestiae molestias obcaecati voluptatum tempora sequi nisi fuga numquam cumque repellat earum
                    nesciunt a non, sapiente alias totam magnam? Laboriosam, tempora veniam ipsum asperiores voluptatem
                    explicabo ab accusantium maiores ea, totam, molestiae deserunt molestias! Dolore quisquam sequi
                    explicabo velit!</p>
            </div>
        </div>
        <div class="row space hideme">
            <div class="col-6 p-5">
                <h3 class="fw-bold pt-5 text-center">VISI</h3>
                <hr width="3%" color="#285430" size="5px" class="mx-auto mt-0" style="border: 2px solid #285430;opacity: 1"/>
                <p class="justify pt-3 fw-normal">
                    Terwujudnya Pelayanan Terpada yang Prima di Desa Kadipiro
                </p>
            </div>
            <div class="col-6 p-5">
                <h3 class="fw-bold pt-5 text-center">MISI</h3>
                <hr width="3%" color="#285430" size="5px" class="mx-auto mt-0" style="border: 2px solid #285430;opacity: 1" />
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

        <div  class="peta-card mx-auto space hideme" >
            <h3 class="fw-bold pt-5 text-center">LOKASI DESA KADIPIRO</h3>
            <hr width="80%" size="1px" class="mx-auto" color="#E5D9B6" style="border: 2px solid #E5D9B6;opacity: 1">
            <div style="width: 60%" class="mx-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.567433307695!2d111.07704524068602!3d-7.504730830123148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1dfa259173b7%3A0x5027a76e355b4e0!2sKadipiro%2C%20Kec.%20Sambirejo%2C%20Kabupaten%20Sragen%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1689940957284!5m2!1sid!2sid" width="100%" style="border:1px solid black; height: 35vw" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               <a href="https://goo.gl/maps/Fo3eA67Yw27cmP5P6" target="_blank">
                   <button class="btn-bukapeta">
                       Buka Peta
                   </button>
               </a>
            </div>

        </div>

    </div>
@endsection
