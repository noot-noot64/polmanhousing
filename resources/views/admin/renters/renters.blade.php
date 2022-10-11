@extends('layouts.layout')

@section('body')
<div class="fadeInDown renters">
    <h1>Huurders</h1>
    <a class="btn btn-success" href="{{route('admin.renters.create')}}" style="float: right">Voeg huurder toe +</a>
    <form action="{{route('admin.renters.search')}}" method="get" role="search">
        @csrf
        <input type="text" name="search" required/>
        <button type="submit">Search</button>
    </form>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><strong>Voorletters</strong></th>
            <th scope="col"><strong>Lastname</strong></th>
            <th scope="col"><strong>Email</strong></th>
            <th scope="col"><strong>Telefoonnummer</strong></th>
            <th scope="col"><strong>Huis</strong></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <style>
            td a{
                display: block;
            }
        </style>
        @foreach($renters->sortBy('firstname') as $renter)
            <tr>
                <td><a href="renters/edit/{{$renter['id']}}">{{$renter['initials']}}</a></td>
                <td><a href="renters/edit/{{$renter['id']}}">{{$renter['lastname']}}</a></td>
                <td><a href="renters/edit/{{$renter['id']}}">{{$renter['email']}}</a></td>
                <td><a href="renters/edit/{{$renter['id']}}">{{$renter['phonenumber']}}</a></td>
                <td><a href="renters/edit/{{$renter['id']}}">@if(isset($renter->houses()->first()->address)){{$renter->houses()->first()->address}}@else Geen huis @endif</a></td>
{{--                <td><a href="renters/edit/{{$renter['id']}}"><i class="fa-solid fa-pen-to-square"></i></a></td>--}}
                <td><a href="renters/show/{{$renter['id']}}" title="Informatie"><i class="fa-solid fa-circle-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash" title="Verwijder"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $renters->links() }}
</div>

@endsection
