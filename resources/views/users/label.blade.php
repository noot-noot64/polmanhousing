@extends('layouts.layout')

@section('body')
    <style>
        div {
            display: inline-block;
        }

        div label {
            display: block;
        }
    </style>

    <h2>Energielabel</h2>
    <form>
        @csrf
        <div>
            <label for="postcode">Postcode</label>
            <input id="postcode" name="postcode" class="form-control" type="text" value maxlength="7" placeholder="1234 AB">
        </div>
        <div>
            <label for="house-number">Huisnummer</label>
            <input id="house-number" name="house-number" class="form-control" type="text" placeholder="1234">
        </div>
        <div>
            <label for="extra">Toevoeging</label>
            <input id="extra" name="extra" class="form-control" type="text">
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Check">
        </div>
    </form>
    <div class="line"></div>

@endsection
