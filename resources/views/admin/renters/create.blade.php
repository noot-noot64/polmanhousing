@extends('layouts.layout')

@section('body')

@if(session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{session('success')}}
    </div>
@endif

<h2>Voeg huurder toe</h2>
<hr>

<form method="post" action="{{route('admin.renters.store')}}">
    @csrf
    <div class="card-body">
        {{-- Details content --}}
        <div class="form-group row">
            <label for="initials" class="col-sm-4 col-form-label">Voorletters</label>
            <input id="initials" name="initials" class="form-control form-control-sm-10" style="width: 30%" placeholder="Voorletters">
        </div>
        <div class="form-group row">
            <label for="lastname" class="col-sm-4 col-form-label">Achternaam</label>
            <input id="lastname" name="lastname" class="form-control form-control-sm-10" style="width: 30%" placeholder="Achternaam">
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <input id="email" type="email" name="email" class="form-control form-control-sm-10" style="width: 30%" placeholder="Email">
        </div>
        <div class="form-group row">
            <label for="phonenumber" class="col-sm-4 col-form-label">Telefoonnummer</label>
            <input id="phonenumber" name="phonenumber" class="form-control form-control-sm-10" style="width: 30%" placeholder="Telefoonnummer">
        </div>
        <div class="form-group row">
            <label for="house" class="col-sm-4 col-form-label">Huis</label>
            <select name="house" id="house" class="form-control form-control-sm-10" style="width: 30%">
                @foreach($houses as $house)
                    <option value="{{$house->id}}">
                        {{$house->address}}
                    </option>
                @endforeach
            </select>
        </div>

        <input type="submit" class="btn btn-success" value="Aanmaken"><br><br>
    </div>
</form>

@endsection
