@extends('layouts.layout')

@section('body')
<div class="fadeInDown renters">
    <h1>Huurders</h1>Zoeken:
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><strong>Voornaam</strong></th>
            <th scope="col"><strong>Tussenvoegsels</strong></th>
            <th scope="col"><strong>Lastname</strong></th>
            <th scope="col"><strong>Email</strong></th>
            <th scope="col"><strong>Telefoonnummer</strong></th>
            <th scope="col"><strong>Huis</strong></th>
        </tr>
        </thead>
        <tbody>
        @foreach($renters->sortBy('firstname') as $renter)
            <tr>
                <td>{{$renter['firstname']}}</td>
                <td>@if(isset($renter['middlename'])) {{$renter['middlename']}} @else - @endif</td>
                <td>{{$renter['lastname']}}</td>
                <td>{{$renter['email']}}</td>
                <td>{{$renter['phonenumber']}}</td>
                <td>{{$renter->houses()->first()->address}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@endsection
