@extends('layouts.layout')

@section('body')

<div class="housings animated fadeInDown">
    <h1>Woningen</h1>Zoeken:
    <a class="btn btn-success" href="housing/create" style="float: right">Voeg huis toe +</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><strong>Adres</strong></th>
            <th scope="col"><strong>Bouwjaar</strong></th>
            <th scope="col"><strong>Oppervlakte</strong></th>
            <th scope="col"><strong>Toegangbaar vanaf tuin?</strong></th>
            <th scope="col"><strong>Conditie</strong></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($houses as $house)

            <tr>
                <td>{{$house['address']}}</td>
                <td>{{$house['buildyear']}}</td>
                <td>{{$house['surface']}}mm²</td>
                <td>@if($house['accessible'] == 1) Ja @else Nee @endif</td>
                <td>{{$house->conditions()->first()->name}}</td>
                <td><a href="housing/edit/{{$house['id']}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
                <td><a href="housing/show/{{$house['id']}}"><i class="fa-solid fa-gear"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
