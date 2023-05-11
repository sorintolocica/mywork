@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 class="text-center mb-5 translation-team">Raportează episodul</h1>
        <form>
            <div class="form-group">
                <label for="name">Nume</label>
                <input type="text" class="form-control" id="name" placeholder="Introdu numele anime-ului">
            </div>
            <div class="form-group">
                <label for="anime">Denumirea anime-ului</label>
                <input type="text" class="form-control" id="anime" placeholder="Introdu numele anime-ului">
            </div>
            <div class="form-group">
                <label for="message">Raportul</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Introdu ce nu functioneaza la episod"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Trimite</button>
        </form>
    </div>
</div>
</div>
<br>
@endsection
