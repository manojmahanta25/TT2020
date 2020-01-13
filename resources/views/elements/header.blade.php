<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TalentTantra 2020">
    <meta name="author" content="Neel Kamal">
    @if(isset($page_title))
        <title>{{$page_title}}</title>
    @else
        <title>Talent Tantra</title>
    @endif

    <base href="/TT20/">

    <!--<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">-->
    <meta name="description" content="{{$description}} "/>
    <meta name="keywords" content="{{$keywords}}"/>
    <meta name="author" content="Kaziranga University Website Team"/>
    <meta name="copyright" content="Kaziranga University"/>
    <meta name="title" content="{{$mtitle}}">
    <meta property="og:title" content="{{$mtitle}}"/>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" />
    <!--place your favicon path 18pxX18px here-->

    <!-- Including CSS -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animation.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/fonticons.css') }}" rel="stylesheet">
    <!-- Fontawsome -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>

@if(isset($datables) && $datables == 1)
    <link href="{{ URL::asset('css/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css">
 @endif
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}"></script>
    <![endif]
    -->

    <link rel="stylesheet" href="{{ URL::asset('css/snap-scroll.css') }}" type="text/css">
    <script type="text/javascript">

 $(document).ready(function() {
  var counter = 0;

  // Start the changing images
  setInterval(function() {
    if(counter == 4) {
      counter = 0;
    }

    changeImage(counter);
    counter++;
  }, 3000);

  // Set the percentage off
  loading();
});

function changeImage(counter) {
  var images = [
    '<img src="{{ URL::asset("/images/loader/1.webp")}}" style="width: 100%;">',
    '<img src="{{ URL::asset("/images/loader/2.webp")}}" style="width: 100%;">',
    '<img src="{{ URL::asset("/images/loader/3.webp")}}" style="width: 100%;">',
    '<img src="{{ URL::asset("/images/loader/4.webp")}}" style="width: 100%;">',
    '<img src="{{ URL::asset("/images/loader/5.webp")}}" style="width: 100%;">'
  ];

  $(".loader .image").html(""+ images[counter] +"");
}

function loading(){
  var num = 0;

  for(i=0; i<=100; i++) {
    setTimeout(function() {
      $('.loader span').html(num+'%');

      if(num == 100) {
        loading();
      }
      num++;
    },i*120);
  };

}
    </script>
</head>

<body>
<div class="loader">
  <div class="image">
    <img src="{{ URL::asset('images/loader/5.webp') }}" style="width: 100%;">
  </div>
  <span></span>
</div>
<div id="global" class="global hide" >
    @include('elements.menu')
    @if($page == 'home')
        <div class="wrapping">
        <div class="bodycontainer">
    @endif

    <div class="pusher">
        <!-- HEADER -->
        <header>
            <a id="menutrigger" data-effect="effect">
                <span>Menu</span>
            </a>
        </header>
