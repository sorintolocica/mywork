@extends('layouts.master')

@section('content')
    <div class="anime-info">
        <div class="anime-image">
            <img src="{{ asset('storage/' . $anime['image']) }}" alt="{{$anime['title']}}">
        </div>
        <div class="anime-details">
            <h3 class="anime-title">{{ $anime->title }}</h3>
            <div class="anime-meta">
                <p><strong>Rating:</strong> {{ $anime->rating }}</p>
                <p><strong>An:</strong> {{ $anime->year }}</p>
                <p><strong>Genuri:</strong> {{ $anime->genres }}</p>
                <p><strong>Studiu:</strong> {{ $anime->studio }}</p>
                <p><strong>Episoade:</strong> {{ $anime->episodes }}</p>
                <p><strong>Stare:</strong> {{ $anime->status }}</p>
            </div>
            <div class="anime-synopsis">
                <strong>Descriere:</strong>
                <p>{{ $anime->description }}</p>
            </div>
            <div class="anime-episodes">
                <h4>Episoade</h4>
                <div class="episode-grid">
                    @php
                        $episodes = \App\Models\Episode::where('anime_id', $anime->id)->get();
                    @endphp
                    @foreach ($episodes as $episode)
                        <div class="episode">
                            <span class="episode-number">{{ $episode->episode_number }}</span>
                            <span class="episode-title">{{ $episode->title }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Adaugă aici restul episoadelor -->
                </div>
            </div>

        </div>
    </div>

<br>
@endsection
