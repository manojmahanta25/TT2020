<!--********************SECTION FOOTER********************-->
<section id="contact" style="background: url('{{ URL::asset('./images/fotter_bg.webp') }}') center center no-repeat;background-size:cover;">
    <div class="container ftmrt" @if($page!="home") style="margin-top:0px;padding-top:50px;" @endif>
        <div class="col-md-4">
            <img src="{{ URL::asset('images/ku_logo.png') }}" class="ftsmbtn" alt="" />
            <img src="{{ URL::asset('images/ttlogo_720.png') }}" class="ftsmbtn" alt="" />
            <img src="{{ URL::asset('images/svg/safarnama.svg') }}" class="ftsafar ftsmbtn" alt="" />
        </div>

        <div class="col-md-4">
            <div class="ftpad6040">
                <a href="{{route('tt.register')}}" class="ftheading">REGISTER</a>
            </div>
            <div class="ftpad4030">
                <h1 class="ftheading">LEARN MORE</h1>
                <a href="{{route('tt.event')}}" class="ftsubhead">COMPETITIONS</a>
                <br/>
                <a href="{{route('tt.accommodation')}}" class="ftsubhead">ACCOMMODATION</a>
                <br/>
                <a href="{{route('tt.rnr')}}" class="ftsubhead">RULES AND REGULATIONS</a>
            </div>
            <div class="ftpd20">
                <h1 class="ftheading">SOCIAL MEDIA</h1>
                <a href="#" target="_blank" alt=""><img src="{{ URL::asset('images/svg/facebook.svg') }}" alt="" class="ftfb" /></a>
                <a href="#" target="_blank" alt=""><img src="{{ URL::asset('images/svg/instagram.svg') }}" alt="" class="ftin" /></a>
                <a href="#" target="_blank" alt=""><img src="{{ URL::asset('images/svg/youtube.svg') }}" alt="" class="ftyt" /></a>
            </div>
            <div class="ftpd20">
                <a href="{{route('tt.termsofuse')}}" target="_blank" alt="" style="color:white;">Term of Use</a> | 
                <a href="{{route('tt.privacypolicy')}}" target="_blank" alt="" style="color:white;">Privacy Policy</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pd40">
                <a href="{{route('tt.contact')}}" class="ftheading">CONTACT US</a>
            </div>
            <div class="pd40">
                <a href="{{route('tt.faq')}}" class="ftheading">FAQ</a>
            </div>
            <div class="pd40">
                <a href="{{route('tt.sponsor')}}" class="ftheading">SPONSORS</a>
            </div>
            <div class="pd40">
                <a href="{{route('tt.csr')}}" class="ftheading">CSR</a>
            </div>
        </div>
    </div>
    <!--end container-->
    <!--end section FOOTER-->
</section>
