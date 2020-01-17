@include('elements.header')
<section id="portfolio" class="portfolio" style="background: url(../images/png/bghome.png)center center no-repeat fixed;background-size: 85%;">
    <div class="container">

        <div class="heading" style="padding-top:50px;">

            <span style="background: rgba(255, 255, 255, 0.94);margin: 5px;">Frequently Asked Questions</span>
        </div>
        <!--end heading-->
        <div class="portfoliomain">
            <div class="col-sm-offset-2 col-sm-8" style="">
                <div class="accordion" id="accordionExample">

                    <div class="card" style="background: rgba(255, 235, 151, 0.84);margin: 15px;">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px;letter-spacing: 0.9px;">
                                  What is Talent Tantra? 
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="padding:15px;">
                            <div class="card-body">
                                Talent Tantra is Kaziranga University’s landmark event, which is a student led fest that provides a platform to all the students to showcase their talent through a series of good hearted competitions, and win grand prizes. The event is a 3-day arrangement of cultural, sports, literary and fashion related <a href="{{route('tt.event')}}">competitions</a>, followed by <a href="{{route('tt.pronites')}}">pro-nites</a>. 
                            </div>
                        </div>
                    </div>

                    <div class="card" style="background: rgba(255, 235, 151, 0.84);margin: 15px;">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="font-size: 20px;letter-spacing: 0.9px;">
                                  Where is KU located?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample" style="padding:15px;">
                            <div class="card-body">
                                <a href="https://www.google.com/maps/dir/CURRENT+LOCATION/Kaziranga+University,+Koraikhowa,+NH-37,+Jorhat,+Assam+785006/@26.7241995,94.0406657,13z" target="_blank">Kaziranga University</a> is located in the outskirts of Jorhat town in Assam. For more details visit the Contact Info page on the website.
                            </div>
                        </div>
                    </div>

                    <div class="card" style="background: rgba(255, 235, 151, 0.84);margin: 15px;">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="font-size: 20px;letter-spacing: 0.9px;">
                                    How do I register?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample" style="padding:15px;">
                            <div class="card-body">
                                To register yourself for competitions and book a slot, go to the <a href="{{route('tt.contact')}}" alt="">REGISTER</a> tab on the website and fill out the registration form. All payments shall be done at the registration desk at the University Campus, during the early hours of the fest.
                            </div>
                        </div>
                    </div>

                    <div class="card" style="background: rgba(255, 235, 151, 0.84);margin: 15px;">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="font-size: 20px;letter-spacing: 0.9px;">
                                  How Do I reach KU?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample" style="padding:15px;">
                            <div class="card-body">
                                <a href="https://www.google.com/maps/dir/CURRENT+LOCATION/Kaziranga+University,+Koraikhowa,+NH-37,+Jorhat,+Assam+785006/@26.7241995,94.0406657,13z" target="_blank">Kaziranga University</a> is easily accessible by road, rail and airways. The campus is well connected to Jorhat town’s railway station, bus stops and airport. In case you would like to avail bus services, a written request has to be submitted to the organizing committee atleast 15 days in advance of the travel date. 
                            </div>
                        </div>
                    </div>

                    <div class="card" style="background: rgba(255, 235, 151, 0.84);margin: 15px;">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="font-size: 20px;letter-spacing: 0.9px;">
                                  Is Accommodation available?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample" style="padding:15px;">
                            <div class="card-body">
                                Yes, <a href="{{route('tt.accommodation')}}" alt="">Accommodation</a> is available for all 3 days of the fest at Rs. 100/ day with Rs. 100 security which is refundable. Breakfast is excluded. 
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--end portfoliomain-->
    </div>
    <!--end container-->
</section>

@include('elements.footerwidget') @include('elements.footer')