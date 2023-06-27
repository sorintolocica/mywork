@extends('layouts.master')

@section('content')

    <h2 class="section-title">Anime populare</h2>
    <div class="anime-carousel owl-carousel owl-theme">
        @foreach($animes as $anime)
            <div class="anime-card">
                <span class="episode-badge">{{$anime['episodes']}} Episoade</span>
                <a href="{{ route('anime.show', $anime->id) }}">
                    <img src="{{ asset('storage/' . $anime['image']) }}" alt="{{$anime['title']}}">
                    <h5 class="card-title">{{$anime['title']}}</h5>
                </a>
            </div>

        @endforeach
        <!-- Adăugați mai multe carduri anime aici -->
    </div>
    <div class="row">
        <div class="col-md-8">
            <h2 class="section-title">Cele mai recente episoade</h2>
            <div class="row">
                @php
                    $episodes = \App\Models\Episode::orderBy('id', 'desc')->get();
                @endphp
                @foreach ($episodes as $episode)
                    <div class="col-md-3">
                        <a href="/episode/{{ $episode->id }}">
                            <div class="anime-card">
                                <span class="episode-badge">{{ $episode->episode_number }} SUB</span>
                                @if ($episode->anime)
                                    @php
                                        $anime = $episode->anime;
                                    @endphp
                                    <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $episode->title }}">
                                @else
                                    <img src="{{ asset('storage/' . $anime['image']) }}" alt="{{$anime['title']}}" alt="{{ $episode->title }}">
                                @endif
                                <h5 class="card-title">{{ $anime->title }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4 order-md-12">
            <div class="sidebar">
                <h2 class="sidebar-title">Episoade populare</h2>
                <ul class="sidebar-list">
                    <li><a href="#">Episod 1</a></li>
                    <li><a href="#">Episod 2</a></li>
                    <li><a href="#">Episod 3</a></li>
                    <li><a href="#">Episod 4</a></li>
                    <li><a href="#">Episod 5</a></li>
                </ul>
            </div>

            <div class="sidebar">
                <h2 class="sidebar-title">Chat</h2>
                <ul class="sidebar-list">
                    <li><a href="#">Episod 1</a></li>
                    <li><a href="#">Episod 2</a></li>
                    <li><a href="#">Episod 3</a></li>
                    <li><a href="#">Episod 4</a></li>
                    <li><a href="#">Episod 5</a></li>
                </ul>
            </div>
        </div>
        <h3 class="text-center mt-5 text-white">Genuri anime</h3>
        <hr>
        <ul class="list-unstyled genre-list">
            <li>Actiune</li>
            <li>Aventura</li>
            <li>Comedie</li>
            <li>Drama</li>
            <li>Fantezie</li>
            <li>Mister</li>
            <li>Psihologic</li>
            <li>Romantic</li>
            <li>Fictiune</li>
            <li>Viata de zi cu zi</li>
            <li>Ecchi</li>
        </ul>
    </div>

@endsection
