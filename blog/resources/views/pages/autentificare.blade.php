@extends('layouts.master')

@section('content')

    <h1 class="text-center mb-5 translation-team">Autentificare</h1>
    <div class="row">
        <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3">
            <div class="card login-card">
                <div class="card-body">
                    <h3 class="card-title text-center">Autentificare</h3>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Parola">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Logare</button>
                    </form>
                    <p class="mt-3 text-center">Ești nou pe AnimeAZU? <a href="/inregistrare">Înregistreză-te acum!</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
