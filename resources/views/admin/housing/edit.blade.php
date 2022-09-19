@extends('layouts.layout')

@section('body')



<h2>Bewerk huis</h2>
<h6 style="color: grey">{{$house['address']}}</h6>
<hr>

    <form method="get" action="{{route('admin.housing.update', $house['id'])}}">
        @csrf
        <input type="submit" class="btn btn-primary" value="Bewerk"><br><br>
        <div class="accordion" id="accordionExample">
            {{--      DETAILS CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingDetails">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseDetails" aria-expanded="true" aria-controls="collapseDetails" style="text-decoration: none">
                            Huis details
                        </button>
                    </h2>
                </div>

                <div id="collapseDetails" class="collapse show" aria-labelledby="headingDetails" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                        {{-- Details content --}}
                        <div class="form-group row">
                            <label for="address" class="col-sm-4 col-form-label">Adres</label>
                            <input id="address" name="address" class="form-control form-control-sm-10" style="width: 30%" placeholder="Adres" value="@if(isset($house->address)){{$house->address}}@endif">
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-4 col-form-label">Woonplaats</label>
                            <input id="address" name="city" class="form-control form-control-sm-10" style="width: 30%" placeholder="Adres" value="@if(isset($house->city)){{$house->city}}@endif">
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-4 col-form-label">Postcode</label>
                            <input id="address" name="postalcode" class="form-control form-control-sm-10" style="width: 30%" placeholder="Adres" value="@if(isset($house->postalcode)){{$house->postalcode}}@endif">
                        </div>
                        <div class="form-group row">
                            <label for="buildyear" class="col-sm-4 col-form-label">Bouwjaar</label>
                            <input id="buildyear" name="buildyear" class="form-control form-control-sm-10" style="width: 30%" placeholder="Bouwjaar" value="@if(isset($house->buildyear)){{$house->buildyear}}@endif">
                        </div>
                        <div class="form-group row">
                            <label for="surface" class="col-sm-4 col-form-label">Oppervlakte</label>
                            <input id="surface" name="surface" class="form-control form-control-sm-10" style="width: 30%" placeholder="Oppervlakte" value="@if(isset($house->surface)){{$house->surface}}@endif">
                        </div>
                        <div class="form-group row">
                            <label for="accessible" class="col-sm-4 col-form-label">Toegang vanaf tuin</label>
                            @if(isset($house->accessible))
                            <select id="accessible" class="form-control form-control-sm-10" style="width: 30%">
                            @if($house->accessible == 1)
                            <option value="1">
                                Ja
                            </option>
                            @elseif($house->accessible == 0)
                            <option value="0">
                                Nee
                            </option>
                            @endif
                            </select>
                            @else
                                <input id="surface" class="form-control form-control-sm-10" style="width: 30%" placeholder="Geen data" value="Geen data" readonly>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="condition" class="col-sm-4 col-form-label">Conditie</label>
                            <input id="condition" class="form-control form-control-sm-10" style="width: 30%" placeholder="Conditie" value="@if(isset($house->condition_id)){{$house->conditions()->first()->name}}@endif">
                        </div>
                    </div>
                </div>
            </div>

            {{--      EXTERNE CONDITIES      --}}
            <div class="card" style="background-color: lightgrey">
                <div class="card-header" id="headingExtern">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExtern" aria-expanded="true" aria-controls="collapseExtern" style="text-decoration: none">
                            Externe
                        </button>
                    </h2>
                </div>

                <div id="collapseExtern" class="collapse" aria-labelledby="headingExtern" data-parent="#accordionExample" style="border: 1px solid #C8C8C8">
                    <div class="card-body">
                    {{-- Extern content --}}
                        @foreach($externs as $extern)
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">{{$extern->name}}</label>
                                <select name="externs-{{$extern->id}}" class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)

                                        <option value="{{$condition->id}}"
                                            @if(isset($house_extern))
                                            @if($house_extern->condition_id == $condition->id && $house_extern->extern_id == $extern->id)
                                                selected
                                            @endif
                                            @endif>
                                        {{$condition->name}}
                                        </option>

                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" name="extern-comment-{{$extern->id}}" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%">@if(isset($house_extern->comment) && $house_extern->extern_id == $extern->id){{$house_extern->comment}}@endif</textarea>
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
                        @foreach($facades as $facade)
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">{{$facade->name}}</label>
                                <select name="facades-{{$facade->id}}" class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)

                                        <option value="{{$condition->id}}"
                                                @if(isset($house_facade))
                                                @if($house_facade->condition_id == $condition->id && $house_facade->facade_id == $facade->id)
                                                selected
                                            @endif
                                            @endif>
                                            {{$condition->name}}
                                        </option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" name="facade-comment-{{$facade->id}}" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%">@if(isset($house_facade->comment) && $house_facade->facade_id == $facade->id) {{$house_facade->comment}}@endif</textarea>
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
                        @foreach($installations as $installation)
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">{{$installation->name}}</label>
                                <select name="installations-{{$installation->id}}" class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)

                                        <option value="{{$condition->id}}"
                                                @if(isset($house_installation))
                                                @if($house_installation->condition_id == $condition->id && $house_installation->installation_id == $installation->id)
                                                selected
                                            @endif
                                            @endif>
                                            {{$condition->name}}
                                        </option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" name="installation-comment-{{$installation->id}}" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%">@if(isset($house_installation->comment) && $house_installation->installation_id == $installation->id) {{$house_installation->comment}}@endif</textarea>
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
                        @foreach($interiors as $interior)
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">{{$interior->name}}</label>
                                <select name="interiors-{{$interior->id}}" class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)

                                        <option value="{{$condition->id}}"
                                                @if(isset($house_interior))
                                                @if($house_interior->condition_id == $condition->id && $house_interior->interior_id == $interior->id)
                                                selected
                                            @endif
                                            @endif>
                                            {{$condition->name}}
                                        </option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" name="interior-comment-{{$interior->id}}" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%">@if(isset($house_interior->comment) && $house_interior->interior_id == $interior->id) {{$house_interior->comment}}@endif</textarea>
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
                        @foreach($sanitaries as $sanitary)
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">{{$sanitary->name}}</label>
                                <select name="sanitaries-{{$sanitary->id}}" class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)

                                        <option value="{{$condition->id}}"
                                                @if(isset($house_sanitary))
                                                @if($house_sanitary->condition_id == $condition->id && $house_sanitary->sanitary_id == $sanitary->id)
                                                selected
                                            @endif
                                            @endif>
                                            {{$condition->name}}
                                        </option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" name="sanitary-comment{{$sanitary->id}}" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%">@if(isset($house_sanitary->comment) && $house_sanitary->sanitary_id == $sanitary->id) {{$house_sanitary->comment}}@endif</textarea>
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
                        @foreach($substructures as $substructure)
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">{{$substructure->name}}</label>
                                <select name="substructures-{{$substructure->id}}" class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)

                                        <option value="{{$condition->id}}"
                                                @if(isset($house_substructure))
                                                @if($house_substructure->condition_id == $condition->id && $house_substructure->substructure_id == $substructure->id)
                                                selected
                                            @endif
                                            @endif>
                                            {{$condition->name}}
                                        </option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" name="substructure-comment-{{$substructure->id}}" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%">@if(isset($house_substructure->comment) && $house_substructure->substructure_id == $substructure->id) {{$house_substructure->comment}}@endif</textarea>
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
                        @foreach($superstructures as $superstructure)
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">{{$superstructure->name}}</label>
                                <select name="superstructures-{{$superstructure->id}}" class="form-control form-control-sm-10" style="width: 30%">
                                    @foreach($conditions as $condition)

                                        <option value="{{$condition->id}}"
                                                @if(isset($house_superstructure))
                                                @if($house_superstructure->condition_id == $condition->id && $house_superstructure->superstructure_id == $superstructure->id)
                                                selected
                                            @endif
                                            @endif>
                                            {{$condition->name}}
                                        </option>
                                    @endforeach
                                </select><br>
                                <textarea class="form-control form-control-sm-10" name="superstructure-comment-{{$superstructure->id}}" id="comment" placeholder="Aantekening" rows="5" cols="40" style="width: 30%">@if(isset($house_superstructure->comment) && $house_superstructure->superstructure_id == $superstructure->id) {{$house_superstructure->comment}}@endif</textarea>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Bewerk">
    </form>


@endsection
