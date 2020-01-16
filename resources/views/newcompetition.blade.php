@include('elements.header')
<section id="portfolio" class="portfolio" style="margin-top:50px;">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            <span>All</span>
            <h2>Competitions</h2>
        </div>
        <!--end heading-->
        <div class="row competitions">

            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#game" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Gaming</h3>
            </div>
            
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#game" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Music</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:18px;">Literary & Arts</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:25px;">Photography</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:15px;">Business Games</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:50px;">Dance</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:5px;">Fashion & Lifestyle</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="">Science & Technology</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Sports</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Drama</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Informals</h3>
            </div>
            <div class="col-md-3 new animate upslide load" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="font-size: 23px;">Workshops & Exhibition</h3>
            </div>
        </div>

    </div>
</section>

<!--end section PORTFOLIO-->
@include('elements.footerwidget') @include('elements.footer')
                <div class="modal fade pone" id="game" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                            	
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="col-md-offset-4 col-md-4">
                                <a href="{{route('tt.eventdet','destroix')}}" style="width:50%;"><h2 class="porttext" style="text-align: center;">Destroix</h2></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>