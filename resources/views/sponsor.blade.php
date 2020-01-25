@include('elements.header')
<style type="text/css">
    .spon{
        margin-bottom: 20px;
        display: inline-block;
        animation-delay: 0.2s;
        -webkit-animation-delay: 0.2s;
        
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
         <div class="col-md-3 animate upslide load spon">
            <img src="{{ URL::asset('images/sponsors/main/city_broadband.webp') }}" alt="" style="height:100%;width:100%;"/>
         </div>
         <div class="col-md-3 animate upslide load spon">
            <img src="{{ URL::asset('images/sponsors/main/foodies-table.webp') }}" alt="" style="height:100%;width:100%;"/>
         </div>
         <div class="col-md-3 animate upslide load spon">
            <img src="{{ URL::asset('images/sponsors/main/hotel_gulmohar_grand.webp') }}" alt="" style="height:100%;width:100%;"/>
         </div>
         <div class="col-md-3 animate upslide load spon">
            <img src="{{ URL::asset('images/sponsors/main/monster_energy.webp') }}" alt="" style="height:100%;width:100%;"/>
         </div>
         <div class="col-md-3 animate upslide load spon">
            <img src="{{ URL::asset('images/sponsors/main/moti_mahal.webp') }}" alt="" style="height:100%;width:100%;"/>
         </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/inox.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/ktm.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      </div>
      <div class="heading" style="padding-top:50px;">
         <span>Event Sponsors</span>
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/anju.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/ankur_enterprises.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/asus.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/asusrog.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/germinate.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/goldgym.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/industrial.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/mediq.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/nsd.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/Pasoli_Agro.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/progotiace.webp') }}" alt="" style="height:100%;width:100%;">
      </div>
      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/stayhigh.webp') }}" alt="" style="height:100%;width:100%;">
      </div>

<!-- 
      <div class="heading" style="padding-top:50px;">
         <span>After Movie Partner</span>
      </div>

      <div class="col-md-3 animate upslide load spon">
         <img src="{{ URL::asset('images/sponsors/stayhigh.webp') }}" alt="" style="height:100%;width:100%;">
      </div> -->
   </div>
</section>
<!--end section PORTFOLIO-->
@include('elements.footerwidget') @include('elements.footer')
                