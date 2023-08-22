@extends('layouts.main')
@section('content')
    <div class="container">

        @if (session()->has('success'))
            <div class="alert alert-success mt-5 alert-dismissible fade show col-lg-10 mx-auto" style="margin-bottom: -50px" role="alert">
                {{ session('success') }}
            </div>
        @endif

        {{-- search --}}
        <div style="margin: 120px 0">
            <div class="row">
                <div class="col-8 mx-auto">
                    <form action="/dashboardGalery" method="get">
                        <label for="search" id="search" style="width: 85%">
                            <input type="text" id="search" placeholder="Search" name="search" style="width: 100%">
                        </label>
                        <button class="tambah-btn" type="submit">
                            search
                        </button>
                    </form>
                </div>
                <div class="col-4 " style="text-align: right">
                    <a href="/galery/create">
                        <button class="tambah-btn">Add Galery</button>
                    </a>
                </div>

            </div>
            <div class="row my-3">
                <table border="2" cellpadding="10">
                    <tr>
                        <th style="width: 10%">NO</th>
                        <th style="width: 30%">Judul</th>
                        <th style="width: 20%">Tanggal Post</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                    @php
                        if ($galery->count() > 0) {
                            $i = $galery->perPage() * $galery->currentPage() - ($galery->perPage() - 1);
                        } else {
                            $i = 0;
                        }
                    @endphp
                    @foreach ($galery as $galeri)
                        <tr>
                            <td> {{ $i }}</td>
                            <td> {{ $galeri->judul }}</td>
                            <td> {{ $galeri->updated_at }}</td>
                            <td class="d-flex justify-content-evenly " style="border: 1px solid rgb(0,0,0,0.5)">
                                <a href="/galery/{{ $galeri->id }}/edit" class=" py-1 bg-warning "
                                    style="border-radius: 10px">
                                    <i class="material-icons md-light px-2 fs-6">
                                        edit
                                    </i>
                                </a>
                                <form action="/galery/{{ $galeri->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-danger py-1"
                                        onclick="return confirm('Are you sure to delete this post?')"
                                        style="border-radius:10px;border:none; "><i
                                            class="material-icons md-light px-2 fs-6">
                                            delete
                                        </i></button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach

                </table>
                <div class="pagination my-4">
                    {{ $galery->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection

