@extends('layouts.layout')

@section('content')

    <section class="home-header">
        <div class="container">
            <div class="header-text">
                <h1>Website Design & Development</h1>
                <p>Avence is een team van developers en designers die nauw samenwerken om uw wensen om te zetten in
                    maatwerk websites en webapplicaties.</p>
                <div class="header-buttons">
                    <div class="button-1">
                        <a href="#">Over ons</a>
                    </div>
                    <div class="button-2">
                        <a href="#">Diensten</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    {{--icon boxes--}}


    <section class="home-icons">
        <div class="container">
            <div class="icons-content">
                <div class="icons-section">
                    <i class="fas fa-mobile-alt fa-2x"></i>
                    <h5>Responsive</h5>
                    <hr>
                    <p>
                        Telefoon, tablet of laptop? Uw website werkt op elk device.
                    </p>
                </div>
                <div class="icons-section">
                    <i class="fas fa-paint-brush fa-2x"></i>
                    <h5>Creative Design</h5>
                    <hr>
                    <p>Onze designers ontwerpen uw website gebaseerd op de laatste design trends
                    </p>
                </div>
                <div class="icons-section">
                    <i class="fas fa-comments fa-2x"></i>
                    <h5>Communication</h5>
                    <hr>
                    <p>
                        Door goede communicatie kunnen wij uw project succesvol realiseren.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-diensten">
        <div class="container">
            <div>
                <div class="home-website">
                    <div class="website-img">
                        <img src="/images/pages/home/website.png" alt="#">
                    </div>
                    <div class="website-text">
                        <h2>Website</h2>
                        <p>Door middel van een persoonlijk design geven wij uw bedrijf op het internet een goede
                            uitstraling. Van portfolio’s tot aan geavanceerde webapplicaties. </p>
                        <a class="button" href="#">Lees meer</a>
                    </div>
                </div>
            </div>


            <div>
                <div class="home-website">
                    <div class="website-text">
                        <h2>Webshop</h2>
                        <p>Nog geen goede manier gevonden om uw klanten kennis te laten maken met uw producten? Door middel van een webshop/bestelapplicaties
                            maken wij dit voor u mogelijk. </p>
                        <a class="button" href="#">Lees meer</a>
                    </div>
                    <div class="website-img">
                        <img src="/images/pages/home/webshop.png" alt="#">
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="home-responsive">
        <div class="container">
            <div class="responsive-content">
                <div class="responsive-phone">
                    <img src="/images/pages/home/iphonex.png" alt="#">
                </div>
                <div class="responsive-text">
                    <h5>Phone, Tablet, Laptop & Desktop</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, </p>
                </div>
            </div>
        </div>
    </section>










@endsection