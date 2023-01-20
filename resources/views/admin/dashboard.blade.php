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
    <div style="text-align: center">
        <h1 style="font-size: 60px">Welkom bij</h1>
        <h5>Woningbouw vereniging de 1voud</h5>
    </div>
        <div class="line"></div>
    </div>
@endsection
