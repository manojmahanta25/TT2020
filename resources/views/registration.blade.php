@include('elements.header')
@php
if(isset($compvalue)){
$sel=$compvalue;
}
else{
$sel = null;
}
@endphp
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
            {!! Form::open(['route' => 'tt.registerdb', 'id' =>'myForm']) !!}
            <div class="form-group row">
                {{Form::label('event_name','Competition',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-6">
                    {{Form::select('event_name',$subevent, $sel,
                    ['placeholder' => 'Pick a Competition...']
                    )}}
                </div>
            </div>
            <div class="form-group row">
                {{Form::label('total_member','Total Members',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-2">
                    <select id="total_member" name="total_member" class="form-control">
                        <option value="">Select Members</option>
                    </select>
                </div>
                {{Form::label('price','Price',['class'=>'col-sm-1 control-label'])}}
                <div class="col-sm-2">
                    {{Form::text('price','', ['class'=>'form-control ', 'readonly'])}}
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
                <div class="col-sm-3">
                    <label><input type="radio" id="radio1" value="1" name="accommodations" >Yes</label>
                    <label><input type="radio" id="radio2" value="0" name="accommodations" checked>No</label>
                </div>
                <div id="hidden">
                {{Form::label('aprice','Accommodations Price',['class'=>'col-sm-2 control-label'])}}
                <div class="col-sm-2">
                    {{Form::text('aprice','', ['class'=>'form-control ', 'readonly'])}}
                </div>
                </div>

            </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <span class="help-block"><small>Total Payable amount is equal to Event registration fee plus accommodation fee <mark style="color: blue">Rs. 200/member </mark>&nbsp; in which <mark style="color: red">Rs 100</mark>&nbsp; is security per member which is refundable.</small></span>
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
<script type="text/javascript">
    $(document).ready(function() {
        $("#hidden").hide();
        @if(isset($compvalue))
            @else
        $("#event_name").val('');
        $("#total_member").val('');
        $('#aprice').val('');
        $('#price').val('');
        @endif

        $("#event_name").change(function () {
            var urla = '{{ url('/getevtprc/') }}/';
            var furl =urla.concat(this.value);
            $.ajax({
                url: furl,
                method: 'GET',
                dataType: 'json',
                success:function (data) {
                    $('#total_member').html(data.data);
                     updatePrice();
                     updateAcco();
                }

            });
        });
        $("#total_member").change(function () {
            // alert(this.value);
            updatePrice();
            updateAcco();

        });
        $('input[name="accommodations"]').click(function () {
             updateAcco();
        });
        function updateAcco(){
            var radio = $('input[name="accommodations"]:checked').val();
            if(radio == 1){
                var str1 = $("#total_member").val();
                var integer = parseInt(str1, 10);
                var acco = integer*200;
                $('#aprice').val(acco);
                $("#hidden").show();
            }
            else {
                $("#hidden").hide();
            }
        }
        function updatePrice() {
            var str1 = $("#total_member").val();
            var str2 = $("#event_name").val();
            var urla= '{{ url('/getevtprcl/') }}/';
            var furl = urla.concat(str2, '/',str1);
            $.ajax({
                url: furl,
                method: 'GET',
                dataType: 'json',
                success:function (data) {
                    $('#price').val(data.data);
                }

            });

        }
        @if(isset($compvalue))
        function updateinfo() {
            $.ajax({
                url: '{{ url('/getevtprc/').'/'.$compvalue }}',
                method: 'GET',
                dataType: 'json',
                success:function (data) {
                    $('#total_member').html(data.data);
                    updatePrice();
                    updateAcco();
                }

            });

        }
        updateinfo();
        @endif
    });
</script>
@include('elements.footer')
