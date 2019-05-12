@extends('portal.layouts.layout')
@section('content')

    <div class="portfolio-landing">
        <div class="container">
            <h1 data-aos="fade-up" data-aos-duration="1000">Bekijk onze projecten.</h1>
            <p data-aos="fade-up" data-aos-duration="1500">Kom meer te weten over de service die wij bieden aan onze klanten.</p>
        </div>
    </div>

    <div class="portfolio-menu" >
        <div class="container">
            <ul data-aos="fade-left" data-aos-duration="1000">
                <li class="active-portfolio">Show all</li>
                <li>Websites</li>
                <li>Web-Applicaties</li>
                <li>Web-Shops</li>
            </ul>
        </div>
    </div>

    <div class="portfolio">
        <div class="portfolio-container">
            <div class="portfolio-content">
                <div class="portfolio-row-1">
                    <div class="portfolio-row-2">
{{--                        bergwerff--}}
                        <div class="client" data-aos="fade-up" data-aos-duration="1200">
                            <div class="client-top-bg">
                            </div>
                            <div class="client-bottom">
                                <h3>Web-Applicatie</h3>
                                <h2>Bergwerff's Vlees</h2>
                                <p>Voor Bergwerff’s Vlees hebben wij een business to business web-applicatie gemaakt.
                                    Hierdoor kunnen de klanten nu 24/7 orders plaatsen.</p>
                                <a class="button-blue hvr-shutter-out-horizontal" href="/client/bergwerff-vlees">Bekijk
                                    Project</a>
                            </div>
                        </div>
{{--client--}}
{{--                        <div class="client">--}}
{{--                            <div class="client-top-bg">--}}
{{--                            </div>--}}
{{--                            <div class="client-bottom">--}}
{{--                                <h3>Web-Applicatie</h3>--}}
{{--                                <h2>Bergwerff's Vlees</h2>--}}
{{--                                <p>Voor Bergwerff’s Vlees hebben wij een business to business web-applicatie gemaakt.--}}
{{--                                    Hierdoor kunnen de klanten nu 24/7 orders plaatsen.</p>--}}
{{--                                <a class="button-blue hvr-shutter-out-horizontal" href="/client/bergwerff">Bekijk--}}
{{--                                    Project</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="portfolio-row-2">
{{--                        <div class="client">--}}
{{--                            <div class="client-top-bg">--}}
{{--                            </div>--}}
{{--                            <div class="client-bottom">--}}
{{--                                <h3>Web-Applicatie</h3>--}}
{{--                                <h2>Bergwerff's Vlees</h2>--}}
{{--                                <p>Voor Bergwerff’s Vlees hebben wij een business to business web-applicatie gemaakt.--}}
{{--                                    Hierdoor kunnen de klanten nu 24/7 orders plaatsen.</p>--}}
{{--                                <a class="button-blue hvr-shutter-out-horizontal" href="/client/bergwerff">Bekijk--}}
{{--                                    Project</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="client">--}}
{{--                            <div class="client-top-bg">--}}
{{--                            </div>--}}
{{--                            <div class="client-bottom">--}}
{{--                                <h3>Web-Applicatie</h3>--}}
{{--                                <h2>Bergwerff's Vlees</h2>--}}
{{--                                <p>Voor Bergwerff’s Vlees hebben wij een business to business web-applicatie gemaakt.--}}
{{--                                    Hierdoor kunnen de klanten nu 24/7 orders plaatsen.</p>--}}
{{--                                <a class="button-blue hvr-shutter-out-horizontal" href="/client/bergwerff">Bekijk--}}
{{--                                    Project</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('portal.partials.ontdenk-avence')
@endsection
