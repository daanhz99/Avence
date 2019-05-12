@extends('portal.layouts.layout')
@section('content')

    <div class="about-us">
        <div class="container">
            <div class="about-us-content">
                <h1 data-aos="fade-up" data-aos-duration="1000" >Over Ons</h1>
                <p data-aos="fade-up" data-aos-duration="1500" >Avence is een team van developers en designers die nauw samenwerken. Wij focussen op het ontwikkelen
                    van maatwerk websites en webapplicaties.
                </p>
            </div>
        </div>
    </div>

    <div class="about-us-landing">
        <div class="container">
            <div class="about-us-landing-content">
                <div data-aos="fade-left" data-aos-duration="1000" class="about-us-left">
                    <h1>Aangenaam,<br>wij zijn Avence.</h1>
                    <p>Avence is een team van developers en designers die nauw samenwerken. Wij focussen op het
                        ontwikkelen van maatwerk websites en webapplicaties. Doordat wij op de hoogte zijn van de
                        laatste trends, kunt u rekenen op een goedwerkende website die geschikt is voor elk scherm. Door
                        uw wensen te combineren met onze kwaliteiten, kunnen wij uw project succesvol realiseren. Door
                        middel van korte communicatielijnen tussen klant en ontwikkelaar, kunnen wij u snel en efficiënt
                        in uw wensen voorzien.</p>
                    <a class="button-blue hvr-shutter-out-horizontal" href="#">Contact</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" class="about-us-right">
                    <img src="/images/about/computer.png" alt="#">
                </div>
            </div>
        </div>
    </div>

    <div class="ontworpen-voor-elk-toestel-bg">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1453" height="207.464"
             viewBox="0 0 1453 207.464">
            <defs>
                <filter id="Path_297" x="0" y="0" width="1453" height="207.464" filterUnits="userSpaceOnUse">
                    <feOffset dy="15" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="14.5" result="blur"/>
                    <feFlood flood-opacity="0.043"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                </filter>
            </defs>
            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Path_297)">
                <path id="Path_297-2" data-name="Path 297"
                      d="M0,547.361H1366v85.768s-155.945,34.7-385.828,34.7-289.8-5.928-533.7-34.7S0,646,0,646Z"
                      transform="translate(43.5 -518.86)" fill="#fff"/>
            </g>
        </svg>
    </div>

    <div  class="our-team">
        <div class="container">
            <div class="our-team-top">
                <h1 data-aos="fade-left" data-aos-duration="1000" >Ons team.</h1>
                <p data-aos="fade-right" data-aos-duration="1200" >Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt </p>
            </div>
            <div data-aos="fade-down" data-aos-duration="1400" class="our-team-bottom">
                <div class="team-member">
                    <img src="../images/about/Avatar.png" alt="">
                    <h4>Name</h4>
                    <p>Function</p>
                </div>
                <div class="team-member">
                    <img src="../images/about/Avatar.png" alt="">
                    <h4>Name</h4>
                    <p>Function</p>
                </div>
                <div class="team-member">
                    <img src="../images/about/Avatar.png" alt="">
                    <h4>Name</h4>
                    <p>Function</p>
                </div>
                <div class="team-member">
                    <img src="../images/about/Avatar.png" alt="">
                    <h4>Name</h4>
                    <p>Function</p>
                </div>
            </div>
        </div>
    </div>


    @include('portal.partials.ontdenk-avence')
@endsection