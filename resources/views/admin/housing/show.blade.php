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
            {{-- EXTERN --}}
            @foreach($house_extern as $extern_condition)
            <tr>
                <td>{{$extern = \App\Models\Externs::find($extern_condition->extern_id)->name }}</td>
                <td>{{$condition = \App\Models\Conditions::find($extern_condition->condition_id)->name}}</td>
                <td>{{$extern_condition->comment}}</td>
                <td></td>
            </tr>
            @endforeach
            <tr>
                <th colspan="5" style="text-align: center">Facades</th>
            </tr>
            <tr>
                <th>Naam</th>
                <th>Conditie</th>
                <th>Commentaar</th>
                <th>Aangemaakt op</th>
            </tr>
            {{-- FACADES --}}
            @foreach($house_facade as $facade_condition)
            <tr>
                <td>{{$facade = \App\Models\Facades::find($facade_condition->facade_id)->name }}</td>
                <td>{{$condition = \App\Models\Conditions::find($facade_condition->condition_id)->name}}</td>
                <td>{{$facade_condition->comment}}</td>
                <td></td>
            </tr>
            @endforeach
            <tr>
                <th colspan="5" style="text-align: center">Installations</th>
            </tr>
            <tr>
                <th>Naam</th>
                <th>Conditie</th>
                <th>Commentaar</th>
                <th>Aangemaakt op</th>
            </tr>
            {{-- INSTALLATIONS --}}
            @foreach($house_installation as $installation_condition)
                <tr>
                    <td>{{$installation = \App\Models\Installations::find($installation_condition->installation_id)->name }}</td>
                    <td>{{$condition = \App\Models\Conditions::find($installation_condition->condition_id)->name}}</td>
                    <td>{{$installation_condition->comment}}</td>
                    <td></td>
                </tr>
            @endforeach
            <tr>
                <th colspan="5" style="text-align: center">Interior</th>
            </tr>
            <tr>
                <th>Naam</th>
                <th>Conditie</th>
                <th>Commentaar</th>
                <th>Aangemaakt op</th>
            </tr>
            {{-- INTERIOR --}}
            @foreach($house_interior as $interior_condition)
                <tr>
                    <td>{{$interior = \App\Models\Interiors::find($interior_condition->interior_id)->name }}</td>
                    <td>{{$condition = \App\Models\Conditions::find($interior_condition->condition_id)->name}}</td>
                    <td>{{$interior_condition->comment}}</td>
                    <td></td>
                </tr>
            @endforeach
            <tr>
                <th colspan="5" style="text-align: center">Sanitary</th>
            </tr>
            <tr>
                <th>Naam</th>
                <th>Conditie</th>
                <th>Commentaar</th>
                <th>Aangemaakt op</th>
            </tr>
            {{-- SANITARY --}}
            @foreach($house_sanitary as $sanitary_condition)
                <tr>
                    <td>{{$sanitary = \App\Models\Sanitaries::find($sanitary_condition->sanitary_id)->name }}</td>
                    <td>{{$condition = \App\Models\Conditions::find($sanitary_condition->condition_id)->name}}</td>
                    <td>{{$sanitary_condition->comment}}</td>
                    <td></td>
                </tr>
            @endforeach
            <tr>
                <th colspan="5" style="text-align: center">Installations</th>
            </tr>
            <tr>
                <th>Naam</th>
                <th>Conditie</th>
                <th>Commentaar</th>
                <th>Aangemaakt op</th>
            </tr>
            {{-- SUBSCTRUCTURES --}}
            @foreach($house_substructure as $substructure_condition)
                <tr>
                    <td>{{$substructure = \App\Models\Substructures::find($substructure_condition->substructure_id)->name }}</td>
                    <td>{{$condition = \App\Models\Conditions::find($substructure_condition->condition_id)->name}}</td>
                    <td>{{$substructure_condition->comment}}</td>
                    <td></td>
                </tr>
            @endforeach
            <tr>
                <th colspan="5" style="text-align: center">Installations</th>
            </tr>
            <tr>
                <th>Naam</th>
                <th>Conditie</th>
                <th>Commentaar</th>
                <th>Aangemaakt op</th>
            </tr>
            {{-- SUPERSTRUCTURES --}}
            @foreach($house_superstructure as $superstructure_condition)
                <tr>
                    <td>{{$superstructure = \App\Models\Superstructures::find($superstructure_condition->superstructure_id)->name }}</td>
                    <td>{{$condition = \App\Models\Conditions::find($superstructure_condition->condition_id)->name}}</td>
                    <td>{{$superstructure_condition->comment}}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
