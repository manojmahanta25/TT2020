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

    public function competitions()
    {
        $page = 'competitions';
        $page_title = 'All Competitions of Talent Tantra 2020';
        $mtitle = 'All Competitions of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('competitions', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function compet()
    {
        $page = 'newcompetition';
        $page_title = 'All Competitions of Talent Tantra 2020';
        $mtitle = 'All Competitions of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('newcompetition', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function eventFetch($id)
    {
        $id = trim(htmlspecialchars(strip_tags($id)));
        $page = 'competitions';
        $page_title = 'All Competitions of Talent Tantra 2020';
        $mtitle = 'All Competitions of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        switch ($id) {
            case 'destroix':
                $page = 'destroix';
                $value = 'destroix';
                $page_title = 'Destroix';
                $mtitle = 'Destroix';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'falsetto':
                $page = 'falsetto';
                $value = 'falsetto';
                $page_title = 'Falsetto';
                $mtitle = 'Falsetto';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'singphonic':
                $page = 'singphonic';
                $value = 'singphonic';
                $page_title = 'Singphonic';
                $mtitle = 'Singphonic';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'mokshmantra':
                $page = 'mokshmantra';
                $value = 'mokshmantra';
                $page_title = 'Moksh Mantra';
                $mtitle = 'Moksh Mantra';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'rapbattle':
                $page = 'rapbattle';
                $value = 'rapbattle';
                $page_title = 'Rap Battle';
                $mtitle = 'Rap Battle';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'beatboxing':
                $page = 'beatboxing';
                $value = 'beatboxing';
                $page_title = 'Beat Boxing';
                $mtitle = 'Beat Boxing';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'postermaking':
                $page = 'postermaking';
                $value = 'postermaking';
                $page_title = 'Poster Making';
                $mtitle = 'Poster Making';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'collagemaking':
                $page = 'collagemaking';
                $value = 'collagemaking';
                $page_title = 'Collage Making';
                $mtitle = 'Collage Making';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'livesketch':
                $page = 'livesketch';
                $value = 'livesketch';
                $page_title = 'Live Sketch';
                $mtitle = 'Live Sketch';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'quiz':
                $page = 'quiz';
                $value = 'quiz';
                $page_title = 'Quiz';
                $mtitle = 'Quiz';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'onlinephotocompetition':
                $page = 'onlinephotocompetition';
                $value = 'onlinephotocompetition';
                $page_title = 'Online Photo Competition';
                $mtitle = 'Online Photo Competition';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'onspotcampus':
                $page = 'onspotcampus';
                $value = 'onspotcampus';
                $page_title = 'On Spot Campus';
                $mtitle = 'On Spot Campus';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'selfiecompetition':
                $page = 'selfiecompetition';
                $value = 'selfiecompetition';
                $page_title = 'Selfie Competition';
                $mtitle = 'selfie Competition';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'streettales':
                $page = 'streettales';
                $value = 'streettales';
                $page_title = 'Street Tales';
                $mtitle = 'Street Tales';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'kickstart':
                $page = 'kickstart';
                $value = 'kickstart';
                $page_title = 'Kick Start';
                $mtitle = 'Kick Start';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'priceisright':
                $page = 'priceisright';
                $value = 'priceisright';
                $page_title = 'Price is Right- Bidding War';
                $mtitle = 'Price is Right- Bidding War';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'burniton':
                $page = 'burniton';
                $page_title = 'Burn It On';
                $mtitle = 'Burn It On';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'crewvscrew':
                $page = 'crewvscrew';
                $value = 'crewvscrew';
                $page_title = 'Crew vs. crew';
                $mtitle = 'Crew vs. Crew';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'winterrunway':
                $page = 'winterrunway';
                $value = 'winterrunway';
                $page_title = 'Winter Runway';
                $mtitle = 'Winter Runway';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'firelesscooking':
                $page = 'firelesscooking';
                $value = 'firelesscooking';
                $page_title = 'Fireless Cooking';
                $mtitle = 'Fireless Cooking';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'wastetowealth':
                $page = 'wastetowealth';
                $value = 'wastetowealth';
                $page_title = 'Waste To Wealth';
                $mtitle = 'Waste To Wealth';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'aero':
                $page = 'aero';
                $value = 'aero';
                $page_title = 'Aero - modeling';
                $mtitle = 'Aero - modeling';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'exemplar':
                $page = 'exemplar';
                $value = 'exemplar';
                $page_title = 'Exemplar (Science Model Display)';
                $mtitle = 'Exemplar (Science Model Display)';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'crossfit':
                $page = 'crossfit';
                $value = 'crossfit';
                $page_title = 'Crossfit';
                $mtitle = 'Crossfit';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
            
            case 'lawntennis':
                $page = 'lawntennis';
                $value = 'lawntennis';
                $page_title = 'Lawn Tennis';
                $mtitle = 'Lawn Tennis';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
            
            case 'cricket':
                $page = 'cricket';
                $value = 'cricket';
                $page_title = 'Cricket';
                $mtitle = 'Cricket';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
            
            case 'basketball':
                $page = 'basketball';
                $value = 'basketball';
                $page_title = 'Basketball';
                $mtitle = 'Basketball';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
            
            case 'badminton':
                $page = 'badminton';
                $value = 'badminton';
                $page_title = 'Badminton';
                $mtitle = 'Badminton';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
            
            case 'football':
                $page = 'football';
                $value = 'football';
                $page_title = 'Football';
                $mtitle = 'Football';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
            
            case 'rangmanch':
                $page = 'rangmanch';
                $value = 'rangmanch';
                $page_title = 'Rangmanch';
                $mtitle = 'Rangmanch';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                        
            case 'openmic':
                $page = 'openmic';
                $value = 'openmic';
                $page_title = 'Open Mic';
                $mtitle = 'Open Mic';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                        
            case 'justaminute':
                $page = 'justaminute';
                $value = 'justaminute';
                $page_title = 'Just a Minute';
                $mtitle = 'Just a Minute';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                        
            case 'crimesceneinvestigation':
                $page = 'crimesceneinvestigation';
                $value = 'crimesceneinvestigation';
                $page_title = 'Crime Scene Investigation';
                $mtitle = 'Crime Scene Investigation';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                        
            case 'facepainting':
                $page = 'facepainting';
                $value = 'facepainting';
                $page_title = 'Face Painting';
                $mtitle = 'Face Painting';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                        
            case 'uno':
                $page = 'uno';
                $value = 'uno';
                $page_title = 'Uno';
                $mtitle = 'Uno';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                        
            case 'treasurehunt':
                $page = 'treasurehunt';
                $value = 'treasurehunt';
                $page_title = 'Treasure Hunt';
                $mtitle = 'Treasure Hunt';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                                    
            case 'loveletterwriting':
                $page = 'loveletterwriting';
                $value = 'loveletterwriting';
                $page_title = 'Love Letter Writing';
                $mtitle = 'Love Letter Writing';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break; 

            case 'jenga':
                $page = 'jenga';
                $value = 'jenga';
                $page_title = 'Jenga';
                $mtitle = 'Jenga';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'bitbybit':
                $page = 'bitbybit';
                $value = 'bitbybit';
                $page_title = 'Bit by Bit';
                $mtitle = 'Bit by Bit';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'techtalks':
                $page = 'techtalks';
                $value = 'techtalks';
                $page_title = 'Tech Talks';
                $mtitle = 'Tech Talks';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'zumbaworkshop':
                $page = 'zumbaworkshop';
                $value = 'zumbaworkshop';
                $page_title = 'Zumba Workshop';
                $mtitle = 'Zumba Workshop';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'fashionworkshop':
                $page = 'fashionworkshop';
                $value = 'fashionworkshop';
                $page_title = 'Fashion Workshop';
                $mtitle = 'Fashion Workshop';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'cookingworkshop':
                $page = 'cookingworkshop';
                $value = 'cookingworkshop';
                $page_title = 'Cooking Workshop';
                $mtitle = 'Cooking Workshop';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'treasurehunt':
                $page = 'treasurehunt';
                $value = 'treasurehunt';
                $page_title = 'Treasure Hunt';
                $mtitle = 'Treasure Hunt';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;

            case 'photographyworkshop':
                $page = 'photographyworkshop';
                $value = 'photographyworkshop';
                $page_title = 'Photography Workshop';
                $mtitle = 'Photography Workshop';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
            
            case 'theatrenflimmakingworkshop':
                $page = 'theatrenflimmakingworkshop';
                $value = 'theatrenflimmakingworkshop';
                $page_title = 'Theatren Flim Making Workshop';
                $mtitle = 'Theatren Flim Making Workshop';
                $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
                $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
                return view('eventfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'value'));
                break;
                
            default:
                abort(404);
        }
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
      public function pronites()
    {
        $page = 'pronites';
        $page_title = 'Pronites of Talent Tantra 2020';
        $mtitle = 'Pronites of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('pronites', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function faq()
    {
        $page = 'faq';
        $page_title = 'Frequently Asked Questions of Talent Tantra 2020';
        $mtitle = 'Frequently Asked Questions of Talent Tantra 2020';
        $description = 'Frequently Asked Questions, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Frequently Asked Questions, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('faq', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function comingsoon()
    {
        $page = 'comingsoon';
        $page_title = 'Comingsoon Talent Tantra 2020';
        $mtitle = 'Comingsoon Talent Tantra 2020';
        $description = 'Comingsoon, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Comingsoon, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('comingsoon', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function accommodation()
    {
        $page = 'accommodation';
        $page_title = 'Accommodation Talent Tantra 2020';
        $mtitle = 'Accommodation Talent Tantra 2020';
        $description = 'Accommodation, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Accommodation, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('accommodation', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function tou()
    {
        $page = 'tou';
        $page_title = 'Terms of Use';
        $mtitle = 'Terms of Use';
        $description = 'Terms of Use, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Terms of Use, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('tou', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function contact()
    {
        $page = 'contact';
        $page_title = 'Contact Us';
        $mtitle = 'Contact Us';
        $description = 'Contact Us, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Contact Us, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('contact', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function privacypolicy()
    {
        $page = 'privacypolicy';
        $page_title = 'Privacy Policy of Talent Tantra 2020';
        $mtitle = 'Privacy Policy of Talent Tantra 2020';
        $description = 'Privacy Policy, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Privacy Policy, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('privacypolicy', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    public function pass()
    {
        $page = 'pass';
        $page_title = 'Get Pass of Talent Tantra 2020';
        $mtitle = 'Get Pass of Talent Tantra 2020';
        $description = 'Get Pass, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Get Pass, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('pass', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
        //$open='yes';
        //return redirect(route('tt.thankyou',compact('open')));
    }

     public function thankYou()
    {
        /*
        $page = 'thankyou';
        $page_title = 'Thank You for Registartion';
        $mtitle = 'Get Pass of Talent Tantra 2020';
        $description = 'Get Pass, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Get Pass, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        if(isset($_GET['open']) && $_GET['open']=='yes'){
           return view('thankyou', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
         }
        else{
            return redirect(route('tt.home'));
          }
        */
    }

    public function rnr()
    {
        $page = 'rnr';
        $page_title = 'Rules and Regulation of Talent Tantra 2020';
        $mtitle = 'Rules and Regulation of Talent Tantra 2020';
        $description = 'Rules and Regulation, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Rules and Regulation, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('rnr', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

}
