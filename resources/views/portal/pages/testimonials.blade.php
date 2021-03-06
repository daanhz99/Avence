@extends('portal.layouts.layout-clean')
@section('content')

    <div class="testimonials">
        <div class="testimonials-container">
            <div class="logo-top">
                <img src="/images/header/Avence-Black.png" alt="#">
            </div>
            <div class="testimonials-content">
                <h1>Testimonials</h1>
                <p>Your experience is important to us!</p>

                @if(isset($success) && $success)
                    <p>Bedankt voor het delen van uw ervaring!</p>
                @elseif (isset($success) && !$success)
                    <p>Oops, er is iets fout gegaan, neem alstublieft contact op met uw contactpersoon bij Avence. Bij
                        voorbaat dank.</p>
                @endif

                <div class="form-style-8">
{{--                    <form method="post" action="/testimonials">--}}
{{--                        {{ csrf_field() }}--}}
{{--                        <input type="text" placeholder="Full Name" required name="full_name" />--}}
{{--                        <input type="email" placeholder="Email" required name="email" />--}}
{{--                        <input type="text" placeholder="Company Name" required name="company_name" />--}}
{{--                        <textarea placeholder="Your experience with Avence" required name="experience"></textarea>--}}
{{--                        <input class="button-blue hvr-shutter-out-horizontal" type="submit" value="Send Message"/>--}}
{{--                    </form>--}}

                    <form action="https://formcarry.com/s/R5DAnjSeqdj" method="POST" accept-charset="UTF-8" >
                        <input type="text" name="full_name" placeholder="Full name">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="message" placeholder="Your experience with Avence"></textarea>
                        <input type="hidden" name="_subject" value="Nieuwe testimonial">
                        <input type="hidden" name="_after" value="http://avence.nl/testimonials?sent=true">
                        <input type="hidden" name="_honeypot" value="">
                        <input type="hidden" name="_confirmation" value="">
                        <input type="submit" class="button-blue hvr-shutter-out-horizontal" value="Send Message">
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection