@include('elements.header')
<section id="portfolio" class="portfolio">

    <div class="container">
        <div class="heading" style="padding-top:50px;">
            <span>Ticket Form</span>
        </div>
        @php
        if(isset($ptype))
        {
            $ptype=htmlspecialchars($ptype);
        }
        else {
            $ptype = 'none';
         }
         @endphp
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="portfoliomain">
            <div class="col-md-offset-2 col-md-6" style="background: rgba(255,253,253,0.8);padding: 15px;">
                {!! Form::open(['route' => 'tt.buyticketsdb']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        {{Form::label('pass_type','Pass Type',['class'=>'control-label'])}}
                    </div>
                    <div class="col-md-12">
                    {!! Form::select('pass_type', array('single' => 'One Day Pass', 'combo' => 'Combo Pass'), $ptype); !!}
                </div>
                </div>

            <div class="form-group">
                    <div class="col-md-12">
                    {{Form::label('numbers_pass','Number of Passes')}}
                    </div>
                    <div class="col-md-12">
                    {!! Form::select('numbers_pass', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), null, ['placeholder' => 'Quantity...']); !!}
                </div>
            </div>
            <div id="select_dayDiv" class="form-group">
                    <div class="col-md-12">
                    {{Form::label('select_day','Select Date')}}
                    </div>
                    <div class="col-md-12">
                    {!! Form::select('select_day', array('first' => '31st January 2020', 'second' => '1st February 2020','third' => '2nd February 2020'), null, ['placeholder' => 'Pick a Date...']); !!}
                </div>
            </div>
            <div class="form-group">
                    <div class="col-md-12">
                    {{Form::label('name','Enter Your Name')}}
                    </div>
                    <div class="col-md-12">
                    {{Form::text('name','',['class' => 'form-control','placeholder' => 'Full Name'])}}
                </div>
            </div>
            <div class="form-group">
                    <div class="col-md-12">
                    {{Form::label('gender','Gender')}}
                    </div>
                    <div class="col-md-12">
                    {!! Form::radio('gender', 'Male'); !!} Male
                    {!! Form::radio('gender', 'Female'); !!} Female
                </div>
            </div>
            <div class="form-group">
                    <div class="col-md-12">
                    {{Form::label('email','Email')}}
                    </div>
                    <div class="col-md-12">
                    {{Form::email('email','',['class' => 'form-control','placeholder' => 'Enter valid Email id'])}}
                </div>
            </div>
            <div class="form-group">
                    <div class="col-md-12">
                    {{Form::label('mobile','Mobile')}}
                    </div>
                    <div class="col-md-12">
                    {{Form::text('mobile','',['class' => 'form-control','placeholder' => 'Enter valid mobile number'])}}
                </div>
            </div>
                {{Form::submit('Submit',['class' => 'btn btn-primary'])}} {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@include('elements.footerwidget')
@include('elements.footer')

<script>
    @if($ptype=="combo")
            // and now set the option we want selected
        $("#select_day option[value=all]").attr('selected', 'selected'); 
        $("#select_day").append('<option value="all">All Days</option>');
        $("#select_day option[value='first']").remove();
        $("#select_day option[value='second']").remove();
        $("#select_day option[value='third']").remove();

    @endif
    $("#pass_type").change(function() {
        if ($(this).val() == "single") {
            $('#select_day').attr('required', '');
            $("#select_day").append('<option value="first">31st January 2020</option>');
            $("#select_day").append('<option value="second">1st February 2020</option>');
            $("#select_day").append('<option value="third">2nd February 2020</option>');
            $("#select_day option[value='all']").remove();
            $("#select_day").removeAttr("disabled");
        } else {
            // and now set the option we want selected 
        $("#select_day").append('<option value="all">All Days</option>');
        $("#select_day option[value=all]").attr('selected', 'selected');
        $("#select_day option[value='first']").remove();
        $("#select_day option[value='second']").remove();
        $("#select_day option[value='third']").remove();

        }
    });
</script>
