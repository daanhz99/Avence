@extends('portal.layouts.layout')
@section('content')

    <div class="contact-landing">
        <div class="container">
            <h1 data-aos="fade-up" data-aos-duration="1000">Contact</h1>
            <p data-aos="fade-up" data-aos-duration="1250">Avence is een team van developers en designers die nauw samenwerken. Wij focussen op het ontwikkelen van
                maatwerk websites en webapplicaties.
            </p>
        </div>
    </div>

    <div class="contact-content">
        <div class="container">
            <div class="contact-content-middle">
                <div class="contact-map" data-aos="fade-left" data-aos-duration="1000">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2464.062176034911!2d4.523029915782979!3d51.8598211796946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c4322defbf2f53%3A0x7f36c39304c41bb!2sBakemaveld+1%2C+2992+HL+Barendrecht%2C+Netherlands!5e0!3m2!1sen!2ses!4v1556054550421!5m2!1sen!2ses"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="contact-message" data-aos="fade-right" data-aos-duration="1000">
                    <h1>Contact</h1>
                    <p>Stuur ons een bericht. Wij antwoorden u zo snel mogelijk.</p>
                    <div class="contact-message-content">
                        <form>
                            <div class="full-name">
                                <input type="text" required placeholder="Voornaam">
                                <input type="text" required placeholder="Achternaam">
                            </div>
                            <input type="email" placeholder="Email" required>
                            <textarea required placeholder="Your Message"></textarea>
                            <a class="button-blue" href="#">Verstuur</a>
                        </form>
                    </div>
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

    <div class="ontdek-avence-contact">
        {{--ONTDEKAVENCE TEXT--}}
        <div class="ontdek-avence">
            <div class="container">
                <div class="ontdek-avence-content">
                    <div class="ontdek-avence-picture" data-aos="fade-left" data-aos-duration="1000">
                        <img src="../images/partials/ontdek-avence/people.png" alt="">
                    </div>
                    <div class="ontdek-avence-text" data-aos="fade-right" data-aos-duration="1000">
                        <h1>Ontdenk Avence.</h1>
                        <p>Bij serieuze interesse kunt u een gratis afspraak maken om uw wensen en behoeftes te
                            bespreken. Het doel van dit gesprek is om te begrijpen wat uw bedrijf/organisatie inhoudt,
                            waardoor wij een succesvolle website/webapplicatie vuur u kunnen realiseren die helemaal
                            past bij uw bedrijf.
                            Wij komen graag op locatie, maar ook bij ons bent u van harte welkom.
                        </p>
                        <a class="button-blue hvr-shutter-out-horizontal"  href="#">Gratis afspraak maken</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection