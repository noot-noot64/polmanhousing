@extends('layouts.layout')

@section('body')


{{--    <h5><p>Contactgegevens</p></h5>--}}
    <div id="wrapper">
        <h2>Contact</h2><br>
        <div id="first">
            <h5><p style="color: #01a3c1;">Adres:</p></h5>
            <p style="color:black;">
                Polman Vastgoedbeheer<br>
                Johan de Wittlaan 1,<br>
                6828 XB Arnhem<br>
            </p>
        </div>
        <div id="second">
            <h5><p style="color: #01a3c1;">Contactformulier:</p></h5>
            <form>
                @csrf

                {{-- Naam en Email --}}
                <div class="row">
                    <div class="col-5">
                        <input type="text" class="form-control contact-input" id="name" placeholder="naam" required>
                    </div><div class="col-5">
                        <input type="email" class="form-control contact-input" id="email" placeholder="email" required>
                    </div>
                </div>

                <br>

                {{-- Onderwerp --}}
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control contact-input" id="name" placeholder="onderwerp" required>
                    </div>
                </div>

                <br>

                {{-- Bericht --}}
                <div class="row">
                    <div class="col-10">
                        <textarea name="message" id="message" class="form-control contact-textarea" placeholder="schrijf uw bericht" required></textarea>
                    </div>
                </div>

                <br>

                <div class="form-check">
                    <input class="form-check-input" onchange="document.getElementById('sendMail').disabled = !this.checked;" type="checkbox" value="" id="accept-privacy" name="accept-privacy" required>

                    <label class="form-check-label" for="accept-privacy" style="color: #000000;">
                        Ik ga akkoord dat mij gegevens worden verzameld en opgeslagen.<br> Voor meer informatie bekijk onze privacybeleid pagina
                    </label>
                </div>

                <br>

                <input type="submit" class="btn btn-primary contact-send" name="sendMail" id="sendMail" value="Stuur bericht" disabled>
            </form>
        </div>
    </div>
@endsection
