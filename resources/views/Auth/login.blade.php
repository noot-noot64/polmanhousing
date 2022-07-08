@extends('layouts.guest')

@section('body')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p><strong>Oops iets is verkeerd gegaan</strong></p>
            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    @if(session('success'))
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    @if(session('error'))
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif
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
