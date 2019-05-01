@extends('portal.layouts.layout-clean')
@section('content')

    <div class="klantenlogin">
        <div class="kl-header">
            <div class="container">
                <div class="kl-header-content">
                    <div class="kl-logo">
                        <a class="menu-logo" href="/"><img src="../images/klantenlogin/Avence-White.png" alt="#"></a>
                    </div>
                    <div class="kl-button">
                        <a class="button-white" href="/">Terug naar de website</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kl-content">
            <div class="kl-container">
                <div class="kl-login">
                    <h1>Klantenlogin.</h1>
                    <p>Door middel van ons klantenlogin systeem, krijgt u als klant, inzicht in uw lopende projecten en
                        de voortgang daarvan.</p>
                    <form>
                        <input type="text" required placeholder="Gebruikersnaam" id="klantenlogin">
                        <input type="password" required placeholder="Wachtwoord" id="klantenlogin">
                        <a id="klantenlogin" class="button-blue hvr-shutter-out-horizontal" href="/klantenlogin">Inloggen</a>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection