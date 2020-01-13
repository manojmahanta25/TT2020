<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'home';
        $datables=1;
        $page_title = 'Talent Tantra 2020';
        $mtitle = 'Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';

        return view('auth.registrationfetch', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'datables'));
    }

    public function showAll(Request $request)
    {
        $view=Registration::all();
        $table =[];
        foreach ($view as $element){
            $row = [];
            $row[]=$element->id;
            $row[]=$element->team_name;
            $row[]=$element->team_leader;
            $row[]=$element->event_name;
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
