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
            
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#music" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Music</h3>
            </div>

            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#liter" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:18px;">Literary & Arts</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#photo" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:25px;">Photography</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#bgames" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:15px;">Business Games</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#dance" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:50px;">Dance</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#fashion" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:5px;">Fashion & Lifestyle</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#scntech" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="">Science & Technology</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#sports" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Sports</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#drama" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Drama</h3>
            </div>
            <div class="col-md-3 new animate upslide load" data-toggle="modal" data-target="#informals" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
                <h3 style="margin-left:45px;">Informals</h3>
            </div>
            <div class="col-md-3 new animate upslide load"  data-toggle="modal" data-target="#workshops" style="animation-delay: 0.2s;-webkit-animation-delay: 0.2s;">
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
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="col-md-offset-4 col-md-4" style="margin-bottom: 20px;">
                                <a href="{{route('tt.eventdet','destroix')}}" style="width:50%;"><h2 class="porttext" style="text-align: center;">Destroix</h2></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade pone" id="music" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                    <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','falsetto')}}" alt="Falsetto"><h2 class="porttext">Falsetto</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','singphonic')}}" alt="Singphonic"><h2 class="porttext">Singphonic</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','mokshmantra')}}" alt="Moksh Mantra"><h2 class="porttext">Moksh Mantra</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','rapbattle')}}" alt="Rap Battle"><h2 class="porttext">Rap Battle</h2></a>
                                        </div><!--competitions/beatboxing-->
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','beatboxing')}}" alt="Beatboxing"><h2 class="porttext">Beatboxing</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="liter" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body"> 
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','postermaking')}}" alt="Poster Making"><h2 class="porttext">Poster Making</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','collagemaking')}}" alt="Collage Making"><h2 class="porttext">Collage Making</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','livesketch')}}" alt="Live Sketch"><h2 class="porttext">Live Sketch</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','quiz')}}" alt="Quiz"><h2 class="porttext">Quiz</h2></a>
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="photo" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                    <div class="col-sm-12" style="text-align: center;color: white;margin-bottom: 20px;"><h2>Focusia</h2></div>
                                        <div class="col-md-5" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','onlinephotocompetition')}}" alt="Online Photo Competition"><h2 class="porttext">Online Photo Competition</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','onspotcampus')}}" alt="On Spot Campus"><h2 class="porttext">On Spot Campus</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','selfiecompetition')}}" alt="Selfie Competition"><h2 class="porttext">Selfie Competition</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="bgames" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                    <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','streettales')}}" alt="Street Tales"><h2 class="porttext">Street Tales</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','kickstart')}}" alt="Kick Start"><h2 class="porttext">Kick Start</h2></a>
                                        </div>
                                        <div class="col-md-5" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','priceisright')}}" alt="Price is Right- Bidding War"><h2 class="porttext">Price is Right- Bidding War</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="dance" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                    <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','burniton')}}" alt="Burn it On"><h2 class="porttext">Burn it On</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','crewvscrew')}}" alt="Crew Vs. Crew"><h2 class="porttext">Crew Vs. Crew</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="fashion" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                    <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','winterrunway')}}" alt="Winter Runway"><h2 class="porttext">Winter Runway</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','firelesscooking')}}" alt="Fireless Cooking"><h2 class="porttext">Fireless Cooking</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="scntech" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                  <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','wastetowealth')}}" alt="Waste to Wealth"><h2 class="porttext">Waste to Wealth</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','aeromodelling')}}" alt="Aero-Modeling"><h2 class="porttext">Aero - modeling</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','exemplar')}}" alt="Exemplar(Science Model Display)"><h2 class="porttext" style="padding-bottom: 25px;">Exemplar <span style="font-size: 16px;line-height: 0em;display: block;">(Science Model Display)</span></h2></a>
                                        </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="sports" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                    <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','crossfit')}}" alt="CrossFit"><h2 class="porttext">CrossFit</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','lawntennis')}}" alt="Lawn Tennis"><h2 class="porttext">Lawn Tennis</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','cricket')}}" alt="Cricket"><h2 class="porttext">Cricket</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','basketball')}}" alt="Basketball"><h2 class="porttext">Basketball</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','badminton')}}" alt="Badminton"><h2 class="porttext">Badminton</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.comingsoon','football')}}" alt="Football"><h2 class="porttext">Football</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="drama" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                     <div class="col-md-offset-2 col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','rangmanch')}}" alt="Rangmanch(Street Play)"><h2 class="porttext">Rangmanch <span style="font-size: 16px;line-height: 0em;display: block;">(Street Play)</span></h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade pone" id="informals" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                    <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','openmic')}}" alt="Open Mic"><h2 class="porttext">Open Mic</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','justaminute')}}" alt="Just A Minute"><h2 class="porttext">Just A Minute</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','facepainting')}}" alt="Face Painting"><h2 class="porttext">Face Painting</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','uno')}}" alt="UNO"><h2 class="porttext">UNO</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','treasurehunt')}}" alt="Treasure Hunt"><h2 class="porttext">Treasure Hunt</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','jenga')}}" alt="Jenga"><h2 class="porttext">Jenga</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','loveletterwriting')}}" alt="Love Letter Writting"><h2 class="porttext">Love Letter Writting</h2></a>
                                        </div>
                                        <div class="col-md-5" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','crimesceneinvestigation')}}" alt="Crime Scene investigation"><h2 class="porttext">Crime Scene investigation</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade pone" id="workshops" role="dialog">
                    <div class="modal-dialog modal-lg" style="width:90%;margin-top: 20px;">
                        <div class="modal-content">
                            <div class="row modal-body">                                
                                <div class="col-md-12" style="margin-bottom: 20px;height:20px;">                               
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                    <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','bitbybit')}}" alt="Bit-by-Bit"><h2 class="porttext">Bit-by-Bit</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','techtalk')}}" alt="TechTalks"><h2 class="porttext">TechTalks</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','danceworkshop')}}" alt="Dance Workshop"><h2 class="porttext">Dance Workshop</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','theatreworkshop')}}" alt="Theatre Workshop"><h2 class="porttext">Theatre Workshop</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','actingworkshop')}}" alt="Acting Workshop"><h2 class="porttext">Acting Workshop</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','flimmakingworkshop')}}" alt="Flim Making Workshop"><h2 class="porttext">Flim Making Workshop</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','cookingworkshop')}}" alt="Cooking Workshop"><h2 class="porttext">Cooking Workshop</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a href="{{route('tt.eventdet','singingworkshop')}}" alt="Singing Workshop"><h2 class="porttext">Singing Workshop</h2></a>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 20px;"><a href="{{route('tt.eventdet','modelingworkshop')}}" alt="Modeling Workshop"><h2 class="porttext">Modeling Workshop</h2></a>
                                        </div>
                                        <div class="col-md-6 col-md-offset-3" style="margin-bottom: 20px;"><a  href="{{route('tt.eventdet','fashionphotographyworkshop')}}" alt="Fashion Photography Workshop"><h2 class="porttext">Fashion Photography Workshop</h2></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                