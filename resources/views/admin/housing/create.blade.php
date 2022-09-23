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

    <h2>Voeg huis toe</h2>
    <hr>

    <form method="post" action="{{route('admin.housing.store')}}">
        @csrf
        <div class="card-body">
            {{-- Details content --}}
            <div class="form-group row">
                <label for="address" class="col-sm-4 col-form-label">Adres</label>
                <input id="address" name="address" class="form-control form-control-sm-10" style="width: 30%" placeholder="Adres">
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-4 col-form-label">Woonplaats</label>
                <input id="address" name="city" class="form-control form-control-sm-10" style="width: 30%" placeholder="Woonplaats">
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-4 col-form-label">Postcode</label>
                <input id="address" name="postalcode" class="form-control form-control-sm-10" style="width: 30%" placeholder="Postcode">
                <small id="address-small" class="form-text text-muted">Postcode formaat: 1234AB</small>
            </div>
            <div class="form-group row">
                <label for="buildyear" class="col-sm-4 col-form-label">Bouwjaar</label>
                <input id="buildyear" type="number" max="{{date('Y')}}" min="1000" name="buildyear" class="form-control form-control-sm-10" style="width: 30%" placeholder="Bouwjaar">
            </div>
            <div class="form-group row">
                <label for="surface" class="col-sm-4 col-form-label">Oppervlakte</label>
                <input id="surface" type="number" min="1" name="surface" class="form-control form-control-sm-10" style="width: 30%" placeholder="Oppervlakte">
            </div>
            <div class="form-group row">
                <label for="accessible" class="col-sm-4 col-form-label">Toegang vanaf tuin</label>
                <select id="accessible" name="accessible" class="form-control form-control-sm-10" style="width: 30%">
                    <option value="1" selected>
                        Ja
                    </option>
                    <option value="0">
                        Nee
                    </option>
                </select>
            </div>
            <div class="form-group row">
                <label for="condition" class="col-sm-4 col-form-label">Conditie</label>
                <select name="condition" id="condition" class="form-control form-control-sm-10" style="width: 30%">
                    @foreach($conditions as $condition)
                        <option value="{{$condition->id}}">
                            {{$condition->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Aanmaken"><br><br>
        </div>
    </form>
@endsection
