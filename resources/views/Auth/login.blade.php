@extends('layouts.guest')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="{{route('auth.login')}}" method="post" class="box">
                        @csrf
                        <h1>Login</h1>
                        <p class="text-muted">Vul hieronder je Inlogegevens in</p>
                        <input type="text" name="username" placeholder="Gebruikersnaam">
                        <input type="password" name="password" placeholder="Wachtwoord">
                        <input type="submit" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
