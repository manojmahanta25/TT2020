<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ticket;
use DB;

class ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'ticket';
        $page_title = 'Buy Talent Tantra Tickets Online';
        $mtitle = 'Buy Talent Tantra Tickets Online';
        $description = 'Online tickets, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'online ticket, pass, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('ticket', compact('page', 'page_title', 'mtitle', 'description', 'keywords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect(route('tt.ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages =['pass_type.required'=>'Select a Pass',
        'numbers_pass.required'=>'Select numbers of pass',
        'select_day.required'=>'Select a date',
        'name.required'=>'Enter your name',
        'gender.required'=>'Select gender',
        'email.required'=>'Email is required and make your the email id is valid',
        'email.email'=>'Enter valid email id',
        'mobile.required'=>'Enter your mobile number and make sure mobile number is valid',
        'mobile.regex'=>'Enter valid mobile number'];
        $this->validate($request,[
            'pass_type' => 'required',
            'numbers_pass' => 'required',
            'select_day' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^\d{10}$/'
        ],$messages);
        $rid = $this->getID();
        $pass_type = $request->input('pass_type');
        $numbers_pass = $request->input('numbers_pass');
        $select_day = $request->input('select_day');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $mobile = $request->input('mobile');

        return $this->tckPreview($rid, $pass_type,$numbers_pass,$select_day,$name,$gender,$email,$mobile);
    }

    public function tckPreview($rid, $pass_type,$numbers_pass,$select_day,$name,$gender,$email,$mobile)
    {
        //$numbers_pass =$numbers_pass;
        //echo $numbers_pass.'<br/>';
        $price="";
        switch ($pass_type) {
            case 'single':
                $price=300 * $numbers_pass;
                break;
            case 'combo':
                $price=800 * $numbers_pass;
                break;
            default:
                Redirect::back()->withErrors(['msg', 'Invalid Pass']);
                break;
        }
        //echo $price;
        //echo $rid;
        $page = 'tck';
        $page_title = 'Preview of Talent Tantra Tickets Online';
        $mtitle = 'Preview of Talent Tantra Tickets Online';
        $description = 'Preview Online tickets, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'online ticket, pass, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        

        $body='price is '.$price;

        $body="<div class='form-group'>
                    <div class='col-md-12'>
                        <b>Pass Type : $pass_type</b>
                    </div>
                </div>";


        return view('tck', compact('page', 'page_title', 'mtitle', 'description', 'keywords','body'));
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

    public function getID()
    {
        A: $string = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); 
        $id= strtoupper($string);                 
        if (DB::table('tickets')->where('custid', '=', $id)->exists()) {
            goto A;
        }
        return $id;
    }

}
