<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Ticket;
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
        $pass_type = $request->input('pass_type');
        $numbers_pass = $request->input('numbers_pass');
        $select_day = $request->input('select_day');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $request->flush();

        return $this->tckPreview($pass_type,$numbers_pass,$select_day,$name,$gender,$email,$mobile);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ptype)
    {
        switch ($ptype) {
            case 'single':
            case 'combo':
                break;
            default:
                return redirect(route('tt.ticket'));

        }
        $page = 'ticket';
        $page_title = 'Buy Talent Tantra Tickets Online';
        $mtitle = 'Buy Talent Tantra Tickets Online';
        $description = 'Online tickets, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'online ticket, pass, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('ticket', compact('page', 'page_title', 'mtitle', 'description', 'keywords','ptype'));
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

    public function tckPreview($pass_type,$numbers_pass,$select_day,$name,$gender,$email,$mobile)
    {
        //$numbers_pass =$numbers_pass;
        //echo $numbers_pass.'<br/>';

        $price=null;
        switch ($pass_type) {
            case 'single':
                $price=300 * $numbers_pass;
                break;
            case 'combo':
                $price=800 * $numbers_pass;

                break;
            default:
                Redirect::back()->withErrors(['msg', 'Invalid Pass']);

        }
        if($price == null || $price < 300)
        {
            Redirect::back()->withErrors(['msg', 'Invalid Pass']);
        }
        $day="";
            switch ($select_day) {
            case 'first':
                 $day="31st January 2020";
                break;
            case 'second':
                $day="1st February 2020";
                break;
            case 'third':
                $day="2nd February 2020";
                break;
            case 'all':
                $day="31st January, 1st February and 2nd February 2020";
                break;
            default:
                Redirect::back()->withErrors(['msg', 'Invalid Pass']);
            }
        //echo $price;
        //echo $rid;
        /*Ticket::create(['custid'=>$rid,
            'name'=>$name,
            'mobile'=>$mobile,
            'email'=>$email,
            'pass_type'=>$pass_type,
            'numbers_pass'=>$numbers_pass,
            'select_day'=>$select_day,
            'payable_total'=>$price
        ]);*/

        $page = 'tck';
        $page_title = 'Preview of Talent Tantra Tickets Online';
        $mtitle = 'Preview of Talent Tantra Tickets Online';
        $description = 'Preview Online tickets, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'online ticket, pass, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';


        //$body='price is '.$price;

        $body="<div class='form-group'>
                    <div class='col-md-12'>
                        <b>Pass Type : $pass_type day pass</b>
                        <input Type='hidden' name='pass_type' value='$pass_type'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-12'>
                        <b>Quantity : $numbers_pass</b>
                        <input Type='hidden' name='numbers_pass' value='$numbers_pass'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-12'>
                        <b>Selected Day : $day</b>
                        <input Type='hidden' name='select_day' value='$select_day'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-12'>
                        <b>Name : $name</b>
                        <input Type='hidden' name='name' value='$name'/>
                    </div>
                </div>                
                <div class='form-group'>
                    <div class='col-md-12'>
                        <b>Gender : $gender</b>
                        <input Type='hidden' name='gender' value='$gender'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-12'>
                        <b>Email : $email</b>
                        <input Type='hidden' name='email' value='$email'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-12'>
                        <b>Mobile : $mobile</b>
                        <input Type='hidden' name='mobile' value='$mobile'/>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-md-12'>
                        <b>Total Amount : $price</b>
                    </div>
                </div>
                ";


        return view('tck', compact('page', 'page_title', 'mtitle', 'description', 'keywords','body'));
    }

    public function payForm(Request $request){
        $rid = $this->getID();
        $pass_type = $request->input('pass_type');
        $numbers_pass = $request->input('numbers_pass');
        $select_day = $request->input('select_day');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $price=null;
        switch ($pass_type) {
            case 'single':
                $price=300 * $numbers_pass;
                break;
            case 'combo':
                $price=800 * $numbers_pass;
                break;
            default:
                Redirect::route('tt.ticket')->withErrors(['msg', 'Invalid Pass']);
        }
        if($price == null || $price < 300)
        {
            Redirect::route('tt.ticket')->withErrors(['msg', 'Invalid Pass']);
        }

        $page = 'tck';
        $page_title = 'Preview of Talent Tantra Tickets Online';
        $mtitle = 'Preview of Talent Tantra Tickets Online';
        $description = 'Preview Online tickets, Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'online ticket, pass, Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';

        $day="";
            switch ($select_day) {
           case 'first':
                 $day="31st January 2020";
                break;
            case 'second':
                $day="1st February 2020";
                break;
            case 'third':
                $day="2nd February 2020";
                break;
            case 'all':
                $day="31st January, 1st February and 2nd February 2020";
                break;
            default:
                Redirect::back()->withErrors(['msg', 'Invalid Pass']);
            }
        //$body='price is '.$price;
        Ticket::create(['custid'=>$rid,
            'name'=>$name,
            'mobile'=>$mobile,
            'email'=>$email,
            'pass_type'=>$pass_type,
            'numbers_pass'=>$numbers_pass,
            'select_day'=>$select_day,
            'payable_total'=>$price
        ]);

        $body="<div class='form-group'>
                    <div class='col-md-12'>
                        <input Type='hidden' name='rid' value='$rid' id='rid'/>

                        <input Type='hidden' name='pass_type' value='$pass_type' id='pass_type'/>
                    
                        <input Type='hidden' name='numbers_pass' value='$numbers_pass' id='numbers_pass'/>
                    
                        <input Type='hidden' name='select_day' value='$select_day' id='select_day'/>
                        <input Type='hidden' name='day' value='$day' id='day'/>
                        <input Type='hidden' name='name' value='$name' id='name'/>
                   
                        <input Type='hidden' name='mobile' value='$mobile' id='mobile'/>
                        <input Type='hidden' name='email' value='$email' id='email'/>
                        <input Type='hidden' name='price' value='$price' id='price'/>
                    </div>
                </div>
                ";
           return view('tckpay', compact('page', 'page_title', 'mtitle', 'description', 'keywords','pass_type','day','price','numbers_pass','rid'));
     }
     /*public function upRID(Request $request){

        return view('success', compact($request));
     }*/
      public function upRID(Request $request){
        
        return view('success', compact('razorpay_payment_id'));
     }
}
