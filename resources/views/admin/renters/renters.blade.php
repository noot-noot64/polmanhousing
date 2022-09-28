@extends('layouts.layout')

@section('body')
<div class="fadeInDown renters">
    <h1>Huurders</h1>Zoeken:
    <a class="btn btn-success" href="{{route('admin.renters.create')}}" style="float: right">Voeg huis toe +</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><strong>Voornaam</strong></th>
            <th scope="col"><strong>Tussenvoegsels</strong></th>
            <th scope="col"><strong>Lastname</strong></th>
            <th scope="col"><strong>Email</strong></th>
            <th scope="col"><strong>Telefoonnummer</strong></th>
            <th scope="col"><strong>Huis</strong></th>
            <th></th>
            <th></th>
            <th></th>
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
                <td>@if(isset($renter->houses()->first()->address)){{$renter->houses()->first()->address}}@else Geen huis @endif</td>
                <td><a href="renters/edit/{{$renter['id']}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="renters/show/{{$renter['id']}}"><i class="fa-solid fa-gear"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@endsection
