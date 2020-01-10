@include('elements.header')

<section id="portfolio" class="portfolio">

    <div class="container">
    	<div class="heading" style="padding-top:50px;">
            <span>Ticket Form - Previews</span>
        </div>
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
                 {!! $body !!}               
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}} 
            {!! Form::close() !!}
            </div>
    </div>
</section>


@include('elements.footerwidget')
@include('elements.footer')
