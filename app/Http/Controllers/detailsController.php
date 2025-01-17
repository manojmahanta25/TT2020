<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Registration;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $userlogin = (Auth::check())? 1: 0;
        $page = 'home';
        $datables=1;
        $page_title = 'Talent Tantra 2020';
        $mtitle = 'Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';

        return view('auth.registrationfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'datables', 'userlogin'));
    }

    public function ticketview()
    {
        $userlogin = (Auth::check())? 1: 0;
        $page = 'home';
        $datables=1;
        $page_title = 'Talent Tantra 2020';
        $mtitle = 'Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';

        return view('auth.ticketfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'datables', 'userlogin'));
    }
    public function ticketAll(Request $request)
    {
        $ticketget=Ticket::all();
        $table =[];
        foreach ($ticketget as $element){
            $row = [];
            if($element->pass_type=='single') {
                $row[] = $element->custid;
                $row[] = $element->name;
                $row[] = $element->mobile;
                $row[] = $element->email;
                $row[] = $element->pass_type;
                $row[] = $element->numbers_pass;
                $row[] = $element->select_day;
                $row[] = $element->payable_total;
                $row[] = $element->razor_payid;
                $row[] = $element->razor_orderid;
                $row[] = $element->razorpay_signature;
                $row[] = $element->payment_status;
                $row[] = ($element->instatus != 0) ? 'Yes' : 'Not Yet';
                $row[] = ($element->indates != 0) ? $element->indates : 'Not Yet';
                $row[] = ($element->instatus == 0) ? '<button onclick="location.href=\'' . route('tt.ticketcheckin', $element->custid) . '\' " class="btn btn-primary">Check IN</button>' : 'Already Check In';
                $table[]=$row;
            }elseif ($element->pass_type=='combo'){
                $row[] = $element->custid;
                $row[] = $element->name;
                $row[] = $element->mobile;
                $row[] = $element->email;
                $row[] = $element->pass_type;
                $row[] = $element->numbers_pass;
                $row[] = $element->select_day;
                $row[] = $element->payable_total;
                $row[] = $element->razor_payid;
                $row[] = $element->razor_orderid;
                $row[] = $element->razorpay_signature;
                $row[] = $element->payment_status;
                if($element->instatus ==0)
                {
                    $row[] ='Not Yet';
                }elseif ($element->instatus ==1)
                {
                    $row[] ='1st time';
                } elseif($element->instatus ==2)
                {
                    $row[] ='2nd time';
                } elseif ($element->instatus ==3)
                {
                    $row[] ='yes';
                } else{
                    $row[] ='deny';
                }
                $row[] = ($element->indates != 0) ? $element->indates : 'Not Yet';
                $today = Carbon::today();

                if(($today==Carbon::create(2020,1,31,0,0,0)) && ($element->instatus == 0))
                {
                    $row[] = '<button onclick="location.href=\'' . route('tt.ticketcheckin', $element->custid) . '\' " class="btn btn-primary">Check IN</button>';

                }elseif ($today==Carbon::create(2020,2,1,0,0,0) && $element->instatus <=1)
                {
                    $row[] = '<button onclick="location.href=\'' . route('tt.ticketcheckin', $element->custid) . '\' " class="btn btn-primary">Check IN</button>';

                }elseif ($today==Carbon::create(2020,2,2,0,0,0)&& $element->instatus <=2)
                {
                    $row[] = '<button onclick="location.href=\'' . route('tt.ticketcheckin', $element->custid) . '\' " class="btn btn-primary">Check IN</button>';

                }else{
                    $row[] = 'Already In';
                }
                $table[]=$row;
            }

        }
        if($request -> ajax()) {
            return response()->json(['ticket' => $table, 'status' => 'success']);
        }
        return $ticketget;
    }
    public function showAll(Request $request)
    {
        $view=Registration::all();
        $table =[];
        foreach ($view as $element){
            $row = [];
            $row[]=$element->rid;
            $row[]=$element->team_name;
            $row[]=$element->team_leader;
            $row[]=$element->event_name;
            $row[]=$element->parent_name;
            $row[]=$element->total_member;
            $row[]=$element->email;
            $row[]=$element->phone;
            $row[]=$element->address;
            $row[]=$element->pincode;
            $row[]=$element->district;
            $row[]=$element->institute_name;
            $row[]=($element->accommodations !=0)? 'Yes': 'No';
            $row[]=$element->event_price;
            $row[]=$element->total_amount;
            $row[]=$element->amount_paid;
            $row[]=$element->payment_status;
            $table[]=$row;
        }
        if($request -> ajax()) {
            return response()->json(['registration' => $table, 'status' => 'success']);
        }
        return abort(404);
    }

    public function passCheckIn($id) {
        $element=Ticket::where('custid',$id)->firstOrFail();
        if($element->pass_type=='single') {
            Ticket::where('custid', $id)->update(['instatus' => '1', 'indates' => Carbon::now()->toDateTimeString()]);
        }elseif($element->pass_type=='combo')
        {
            $today = Carbon::today();
            if($today==Carbon::create(2020,1,31,0,0,0))
            {
                $instatus=1;
                $indates = Carbon::now()->toDateTimeString();
            }elseif ($today==Carbon::create(2020,2,1,0,0,0))
            {
                $instatus=2;
                $indates=($element->indates ==0 )? Carbon::now()->toDateTimeString(): $element->indates.' / '.Carbon::now()->toDateTimeString();

            }elseif ($today==Carbon::create(2020,2,2,0,0,0))
            {
                $instatus=3;
                $indates=($element->indates ==0 )? Carbon::now()->toDateTimeString(): $element->indates.' / '.Carbon::now()->toDateTimeString();

            }else{
                return abort(424);
            }
            Ticket::where('custid', $id)->update(['instatus' => $instatus, 'indates' => $indates]);
        }
        return redirect(route('tt.ticketview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
