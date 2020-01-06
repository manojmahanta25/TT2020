@include('elements.header')
<section id="home" class="main fixed-bg inhome " style="overflow-x: hidden; overflow-y: hidden;">
    <a href="{{route('tt.pass')}}" alt=""><img src="{{ URL::asset('images/webp/tickets.webp') }}" alt="" class="in_ticket" /></a>
    <a href="{{route('tt.register')}}" alt=""><img src="{{ URL::asset('images/webp/register.webp') }}" alt="" class="in_register" /></a>
    <a href="{{route('tt.accommodation')}}" alt=""><img src="{{ URL::asset('images/webp/accomodation.webp') }}" alt="" class="in_acco" /></a>

    <a href="{{route('tt.pronites')}}" alt=""><img src="{{ URL::asset('images/webp/pronites.webp') }}" alt="" class="in_pronite" /></a>
    <a href="{{route('tt.contact')}}" alt=""><img src="{{ URL::asset('images/webp/contact.webp') }}" alt="" class="in_contact" /></a>

    <a href="https://www.google.com/maps/dir/CURRENT+LOCATION/Kaziranga+University,+Koraikhowa,+NH-37,+Jorhat,+Assam+785006/@26.7241995,94.0406657,13z" target="_blank" alt=""><img src="{{ URL::asset('images/webp/reachus.webp') }}" alt="" class="in_reach" /></a>
    <a href="{{route('tt.event')}}" alt=""><img src="{{ URL::asset('images/webp/competition.webp') }}" alt="" class="in_competition" /></a>
    <div class="in_hotairballon">
        <img src="{{ URL::asset('images/webp/hotairballon.webp') }}" alt="" class="hotballon" />
    </div>

    <!--<img src="./images/png/plane.png" alt="" class="in_plane"/>
        <img src="./images/png/camera.png" alt="" class="in_camera"/>
        <img src="./images/png/hat.png" alt="" class="in_hat"/>
        <img src="./images/png/tent.png" alt="" class="in_tent "/>
        <img src="./images/png/sandal.png" alt="" class="in_sandal"/>-->

    <div class="maindivL">
        <img src="{{ URL::asset('images/svg/logo.svg') }}" style="width: 30%;">
    </div>
</section>
<!--end section home-->

<!--********************SECTION ABOUT********************-->
<section id="about" class="fixed-bg inhome">
    <div class="row">
        <div class="countdiv" style="color:#d62b6c;">
            <div class="counter" data-count="35000"></div>FOOTFALL</div>
        <div class="countdiv" style="color:#0080d6;">
            <div class="counter" data-count="40"></div>ARTISTS</div>
        <div class="countdiv" style="color:#fd7400;">
            <div class="counter" data-count="426"></div>EVENTS</div>
        <div class="countdiv" style="color:#912046;">
            <div class="counter" data-count="20000"></div>CHECK INS</div>
        <div class="countdiv" style="color:#05aee8;">
            <div class="counter" data-count="23000" style="border-right:none;"></div>SHARES</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 about-tt">
                <h2 class="abth1txt"><span class="abtspn">About</span> Talent Tantra</h2>
                <p class="abtsince animate slideUp">Since 09-01-2015</p>
                <p class="abttext animate slideUp">Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.</p>
                <p class="abttext animate slideUp">The 2020 edition of Talent Tantra is scheduled to be held between 31<sup>st</sup> January, 2020 and 2<sup>nd</sup>February, 2020 and will host over 40 competitions and workshops. With a wide variety of events that range from theatre and singing competitions to sporting events like football and basketball. Talent Tantra provides a healthy mix of cultural, literary and sporting experiences. In addition, Talent Tantra boasts of three star studded musical nights.</p>
            </div>
            <!--end-->
        </div>

        <div class="row">
            <div class="col-md-2" class="abtpt50">
                <img src="{{ URL::asset('images/webp/Baloon.webp') }}" alt="" class="abtsmele" />
                <img src="{{ URL::asset('images/webp/safarnama.webp') }}" alt="" class="abtsmele" />
            </div>
            <div class="col-md-10 about-ss">/n./
                <br/>Safar, Urdu for Travel; Nama, a story of it. A strong desire to travel and wander the world, one adventure at a time.
            </div>
        </div>

        <div class="col-md-offset-4 col-md-9">
            <img src="{{ URL::asset('images/webp/Monuments.webp') }}" alt="" class="abtsmele abtmonument">
        </div>

    </div>
    <!--end container-->
</section>
<!--end section ABOUT-->
@include('elements.footerwidget')
@include('elements.footer')
