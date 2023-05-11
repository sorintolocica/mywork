@extends('layouts.master')

@section('content')

    <h1 class="text-center mb-5 translation-team">Înregistrare</h1>
    <div class="row">
        <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3">
            <div class="card register-card">
                <div class="card-body">
                    <h3 class="card-title text-center">Înregistrează-te</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Parola">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirma parola">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Înregistrează-te</button>
                    </form>
                    <p class="mt-3 text-center">Deja ai un cont? <a href="./login.html">Logheaza-te</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
