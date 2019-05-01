@extends('portal.layouts.layout')
@section('content')

<div class="client-top">
    <div class="container">
        <div class="client-landing">
            <h1>Bergwerff’s Vlees</h1>
            <p>Kom meer te weten over de service die wij bieden aan onze klanten</p>
        </div>
    </div>
</div>
<div class="client-middle">
    <div class="container">
        <div class="client-middle-info">
            <div class="client-about-left">
                <p>Client</p>
                <h3 class="space-below">Bergwerff's Vlees</h3>
                <p>Services</p>
                <ul>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">VueJS</a></li>
                </ul>
                <ul>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>
            </div>
            <div class="client-about-middle">
                <p>Datum</p>
                <h3 class="space-below">24/04/2019</h3>
                <p>Link</p>
                <h3>Private</h3>
            </div>
            <div class="client-about-right">
                <h1>Project Info</h1>
                <p>Kom meer te weten over de service die wij bieden aan onze klantenKom meer te weten over de service die wij bieden aan onze klantenKom meer te weten over de service die wij bieden aan onze klantenKom meer te weten over de service die wij bieden aan onze klanten</p>
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

    @include('portal.partials.ontdenk-avence')
@endsection