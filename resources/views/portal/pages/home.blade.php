@extends('portal.layouts.layout')
@section('content')

    <div class="landing">
        <div class="container">
            <h1 data-aos="fade-up" data-aos-duration="750">Website Development.</h1>
            <p data-aos="fade-up" data-aos-duration="900" >Wij focussen op het ontwikkelen van maatwerk websites en webapplicaties.
            </p>
        </div>
    </div>
    {{--    ONTWORPEN VOOR ELK TOESTEL--}}
    <div class="ontworpen-voor-elk-toestel">
        <div class="container">
            <div class="ontwerpen-voor-elk-toestel-content">
                <div data-aos="fade-left" data-aos-duration="750" class="ontwerpen-voor-elk-toestel-content-1">
                    <h1>Ontworpen <br> voor elk toestel.</h1>
                    <p>Tegenwoordig gaat meer dan 50% van het internetverkeer via een mobiel apparaat. Wij begrijpen dat
                        het daarom van groot belang is dat uw klanten uw website op elk apparaat kunnen bezoeken.
                        Doordat ons designteam op de hoogte is van de laatste design trends, kunnen wij een
                        website/webshop creëren die helemaal matcht met uw bedrijf. Hierdoor zullen uw bezoekers een
                        onvergetelijke ervaring beleven.
                    </p>
                    <div class="ontworpen-voor-elk-toestel-buttons">
                        <a class="button-blue hvr-shutter-out-horizontal" href="#">Diensten
                        </a>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-duration="750" class="ontwerpen-voor-elk-toestel-content-2">
                    <img src="/images/home/elk-toestel.png" alt="#">
                </div>
            </div>
        </div>
    </div>
    {{--    ONZE DIENSTEN--}}
    @include('portal.partials.services')
    {{--    TESTIMONIALS--}}
    @include('portal.partials.testimonials')
    {{--    ONTDEK AVENCE--}}
    @include('portal.partials.ontdenk-avence')
@endsection
