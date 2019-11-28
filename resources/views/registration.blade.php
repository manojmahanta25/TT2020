@include('elements.header')
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            {{--            <h2>Event</h2>--}}
            <span>Registration</span>
        </div>
        <!--end heading-->
        <div class="portfoliomain">
            {!! Form::open(['url' => 'foo/bar']) !!}
            <div class="form-group row">
                {{Form::label('events','Events',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::select('event',[
                        'mokshmantra'=>'Moksh Mantra',
                        'singphonic'=>'Sing Phonic',
                        'Destroix'=>['csgo'=> 'Counter Strike Global Offensive','ml'=>'Mobile Legend', 'cod'=>'Call Of Duty Mobile','pubg'=>'PUBG Mobile','nfsmw'=>'Need For Speed Most Wanted','fifa'=>'FIFA'],
                        'Burn It On'=>['biosolo'=>'Solo','biogroup'=>'Group','adaptune'=>'Adaptune'],
                         'Sports'=>['armwrestling'=>'Arm Wrestling', 'cricket'=>'Cricket', 'football'=>'Football','basketball'=>'Basketball','badminton'=>'Badminton','Lawn Tennis'=>['lawntennissingle'=>'Single','lawntennisdouble'=>'Mix or Double']],
                    ],
                    ['class'=>'form-control']
                    )}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('members','Total Members',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::selectRange('members',4,8, ['class'=>'form-control ', 'placeholder'=>'Enter Team Name'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('teamname','Team Name',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('teamname','', ['class'=>'form-control ', 'placeholder'=>'Enter Team Name'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('teamleader','Team Leader',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('teamleader','', ['class'=>'form-control ', 'placeholder'=>'Enter Leader Name'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('email','Email',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::email('email','', ['class'=>'form-control', 'placeholder'=>'Enter Email','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('phone','Phone',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::email('tel','', ['class'=>'form-control', 'placeholder'=>'Enter Phone','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('address','Address',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::textarea('address','', ['class'=>'form-control', 'placeholder'=>'Enter your address','required','rows'=>5, 'cols'=>10])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('pin','Pin Code',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('pin','', ['class'=>'form-control', 'placeholder'=>'Enter Pin Code','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('district','District',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('district','', ['class'=>'form-control', 'placeholder'=>'Enter district','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('college','College/Institute Name',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('college','', ['class'=>'form-control', 'placeholder'=>'Enter College/Institute Name','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('Accoma','Required Accomodations',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::radio('acco','yes')}} {{Form::label('acco','yes')}}
                    {{Form::radio('acco','no',true)}} {{Form::label('acco','no')}}
                </div>
            </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        <!--end project-grid-->
        </div>
        <!--end portfoliomain-->
    </div>
    <!--end container-->
</section>
@include('elements.footerwidget')
@include('elements.footer')
