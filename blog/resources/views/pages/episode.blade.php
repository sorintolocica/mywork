@extends('layouts.master')

@section('content')

    <h2 class="section-title">{{ $episode->title }}</h2>
    <div class="xo-tabs">

        <ul class="xo-tab-links">
            @foreach ($tabs_name as $index => $tab_name)
                <li class="{{ $index == 0 ? 'current' : '' }}" data-tab="tab{{ $index+1 }}">{{ $tab_name }}</li>
            @endforeach
        </ul>

        @foreach ($tabs_url as $index => $tab_url)
            <div class="xo-tab-content{{ $index == 0 ? ' current' : '' }}" id="tab{{ $index+1 }}">
                <iframe allowfullscreen="true" frameborder="0" height="600" marginheight="0" marginwidth="0" scrolling="no" src="{{ $tab_url }}" width="1250"></iframe>
            </div>
        @endforeach

    </div><!-- xo-tabs -->
    <div class="episode-buttons">
        <button class="button-prev"><i class="fa fa-chevron-left"></i> Episodul anterior</button>
        <a href="{{ route('anime.show', ['id' => $episode->anime->id]) }}" class="button-all">Toate episoadele</a>
        <button class="button-next">Următorul episod <i class="fa fa-chevron-right"></i></button>
    </div>



    <br>
    <h2 class="section-title">Episod oferit de: </h2>
    <div class="contributor-block">
        <div class="contributor">
            <div class="contributor-img">
                <img src="https://cdnb.artstation.com/p/assets/images/images/041/540/441/large/tr-n-thien-d-vu-799eb5de-173a-4c07-98a1-a585e9fe042f.jpg?1631985985" alt="Traducător">
            </div>
            <div class="contributor-info">
                <h3>RomanianNinja</h3>
                <p>Traducător</p>
            </div>
        </div>

        <div class="contributor">
            <div class="contributor-img">
                <img src="https://cdnb.artstation.com/p/assets/images/images/041/540/441/large/tr-n-thien-d-vu-799eb5de-173a-4c07-98a1-a585e9fe042f.jpg?1631985985" alt="Verificator">
            </div>
            <div class="contributor-info">
                <h3>RomanianNinja</h3>
                <p>Verificator</p>
            </div>
        </div>

        <div class="contributor">
            <div class="contributor-img">
                <img src="https://cdnb.artstation.com/p/assets/images/images/041/540/441/large/tr-n-thien-d-vu-799eb5de-173a-4c07-98a1-a585e9fe042f.jpg?1631985985" alt="Encoder">
            </div>
            <div class="contributor-info">
                <h3>RomanianNinja</h3>
                <p>Encoder</p>
            </div>
        </div>
    </div>
    <br>
    <h2 class="section-title">Comentarii: </h2>
    <div class="episode-comments">
        <div class="comment">
            <div class="comment-avatar">
                <img src="https://cdnb.artstation.com/p/assets/images/images/041/540/441/large/tr-n-thien-d-vu-799eb5de-173a-4c07-98a1-a585e9fe042f.jpg?1631985985" alt="Avatar utilizator">
            </div>
            <div class="comment-content">
                <div class="comment-header">
                    <h3 class="comment-username">RomanianNinja</h3>
                    <p class="comment-timestamp">acum 2 minute</p>
                </div>
                <p class="comment-text">A fost un episod grozav! Am iubit acțiunea și personajele.</p>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">
                <img src="https://cdnb.artstation.com/p/assets/images/images/041/540/441/large/tr-n-thien-d-vu-799eb5de-173a-4c07-98a1-a585e9fe042f.jpg?1631985985" alt="Avatar utilizator">
            </div>
            <div class="comment-content">
                <div class="comment-header">
                    <h3 class="comment-username">Dumy</h3>
                    <p class="comment-timestamp">acum 5 minute</p>
                </div>
                <p class="comment-text">Nu am fost prea impresionat de acest episod. Aștept cu nerăbdare să văd ce se întâmplă în continuare, dar a fost un pic dezamăgitor.</p>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">
                <img src="https://cdnb.artstation.com/p/assets/images/images/041/540/441/large/tr-n-thien-d-vu-799eb5de-173a-4c07-98a1-a585e9fe042f.jpg?1631985985" alt="Avatar utilizator">
            </div>
            <div class="comment-content">
                <div class="comment-header">
                    <h3 class="comment-username">Deus21</h3>
                    <p class="comment-timestamp">acum 10 minute</p>
                </div>
                <p class="comment-text">Sunt atât de încântat de această serie! Acest episod a fost excelent, iar animația a fost minunată.</p>
            </div>
        </div>

        <div class="comment-form">
            <h3>Postează un comentariu</h3>
            <form action="#" method="post">
                <label for="username">Nume utilizator:</label>
                <input type="text" id="username" name="username" required>
                <label for="comment">Comentariu:</label>
                <textarea id="comment" name="comment" required></textarea>
                <button type="submit">Postează</button>
            </form>
        </div>
    </div>

@endsection
