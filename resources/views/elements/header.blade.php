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

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}"></script>
    <![endif]
    -->

    <link rel="stylesheet" href="{{ URL::asset('css/snap-scroll.css') }}" type="text/css">
</head>

<body>
<div id="global" class="global">
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
