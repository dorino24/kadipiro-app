@extends('layouts.main')


@section('content')
    <div class="judul">
        <div class="jumbotron" style="background-image: url('../storage/{{ $post->image }}');">
        </div>
        {{-- <img class="jumbotron" src="img/jumbotron.png" alt="jumbotron"> --}}
        <div class="overlay">
            <h2 class="fw-bold">{{ $post->judul }}</h2>
        </div>
    </div>
    <div class="container">
        <div class="space hideme">
            <div class="mx-auto px-5">
                <h2 class="fw-bold text-center">{{ $post->judul }}</h2>
                <p>{!! $post->isi !!}
                </p>
                <a href="'http://google.com'.{{$post->nomer}}">
                  <img src="{{asset('img/logos_whatsapp-icon.png')}}" width="40" alt="">
                </a>
            </div>
        </div>
        {{-- <img src="../img/kayu.png" alt=""> --}}
        <div class="d-flex justify-content-center my-5 rounded-3 w-75 mx-auto hideme" style="border: 1px solid black">
            <div id="carouselExampleIndicators" class="carousel  slide " style="width: 100%; height:100%">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    @if ($post->image4)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    @endif
                    @if ($post->image5)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    @endif
                    @if ($post->image6)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                    @endif
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100 "
                            style=" object-fit: cover;height: 450px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/' . $post->image2) }}" class="d-block w-100 "
                            style=" object-fit: cover;height: 450px; alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/' . $post->image3) }}" class="d-block w-100 "
                            style=" object-fit: cover;height: 450px; alt="...">
                    </div>
                    @if ($post->image4)
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image4) }}" class="d-block w-100 "
                                style=" object-fit: cover;height: 450px; alt="...">
                        </div>
                    @endif

                    @if ($post->image5)
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image5) }}" class="d-block w-100 "
                                style=" object-fit: cover;height: 450px; alt="...">
                        </div>
                    @endif

                    @if ($post->image6)
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image6) }}" class="d-block w-100 "
                                style=" object-fit: cover;height: 450px; alt="...">
                        </div>
                    @endif

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
    </div>
@endsection
