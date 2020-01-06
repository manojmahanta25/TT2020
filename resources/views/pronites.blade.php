@include('elements.header')
<style type="text/css">

</style>
<section id="home" class="main fixed-bg inhome artist">
    <div class="col-md-12" style="height: 100%;">
                <img src="{{ URL::asset('images/artist/the_local_train.webp') }}" alt="" class="art1"/>
                <img src="{{ URL::asset('images/artist/ritviz.webp') }}" alt="" class="art2"/>
                <img src="{{ URL::asset('images/artist/harrdy_sandhu.webp') }}" alt="" class="art3"/>
                <img src="{{ URL::asset('images/artist/island-warrior.webp') }}" alt="" class="art4"/>
                <!--<p class="artp">CLICK ON THE ARTSIT'S TAB TO LISTEN TO THE TOP HITS</p>-->
    </div>
    <div id="myDiv"> 

        <span id="mySpan">ARTIST&nbsp;&nbsp;<i style="font-weight: 400;">LINEUP</i></span>

    </div>
</section>
@include('elements.footerwidget')
@include('elements.footer')