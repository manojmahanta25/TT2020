<nav class="menu">
    <!--main navigation-->
    <h1><img src="{{ URL::asset('images/svg/logo.svg') }}" alt="TalentTantra"/></h1>
    <!--place your logo image path here-->
    <ul id="mainmenu">
        <!--items in main menu-->
        <li><a href="{{route('tt.home')}}">Home</a></li>
        <li><a href="{{route('tt.event')}}">Competitions</a></li>
        <li><a href="{{route('tt.register')}}">Register</a></li>
        <li><a href="{{route('tt.pass')}}">Pass</a></li>
        <li><a href="{{route('tt.faq')}}">FAQ</a></li>
        <li><a href="{{route('tt.team')}}">Team</a></li>
        <li><a href="{{route('tt.rnr')}}">Rules and Regulations</a></li>
        <li><a href="{{route('tt.contact')}}">Contact</a></li>
        @if(isset($userlogin) && $userlogin==1 )
        <li><a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a></li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endif
    </ul>
</nav>
