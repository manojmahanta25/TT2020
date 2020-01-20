@include('elements.header')
<style type="text/css">
    .spon{
        margin-right: 10px;
        display: inline-block;
    }
</style>
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            <span>Our</span>
            <h2>sponsors</h2>
        </div>
        <!--end heading-->
        <div class="row competitions">

            <div class="col-md-3 animate upslide load spon" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <img src="{{ URL::asset('images/sponsors/main/city_broadband.png') }}" alt="" style="width:auto;" />
            </div>
            
            <div class="col-md-3 animate upslide load spon" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <img src="{{ URL::asset('images/sponsors/main/foodies-table.png') }}" alt="" style="width:auto;"/>
            </div>

            <div class="col-md-3 animate upslide load spon" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <img src="{{ URL::asset('images/sponsors/main/hotel_gulmohar_grand.png') }}" alt="" style="width:auto;"/>
            </div>
            <div class="col-md-3 animate upslide load spon" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <img src="{{ URL::asset('images/sponsors/main/monster_energy.png') }}" alt="" style="width:auto;"/>
            </div>
            <div class="col-md-3 animate upslide load spon" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <img src="{{ URL::asset('images/sponsors/main/moti_mahal.png') }}" alt="" style="width:auto;"/>
            </div>
        </div>
        <div class="heading" style="padding-top:50px;">
            <span>Event Sponsors</span>
        </div>  
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol> -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/anju.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/ankur_enterprises.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/asus.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/asusrog.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/germinate.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/goldgym.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/industrial.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/inox.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/ktm.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/mediq.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/nsd.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/Pasoli_Agro.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>                    
                  </div>
                  <div class="item">
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/progotiace.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/shoutout.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ URL::asset('images/sponsors/stay_high.webp') }}" alt="" style="height:100%;width:100%;">
                    </div>
                  </div>
                </div>

                <!-- 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a> -->
              </div>

    </div>
</section>

<!--end section PORTFOLIO-->
@include('elements.footerwidget') @include('elements.footer')
                