@extends('frontview.base')

@section('client_content')
    <div class="container px-4 px-lg-5">

        <h2 class="w-100 text-center">&mdash; Rekomendasi Anime Terbaru &mdash;</h2>

        @foreach ($list_artikel as $artikel)
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <hr>
                        <h2 class="post-title">{{ $loop->iteration }}. {{ $artikel->judul }}</h2>
                        Posted by: {{ $artikel->penulis }} |
                        {{ $artikel->created_at->diffForHumans() }}
                        <hr>
                        <span style="font-family: Verdana, Geneva, Tahoma, sans-serif"> {!! substr(nl2br($artikel->deskripsi), 0, 300) !!}.....</span
                            style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                        </a>
                        <br>

                        <div class="col-md-2 mt-5 float-left">
                            <button class="btn btn-light" style="box-shadow: 10px"><a
                                    href="{{ url('artikel', $artikel->id) }}"> Read
                                    More</button>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
