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
        <h4><p style="color: #01a3c1; text-transform: uppercase"><strong>Algemene bedrijfsimpressie</strong></p></h4>
    </div>

    <h5><p style="text-decoration: underline">Algemeen</p></h5>
    <div style="font-size: 14px;">
        <p>
            Polman Vastgoed Beheer is een jong, maar zeer ervaren team voor het beheren van onroerend goed .
            Het team Polman Vastgoed Beheer bestaat uit Rob en Barend Polman. Wij beheren en verhuren woningen,
            winkels, kantoren, studentenkamers, etages appartementen, tijdelijke werkplekken, lofts, studio’s, werkruimten en bedrijfsruimten.
            Voor zowel particulier- als zakelijk onroerend goed hebben wij passende oplossingen in het kader van beheer.
            Daaronder valt technisch,- dagelijks,- administratief en financieel beheer en het (indien noodzakelijk) leeghalen van woningen.
            Ons werkgebied concentreert zich het meest op de provincie Gelderland. Een groot deel van het vastgoed wat wij in beheer hebben
            bevindt zich voornamelijk Arnhem. Wij hebben een brede- en lange ervaring in vastgoed beheer. Deze ervaring is gebaseerd op zowel
            praktijk van het beheren als ook in de administratieve zin. Barend geeft een gezicht aan het dagelijks- en technisch beheer.
            Wat hij daarbij belangrijk vindt is het persoonlijk contact tussen beheerder en huurder. Rob bemoeit zich vooral met de administratieve
            en financiële kant. Hij vindt het vooral belangrijk dat de administratieve kant van het beheer duidelijk en overzichtelijk geregeld is.
            Een goede administratie is de basis van het hebben van vastgoed. Ons doel is de eigenaar van het vastgoed te ontzorgen (box 3) en van
            duidelijke informatie omtrent zijn eigendom te voorzien.
        </p>

        <div class="line"></div>
    </div>
@endsection
