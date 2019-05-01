@extends('portal.layouts.layout')
@section('content')

    <div class="portfolio-landing">
        <div class="container">
            <h1>Check onze projecten.</h1>
            <p>Kom meer te weten over de service die wij bieden aan onze klanten</p>
        </div>
    </div>

    <div class="portfolio">
        <div class="container">
            <div class="portfolio-content">
                {{--                bergwerff--}}
                <div class="client">
                    <div class="client-top">
                        <img src="../images/home/landingbg.jpg" alt="">
                    </div>
                    <div class="client-bottom">
                        <h2>Bergwerff's Vlees</h2>
                        <p>Voor Bergwerff’s Vlees hebben wij een business to business web-applicatie gemaakt.</p>
                        <a href="#">Lees meer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('portal.partials.ontdenk-avence')
@endsection
