@extends('layouts.master')

@section('content')

    <h2 class="section-title">Anime populare</h2>
    <div class="anime-carousel owl-carousel owl-theme">
        <div class="anime-card">
            <span class="episode-badge">Anime</span>
            <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
            <h5 class="card-title">Domestic No Kanajo</h5>
        </div>
        <div class="anime-card">
            <span class="episode-badge">Anime</span>
            <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 2">
            <h5 class="card-title">Attack on Titan</h5>
        </div>
        <div class="anime-card">
            <span class="episode-badge">Anime</span>
            <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 3">
            <h5 class="card-title">Naruto</h5>
        </div>
        <!-- Adăugați mai multe carduri anime aici -->
    </div>
    <div class="row">
        <div class="col-md-8">
            <h2 class="section-title">Cele mai recente episoade</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="./post-anime.html">
                        <div class="anime-card">
                            <span class="episode-badge">1 SUB</span>
                            <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
                            <h5 class="card-title">Domestic No Kanajo</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="anime-card">
                        <span class="episode-badge">1 SUB</span>
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
                        <h5 class="card-title">Domestic No Kanajo</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="anime-card">
                        <span class="episode-badge">1 SUB</span>
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
                        <h5 class="card-title">Domestic No Kanajo</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="anime-card">
                        <span class="episode-badge">1 SUB</span>
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
                        <h5 class="card-title">Domestic No Kanajo</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="anime-card">
                        <span class="episode-badge">1 SUB</span>
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
                        <h5 class="card-title">Domestic No Kanajo</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="anime-card">
                        <span class="episode-badge">1 SUB</span>
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
                        <h5 class="card-title">Domestic No Kanajo</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="anime-card">
                        <span class="episode-badge">1 SUB</span>
                        <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974713240/hell-s-paradise-jigokuraku-vol-5-9781974713240_hr.jpg" alt="Anime 1">
                        <h5 class="card-title">Domestic No Kanajo</h5>
                    </div>
                </div>
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
