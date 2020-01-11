<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Ticket;
use DB;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Redirect;

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

        $price= $this->getPrice($pass_type,$numbers_pass);
        if($price == null || $price < 300)
        {
            Redirect::back()->withErrors(['msg', 'Invalid Pass']);
        }
        $day=$this->getSDay($select_day);
            
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
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $rid = $this->getID();
        $pass_type = $request->input('pass_type');
        $numbers_pass = $request->input('numbers_pass');
        $select_day = $request->input('select_day');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        //return $numbers_pass;
        
        $price=$this->getPrice($pass_type, $numbers_pass);
        
        if($price == null || $price < 300)
        {
            Redirect::route('tt.ticket')->withErrors(['msg', 'Invalid Pass']);
        }

        $day=$this->getSDay($select_day);
            
        //$body='price is '.$price;
        /*Ticket::create(['custid'=>$rid,
            'name'=>$name,
            'mobile'=>$mobile,
            'email'=>$email,
            'pass_type'=>$pass_type,
            'numbers_pass'=>$numbers_pass,
            'select_day'=>$select_day,
            'payable_total'=>$price
        ]);*/
       
        $orderData = ['receipt'=> $rid,'amount'=>  $price*100,'currency'=> 'INR','payment_capture'=> 1];
        
        $razorpayOrder = $api->order->create($orderData);
        $razorpayOrderId = $razorpayOrder['id'];

        $_SESSION['razorpay_order_id'] = $razorpayOrderId;

        $displayAmount = $amount = $orderData['amount'];
        //return $razorpayOrderId;
        $displayCurrency= env('RAZORMONEY_SYM');
        if ($displayCurrency !== 'INR')
        {
            $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
            $exchange = json_decode(file_get_contents($url), true);

            $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
        }

        $data = [
            'key'               => env('RAZORPAY_KEY'),
            'amount'            => $price,
            'name'              => $name,
            'description'       => $numbers_pass.' '.$pass_type.' Pass for '.$day,
            'image'             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
            'prefill'           => [
            'name'              => $name,
            'email'             => $email,
            'contact'           => $mobile,
            ],
            "theme"             => [
            "color"             => "#F37254"
            ],
    "notes"             => [
    "address"           => "KUTT",
    "merchant_order_id" => $rid,
    ],
            "order_id"          => $razorpayOrderId,
        ];

        if ($displayCurrency !== 'INR')
        {
            $data['display_currency']  = $displayCurrency;
            $data['display_amount']    = $displayAmount;
        }

        $json = json_encode($data);
        
        return view('tckpay', compact('data','rid'));
     }
     /*public function upRID(Request $request){
            $rid= $request->seesion()->get('rid');
        $razorpay_payment_id = $request->input('razorpay_payment_id');
        return view('success', compact('razorpay_payment_id','rid'));
     }*/
      public function upRID(){
        
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $success = true;

        $error = "Payment Failed";

        if (empty($_POST['razorpay_payment_id']) === false)
        {

            try
            {
                // Please note that the razorpay order ID must
                // come from a trusted source (session here, but
                // could be database or something else)
                $attributes = array(
                    'razorpay_order_id' => $_SESSION['razorpay_order_id'],
                    'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                    'razorpay_signature' => $_POST['razorpay_signature']
                );

                $api->utility->verifyPaymentSignature($attributes);
            }
            catch(SignatureVerificationError $e)
            {
                $success = false;
                $error = 'Razorpay Error : ' . $e->getMessage();
            }
        }

        if ($success === true)
        {
            $html = "<p>Your payment was successful</p>
                     <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
        }
        else
        {
            $html = "<p>Your payment failed</p>
                     <p>{$error}</p>";
        }

        echo $html;
     }
     public function getPrice($pass_type, $numbers_pass){
        
        switch ($pass_type) {
            case 'single':
                return 300 * $numbers_pass;
                break;
            case 'combo':
                return 800 * $numbers_pass;
                break;
            default:
                Redirect::route('tt.ticket')->withErrors(['msg', 'Invalid Amount']);
        }
    }
    public function getSDay($select_day){
        switch ($select_day) {
           case 'first':
                return "31st January 2020";
                break;
            case 'second':
                return  "1st February 2020";
                break;
            case 'third':
                return  "2nd February 2020";
                break;
            case 'all':
                return  "31st January, 1st February and 2nd February 2020";
                break;
            default:
                 Redirect::route('tt.ticket')->withErrors(['msg', 'Invalid Day']);
            }
    }
}
