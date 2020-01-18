@php
session(['rid' => $rid]);
@endphp
@include('elements.header')
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            {{--<h2>Competition</h2>--}}
            <span>Accommodation</span>
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
                {!! Form::open(['route' => 'tt.accodb', 'id' =>'myForm']) !!}
                @for($i=1; $i<=$total_member; $i++)
                <div class="form-group row">
                    {{Form::label('member-'.$i,'Member '.$i,['class'=>'col-sm-2 control-label'])}}
                    <div class="col-sm-4">
                        {{Form::text('member-'.$i,'', ['class'=>'form-control', 'placeholder'=>'member','required'])}}
                    </div>
                    <div class="col-sm-2">
                        {{Form::select('gender-'.$i,['M'=>'Male', 'F'=>'Female'], null,
                    ['placeholder' => 'Gender','class'=>'form-control','required']
                    )}}
                    </div>
                    <div class="col-sm-3">
                        {{Form::text('phone-'.$i,'', ['class'=>'form-control ', 'placeholder'=>'phone number','required'])}}
                    </div>
                </div>
                @endfor
                <div class="form-group row">
                    <div class="col-sm-12">
                        <span class="help-block"><small>Total Payable amount is equal to Event registration fee plus accommodation fee <mark style="color: blue">Rs. 200/member </mark>&nbsp; in which <mark style="color: red">Rs 100</mark>&nbsp; is security per member which is refundable.</small></span>
                    </div>
                </div>
            @csrf
            {{Form::hidden('rid',$rid)}}
            {{Form::hidden('totalmember',$total_member)}}
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
