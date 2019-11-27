@include('elements.header')
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            <h2>{{$id}}</h2>
        </div>
        <!--end heading-->

        <div class="portfoliomain">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="speaker-image">
                    <img src="{{ URL::asset('images/port1.jpg') }}" alt="speaker image" class="img-responsive">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="speaker-content">
                    <p>"Dance is the hidden language of the soul of the body." -Martha Graham</p>
                    <p><strong>Format:</strong></p>
                    <ol>
                        <li>Artellect</li>
                        <li>Crime Secne Investigation</li>
                        <li>Doodleit</li>
                        <li>Inkspire</li>
                        <li>Letter De Amore</li>
                        <li>Lineamic</li>
                        <li>The Entertainer</li>
                        <li>Treasure Hunt</li>
                        <li>Vastra</li>
                    </ol>
                    <ul class="speaker-address">
                        <li><strong>Event Coordinator:</strong></li>
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i></span>DhrubaJyoti Baruah: +918974720551 (Call or Whatsapp)</li>
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i></span>Girish Kumar: +919577173374 (Call or Whatsapp)</li>
                        <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>kuburniton2018@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="schedules" style="padding-top: 80px;">
            <div class="container">
                <div class="section-header text-center">
                    <!--
                                        <h3>Event Schedules</h3>
                                        <p><em>Quickly harness dynamic thinking through value added models.</em></p>
                    -->
                </div>

                <div class="schedule-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#event-one" aria-controls="event-one" role="tab" data-toggle="tab">
                                Artellect

                            </a></li>
                        <li role="presentation"><a href="#event-two" aria-controls="event-two" role="tab" data-toggle="tab">
                                Crime Scene Investigation

                            </a></li>
                        <li role="presentation"><a href="#event-three" aria-controls="event-three" role="tab" data-toggle="tab">
                                Doodleit

                            </a></li>
                        <li role="presentation"><a href="#event-four" aria-controls="event-four" role="tab" data-toggle="tab">
                                Letter D' Amore

                            </a></li>
                        <li role="presentation"><a href="#event-five" aria-controls="event-five" role="tab" data-toggle="tab">
                                Inkspire

                            </a></li>
                        <li role="presentation"><a href="#event-six" aria-controls="event-six" role="tab" data-toggle="tab">
                                Lineamic

                            </a></li>
                        <li role="presentation"><a href="#event-seven" aria-controls="event-seven" role="tab" data-toggle="tab">
                                The Entertainer

                            </a></li>
                        <li role="presentation"><a href="#event-eight" aria-controls="event-eight" role="tab" data-toggle="tab">
                                Treasure Hunt

                            </a></li>
                        <li role="presentation"><a href="#event-nine" aria-controls="event-nine" role="tab" data-toggle="tab">
                                Vastra

                            </a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="event-one">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Artellect</h4>
                                    <p style="text-align: justify;">"The contestants will be tasked with recreating a certain object or model. The contestant whose sketch will be more near to the exactness of the given object or model will be declared winner."</p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The object or model will be given on the spot.</li>
                                        <li>The judges decision will be final and binding.</li>
                                        <li>Drawing sheet,pencil, eraser will be provided.</li>
                                        <li>The contestants must bring their own colours and paint brushes if required.</li>
                                        <li>The contestants must complete the drawing within the allotted time.</li>
                                    </ol>

                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>KU Park</li>
                                            <li><b>Time-limit: </b>1 hour</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 200/Head</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="event-two">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Crime Scene Investigation</h4>
                                    <p style="text-align: justify;"><b>"A crime has been committed by someone. The participants are hired by the KUPD as private investigators to investigate the case with the limited information available. The participants must follow any and all leads to find the culprit so that he or she can be brought to justice. The first team to find culprit will be declared the winner."</b></p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The minimum information for the investigation will be given at the start of the event.</li>
                                        <li>The teams must correctly name the culprit and the motive of the crime.</li>
                                        <li>The first team to correctly name the culprit will be declared the winner.</li>
                                        <li>The winner will be declared at the end of the event.</li>
                                        <li>If any of the teams are found consulting persons other than their team members for hints then they will be disqualified on spot.</li>
                                        <li>Any other details related to the event will be mentioned at the actual event.</li>
                                    </ol>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>KU Campus</li>
                                            <li><b>Time-limit: </b>3 hour</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 400/Team(2 Members)</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->

                        </div>

                        <div role="tabpanel" class="tab-pane" id="event-three">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Doodleit</h4>
                                    <p style="text-align: justify;">"There will be one participant in this event. The participants will make the doodles in accordance to the topics given on the spot. The judgement will be done based on the creativity and uniqueness of the doodle."</p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The decision of the judges is absolute.</li>
                                        <li>Participants need to bring their own supplies.</li>
                                        <li>Paper shall be provided.</li>
                                    </ol>

                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>SOB Lobby</li>
                                            <li><b>Time-limit: </b>1 hour</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 200/Head</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="event-four">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Letter D' Amore</h4>
                                    <p style="text-align: justify;"><b>"The letter can be towards anything or anyone the participants may hold dear. The participants wil be judged based on their use vocabulary and creativity for drafting the letter."</b></p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The decision of the judges is absolute. </li>
                                        <li>The maximum word limit is 500. </li>
                                        <li>The contestants will warrant negative marks if they exceed the given time limit.</li>
                                        <li>Negative points will be warranted for spelling errors and grammatical errors. </li>
                                        <li>Pen and paper for drafting the letter will be provided. </li>
                                    </ol>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>SOB Seminar Hall</li>
                                            <li><b>Time-limit: </b>1 hour</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 200/Head</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->

                        </div>
                        <div role="tabpanel" class="tab-pane" id="event-five">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Inkspire</h4>
                                    <p style="text-align: justify;"><b>"There will be two participants in this event one artist and one model. The participants can make any design related to the theme. The artist can use any color of his/her choice. The judgement will be done on the creativity and the meaning of the tattoo."</b></p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The decision of the judges is absolute.</li>
                                        <li>Pen and paper for designing the tattoo will be provided.</li>
                                        <li>Participants shall bring their own colors.</li>
                                    </ol>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>KU Garden Area</li>
                                            <li><b>Time-limit: </b>1 hour 30 mins</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 400/Team(2 Members)</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->

                        </div>


                        <div role="tabpanel" class="tab-pane" id="event-six">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Lineamic</h4>
                                    <p style="text-align: justify;"><b>"The contestant have to come up with an original yet creative idea and present it as a story in one line. The most interesting and creative story amongst all will take away the prize."</b></p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>1.The guidelines for drafting the story will be given on the spot.
                                        <li>The contestant can submit a maximum of 2 stories only.</li>
                                        <li>The judges decision will be final and binding.</li>
                                        <li>Languages for the story are English, Hindi, Assamese.</li>
                                        <li>Only one winner will be declared( no separate winners for different languages).</li>
                                        <li>Pen and paper will be provided.</li>
                                    </ol>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>SOB seminar hall</li>
                                            <li><b>Time-limit: </b>30 mins</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 150/Head</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->

                        </div>
                        <div role="tabpanel" class="tab-pane" id="event-seven">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">The Entertainer</h4>
                                    <p style="text-align: justify;"><b>"A crime has been committed by someone. The participants are hired by the KUPD as private investigators to investigate the case with the limited information available. The participants must follow any and all leads to find the culprit so that he or she can be brought to justice. The first team to find culprit will be declared the winner."</b></p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The minimum information for the investigation will be given at the start of the event.</li>
                                        <li>The teams must correctly name the culprit and the motive of the crime.</li>
                                        <li>The first team to correctly name the culprit will be declared the winner.</li>
                                        <li>The winner will be declared at the end of the event.</li>
                                        <li>If any of the teams are found consulting persons other than their team members for hints then they will be disqualified on spot.</li>
                                        <li>Any other details related to the event will be mentioned at the actual event.</li>
                                    </ol>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>KU Campus</li>
                                            <li><b>Time-limit: </b>3 hour</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 400/Team(2 Members)</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->

                        </div>
                        <div role="tabpanel" class="tab-pane" id="event-eight">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Treasure Hunt</h4>
                                    <p style="text-align: justify;"><b>"A crime has been committed by someone. The participants are hired by the KUPD as private investigators to investigate the case with the limited information available. The participants must follow any and all leads to find the culprit so that he or she can be brought to justice. The first team to find culprit will be declared the winner."</b></p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The minimum information for the investigation will be given at the start of the event.</li>
                                        <li>The teams must correctly name the culprit and the motive of the crime.</li>
                                        <li>The first team to correctly name the culprit will be declared the winner.</li>
                                        <li>The winner will be declared at the end of the event.</li>
                                        <li>If any of the teams are found consulting persons other than their team members for hints then they will be disqualified on spot.</li>
                                        <li>Any other details related to the event will be mentioned at the actual event.</li>
                                    </ol>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>KU Campus</li>
                                            <li><b>Time-limit: </b>3 hour</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 400/Team(2 Members)</strong></p>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->

                        </div>
                        <div role="tabpanel" class="tab-pane" id="event-nine">
                            <div class="schedule-table table-responsive">
                                <div class="speaker-statement" aria-hidden="true">
                                    <h4 style="text-align: justify;color: lightcoral">Vastra</h4>
                                    <p style="text-align: justify;"><b>"A crime has been committed by someone. The participants are hired by the KUPD as private investigators to investigate the case with the limited information available. The participants must follow any and all leads to find the culprit so that he or she can be brought to justice. The first team to find culprit will be declared the winner."</b></p>
                                    <h5 style="text-align: justify;">Rules And Regulations:</h5>
                                    <br/>
                                    <ol style="text-align: justify;">
                                        <li>The minimum information for the investigation will be given at the start of the event.</li>
                                        <li>The teams must correctly name the culprit and the motive of the crime.</li>
                                        <li>The first team to correctly name the culprit will be declared the winner.</li>
                                        <li>The winner will be declared at the end of the event.</li>
                                        <li>If any of the teams are found consulting persons other than their team members for hints then they will be disqualified on spot.</li>
                                        <li>Any other details related to the event will be mentioned at the actual event.</li>
                                    </ol>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Event Schedule:</h5>
                                        <br/>
                                        <ul style="text-align: justify;">
                                            <li><b>Venu: </b>KU Campus</li>
                                            <li><b>Time-limit: </b>3 hour</li>
                                        </ul>
                                    </div>
                                    <div class="speaker-statement">
                                        <h5 style="text-align: justify;">Registration Fee:</h5>
                                        <br/>
                                        <p style="text-align: justify;"><strong> Rs. 400/Team(2 Members)</strong></p>
                                        <br/>
                                        <button class="col-sm-2 btn-block btn-danger">Register</button>
                                    </div>
                                </div>
                            </div><!-- schedule-table -->

                        </div>


                    </div>

                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <!-- container -->
        </section>
        <!--end project-grid-->
    </div><!--end portfoliomain-->
    <!--end container-->
</section>
