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
                <div class="form-style-8">
                    <form>
                        <input type="text" name="field1" placeholder="Full Name" required/>
                        <input type="email" name="field2" placeholder="Email" required/>
                        <input type="url" name="field3" placeholder="Company Name" required/>
                        <textarea placeholder="Your experience with Avence" required></textarea>
                        <input class="button-blue hvr-shutter-out-horizontal"  type="button" value="Send Message" />
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection