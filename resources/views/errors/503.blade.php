@php
    $page='503';
    $page_title='503 Error';
    $mtitle='Under Construction';
    $description= 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
    $keywords= 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
@endphp
@include('elements.header')

<section id="home" class="main fixed-bg inhome " style="overflow-x: hidden; overflow-y: hidden;">
    <div style="width: 100%;background-color:#ffff9c;text-align: center;">
        <img src="{{ URL::asset('images/svg/logo.svg') }}" style="width: 30%;">
    </div>
    <div style="width: 100%;background-color:#ffff9c;text-align: center;">
        <h2>Under Maintainance</h2>
    </div>
</section>
<!--end section home-->

@include('elements.footerwidget')
@include('elements.footer')


