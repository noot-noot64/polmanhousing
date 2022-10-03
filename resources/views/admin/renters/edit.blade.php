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

    <h2>Bewerk huurder</h2>
    <h6 style="color: grey">{{$renter['initials']. ' '.$renter['lastname']}}</h6>
    <hr>
    <form method="get" action="{{route('admin.renters.update', $renter['id'])}}">
        @csrf
            <div class="form-group row">
                <label for="initials" class="col-sm-4 col-form-label">Voorletters</label>
                <input id="initials" name="initials" class="form-control form-control-sm-10" style="width: 30%" placeholder="Voorletters" value="@if(isset($renter->initials)){{$renter->initials}}@endif">
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-4 col-form-label">Achternaam</label>
                <input id="lastname" name="lastname" class="form-control form-control-sm-10" style="width: 30%" placeholder="Achternaam" value="@if(isset($renter->lastname)){{$renter->lastname}}@endif">
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Postcode</label>
                <input id="email" name="email" type="email" class="form-control form-control-sm-10" style="width: 30%" placeholder="Email" value="@if(isset($renter->email)){{$renter->email}}@endif">
            </div>
            <div class="form-group row">
                <label for="phonenumber" class="col-sm-4 col-form-label">Telefoonnummer</label>
                <input id="phonenumber" name="phonenumber" class="form-control form-control-sm-10" style="width: 30%" placeholder="Telefoonnummer" value="@if(isset($renter->phonenumber)){{$renter->phonenumber}}@endif">
            </div>
            <div class="form-group row">
                <label for="house" class="col-sm-4 col-form-label">Huis</label>
                <select name="house" id="house" class="form-control form-control-sm-10" style="width: 30%">
                    @foreach($houses as $house)
                        <option value="{{$house->id}}"
                            @if($house->id == $renter->house_id)
                                        selected
                            @endif>
                            {{$house->address}}
                        </option>
                    @endforeach
                </select>
            </div>
        <input type="submit" class="btn btn-success" value="Bewerk">
    </form>
@endsection
