@extends('layouts.layout')

@section('body')

<h2>Informatie huis</h2>
<h6 style="color: grey">{{$house['address']}}</h6>
<hr>
<div class="container">
    <div class="table-responsive-sm">
        <table class="table table-bordered">
            <tr>
                <th colspan="5" style="text-align: center">Extern</th>
            </tr>
            <tr>
                <th>Naam</th>
                <th>Conditie</th>
                <th>Commentaar</th>
                <th>Aangemaakt op</th>
            </tr>
            @foreach($house_extern as $extern_condition)
                @dd($extern_condition->first()->conditions()->first())
            <tr>
                <td>{{$extern_condition->externs()->first()->name}}</td>
                <td>{{$extern_condition->condition->name}}</td>
                <td>{{$extern_condition->comment}}</td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
