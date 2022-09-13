@extends('layouts.layout')

@section('body')


<h2>Bewerk gebruiker</h2>
<hr>

    <form method="get" action="housing/update/{{$house['id']}}">

{{--        <a class="expand-comment" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">--}}
{{--            uitvouwen--}}
{{--        </a>--}}
{{--        <div class="collapse" id="collapseExample">--}}
{{--            <div>--}}
{{--                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--            <div class="form-group row">--}}
{{--                <label class="col-sm-2 col-form-label">Terras achterzijde</label>--}}
{{--                <select class="form-control form-control-sm-10" style="width: 30%">--}}
{{--                    @foreach($conditions as $condition)--}}
{{--                        <option>{{$condition->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select><br>--}}
{{--                <a class="expand-comment" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">--}}
{{--                    uitvouwen--}}
{{--                </a>--}}
{{--                <div class="collapse" id="collapseExample">--}}
{{--                    <div>--}}
{{--                        <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--           </div>--}}

        <div class="accordion" id="accordionExample">

            {{--      EXTERNE CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingExtern">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExtern" aria-expanded="true" aria-controls="collapseExtern" style="text-decoration: none">
                            Externe
                        </button>
                    </h2>
                </div>

                <div id="collapseExtern" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                    {{-- Extern content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$extern->name}}</label>
                                <select class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)
                                        <option>{{$condition->name}}</option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--      FACADE CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingFacade">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFacade" aria-expanded="true" aria-controls="collapseFacade" style="text-decoration: none">
                            Facades
                        </button>
                    </h2>
                </div>

                <div id="collapseFacade" class="collapse" aria-labelledby="headingFacade" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                        {{-- Facade content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$extern->name}}</label>
                                <select class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)
                                        <option>{{$condition->name}}</option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--      INSTALLATIES CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingInstallations">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInstallations" aria-expanded="true" aria-controls="collapseInstallations" style="text-decoration: none">
                            Installations
                        </button>
                    </h2>
                </div>

                <div id="collapseInstallations" class="collapse" aria-labelledby="headingInstallations" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                        {{-- Installations content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$extern->name}}</label>
                                <select class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)
                                        <option>{{$condition->name}}</option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--      INTERIOR CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingInterior">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInterior" aria-expanded="true" aria-controls="collapseInterior" style="text-decoration: none">
                            Interior
                        </button>
                    </h2>
                </div>

                <div id="collapseInterior" class="collapse" aria-labelledby="headingInterior" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                        {{-- Interior content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$extern->name}}</label>
                                <select class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)
                                        <option>{{$condition->name}}</option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--      SANITARY CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingSanitary">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSanitary" aria-expanded="true" aria-controls="collapseSanitary" style="text-decoration: none">
                            Sanitary
                        </button>
                    </h2>
                </div>

                <div id="collapseSanitary" class="collapse" aria-labelledby="headingSanitary" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                        {{-- Sanitary content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$extern->name}}</label>
                                <select class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)
                                        <option>{{$condition->name}}</option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--      SUBSTRUCTURES CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingSubstructure">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSubstructure" aria-expanded="true" aria-controls="collapseSubstructure" style="text-decoration: none">
                            Substructure
                        </button>
                    </h2>
                </div>

                <div id="collapseSubstructure" class="collapse" aria-labelledby="headingSubstructure" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                        {{-- Substructure content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$extern->name}}</label>
                                <select class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)
                                        <option>{{$condition->name}}</option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{--      SUPERSTRCUTRES CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingSuperstructure">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSuperstructure" aria-expanded="true" aria-controls="collapseSuperstructure" style="text-decoration: none">
                            Superstructure
                        </button>
                    </h2>
                </div>

                <div id="collapseSuperstructure" class="collapse" aria-labelledby="headingSuperstructure" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                        {{-- Superstructure content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">{{$extern->name}}</label>
                                <select class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)
                                        <option>{{$condition->name}}</option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%"></textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="margin-left: 5%;">Tuininrichting</label>
                <select class="form-control form-control-sm-10" style="width: 30%">
                    @foreach($conditions as $condition)
                        <option>{{$condition->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>


@endsection
