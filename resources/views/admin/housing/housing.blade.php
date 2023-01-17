@extends('layouts.layout')

@section('body')

<div class="housings animated fadeInDown">
    <h1>Woningen</h1>
    <a class="btn btn-success" href="{{route('admin.housing.create')}}" style="float: right">Voeg huis toe +</a>
    <form action="{{route('admin.housing.search')}}" method="get" role="search">
        @csrf
        <input type="text" name="search" required/>
        <button type="submit">Zoeken</button>
    </form>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><strong>Adres</strong></th>
            <th scope="col"><strong>Postcode</strong></th>
            <th scope="col"><strong>Bouwjaar</strong></th>
            <th scope="col"><strong>Oppervlakte</strong></th>
            <th scope="col"><strong>Toegangbaar vanaf tuin?</strong></th>
            <th scope="col"><strong>Conditie</strong></th>
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
        @foreach($houses as $house)

            <tr>
                <td><a href="{{route('admin.housing.edit', $house['id'])}}">{{$house['address']}}</a></td>
                <td><a href="{{route('admin.housing.edit', $house['id'])}}">{{$house['postalcode']}}</a></td>
                <td><a href="{{route('admin.housing.edit', $house['id'])}}">{{$house['buildyear']}}</a></td>
                <td><a href="{{route('admin.housing.edit', $house['id'])}}">{{$house['surface']}}mm²</a></td>
                <td><a href="{{route('admin.housing.edit', $house['id'])}}">@if($house['accessible'] == 1) Ja @else Nee @endif</a></td>
                <td><a href="{{route('admin.housing.edit', $house['id'])}}">{{$house->conditions()->first()->name}}</a></td>
{{--                <td><a href="{{route('admin.housing.edit', $house['id'])}}"><i class="fa-solid fa-pen-to-square"></i></a></td>--}}
                <td><a href="{{route('admin.housing.show', $house['id'])}}" title="Informatie"><i class="fa-solid fa-circle-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash" title="Verwijder"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $houses->links() }}
</div>

@endsection
