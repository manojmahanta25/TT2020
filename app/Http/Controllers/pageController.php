<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        $page = 'home';
        $page_title = 'Talent Tantra 2020';
        $mtitle = 'Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';

        return view('welcome', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function event(){
        $page='events';
        $page_title='All Events of Talent Tantra 2020';
        $mtitle='All Events of Talent Tantra 2020';
        $description= 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords= 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('event', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }
    public function eventFetch($id){
        $id = trim(htmlspecialchars(strip_tags($id)));
        $page='events';
        $page_title='All Events of Talent Tantra 2020';
        $mtitle='All Events of Talent Tantra 2020';
        $description= 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords= 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        switch ($id) {
            case 'burniton':
            case 'mokshmantra':
            case 'focusia':
            case 'rangmanch':
            case 'perespective':
            case 'bitbybit':
            case 'destroix':
            return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'id'));;
                break;
            default:
                abort(404);
        }
    }

    public function registration()
    {
        $page = 'registration';
        $page_title = 'All Events of Talent Tantra 2020';
        $mtitle = 'All Events of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('registration', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function sponsor()
    {
        $page = 'sponsor';
        $page_title = 'Sponsor of Talent Tantra 2020';
        $mtitle = 'Sponsor of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('sponsor', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }
}
