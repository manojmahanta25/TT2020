@include('elements.header')
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            {{--<h2>Competition</h2>--}}
            <span>Registration</span>
        </div class="">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--end heading-->
        <div class="portfoliomain">
            <div class="col-sm-offset-2 col-sm-8" style="background: rgba(255,253,253,0.8);padding: 15px;">
            {!! Form::open(['route' => 'tt.registerdb']) !!}
            <div class="form-group row">
                {{Form::label('event_name','Competition',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::select('event_name',[
                        'mokshmantra'=>'Moksh Mantra',
                        'singphonic'=>'Sing Phonic',
                        'Destroix'=>['csgo'=> 'Counter Strike Global Offensive','ml'=>'Mobile Legend', 'cod'=>'Call Of Duty Mobile','pubg'=>'PUBG Mobile','nfsmw'=>'Need For Speed Most Wanted','fifa'=>'FIFA'],
                        'Burn It On'=>['biosolo'=>'Solo','biogroup'=>'Group','adaptune'=>'Adaptune'],
                         'Sports'=>['armwrestling'=>'Arm Wrestling', 'cricket'=>'Cricket', 'football'=>'Football','basketball'=>'Basketball','badminton'=>'Badminton','Lawn Tennis'=>['lawntennissingle'=>'Single','lawntennisdouble'=>'Mix or Double']],
                    ], null,
                    ['placeholder' => 'Pick a Competition...']
                    )}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('total_member','Total Members',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::selectRange('total_member',1,8, ['class'=>'form-control ', 'placeholder'=>'Enter Team Name'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('team_name','Team Name',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('team_name','', ['class'=>'form-control ', 'placeholder'=>'Enter Team Name'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('team_leader','Team Leader',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('team_leader','', ['class'=>'form-control ', 'placeholder'=>'Enter Leader Name'])}}
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
                    {{Form::tel('phone','', ['class'=>'form-control', 'placeholder'=>'Enter Phone','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('address','Address',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::textarea('address','', ['class'=>'form-control', 'placeholder'=>'Enter your address','required','rows'=>5, 'cols'=>10])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('pincode','Pin Code',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('pincode','', ['class'=>'form-control', 'placeholder'=>'Enter Pin Code','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('district','District',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('district','', ['class'=>'form-control', 'placeholder'=>'Enter district','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('institute_name','College/Institute Name',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::text('institute_name','', ['class'=>'form-control', 'placeholder'=>'Enter College/Institute Name','required'])}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('accommodations','Required Accomodations',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::radio('accommodations','1')}} {{Form::label('acco','yes')}}
                    {{Form::radio('accommodations','0',true)}} {{Form::label('acco','no')}}
                </div>
            </div>
                @csrf
        {{Form::submit('Submit', ['name'=>'sbtn','class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        <!--end project-grid-->
    </div>
        </div>
        <!--end portfoliomain-->
    </div>
    <!--end container-->
</section>
@include('elements.footerwidget')
@include('elements.footer')
