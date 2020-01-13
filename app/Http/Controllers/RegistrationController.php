<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\RegistrationValidate;
use App\Registration;
use Illuminate\Http\Request;
use DB;
use Mail;

class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subevent = $this->eventFetch();
        $page = 'registration';
        $page_title = 'All Events of Talent Tantra 2020';
        $mtitle = 'All Events of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('registration', compact('page', 'page_title', 'mtitle', 'description', 'keywords','subevent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect(route('tt.register'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationValidate $request)
    {
        if(!isset($request->sbtn)){
            abort(403);
        }
        $value = Event::select('members','cost','parent_event')->where('event_code', $request->event_name)->firstOrFail();
        $total = $value->cost;
        if($request->accommodations == 1)
        {
            $total = $total + 200*$value->members;
        }
        else{
            $total = $total;
        }
        $rid=$this->getRID();
        $body =[
            'rid'=> $rid,
           'team_name' => $request->team_name,
            'team_leader' => $request->team_leader,
            'event_name' => $request->event_name,
            'parent_name' => $value->parent_event,
            'total_member' => $value->members,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'district' => $request->district,
            'institute_name' => $request->institute_name,
            'accommodations' => $request->accommodations,
            'event_price' => $value->cost,
            'total_amount' => $total
        ];
        Registration::create($body);
        $request->flush();

        return redirect(route('tt.registermail'))->with(['rid' => $rid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = trim(htmlspecialchars(strip_tags($id)));
        $value = Event::where('event_code', $id)->firstOrFail();
        $compvalue = $value->event_code;
        $subevent = $this->eventFetch();
        $page = 'registration';
        $page_title = 'All Events of Talent Tantra 2020';
        $mtitle = 'All Events of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('registration', compact('page', 'page_title', 'mtitle', 'description', 'keywords','subevent','compvalue'));
    }

    public function showPrice($id='ml',Request $request)
    {
        $id = trim(htmlspecialchars(strip_tags($id)));
        $value = Event::select('members','cost')->where('event_code', $id)->firstOrFail();
        if($request -> ajax()) {
            return response()->json(['data' => $value, 'status' => 'success']);
        }
        return abort(404);
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
    public function eventFetch() {
        $comp=  Event::all()->toArray();
        $subevent = [];
        foreach ($comp as $elements){
            $subevent[$elements['parent_event']][$elements['event_code']] = $elements['event_name'];
        }
        return $subevent;
    }
    public function getRID()
    {
        A: $string = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8);
        $id= strtoupper('RT'.$string);
        if (Registration::where('rid',$id)->exists()) {
            goto A;
        }
        else
        {
            return $id;
        }
    }

    public function html_email() {
        try
        {
            $rid = session()->get('rid');
            session()->forget('rid');
        }
        catch (Exception $e)
        {
            return redirect(route('tt.register'));
        }

        //$rid='BAARKJ5G';

        if($rid!= NULL || $rid!="")
        {
            $data = DB::table('registrations')->where('rid', $rid)->get();
        foreach ($data as $key) {
            $rid = $key->rid;
            $team_name = $key->team_name;
            $team_leader = $key->team_leader;
            $event_name = $key->event_name;
            $total_member = $key->total_member;
            $email = $key->email;
            $phone = $key->phone;
            $address = $key->address;
            $pincode = $key->pincode;
            $district = $key->district;
            $institute_name = $key->institute_name;
            $accommodations = $key->accommodations;
            $event_price = $key->event_price;
            $total_amount = $key->total_amount;
            $payment_status = $key->payment_status;
            $total_amount = $key->total_amount;
        }

        $Mdata = [
            'rid'=>$rid,
            'team_name'=>$team_name,
            'team_leader'=>$team_leader,
            'event_name'=>$event_name,
            'total_member'=>$total_member,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
            'pincode'=>$pincode,
            'district'=>$district,
            'institute_name'=>$institute_name,
            'accommodations'=>$accommodations,
            'event_price'=>$event_price,
            'total_amount'=>$total_amount,
            'payment_status'=>$payment_status
       ];

        Mail::send('rmail', $Mdata, function($message) use ($email,$team_leader){
            $message->to($email, $team_leader)->subject
                ('Talenttantra Online Registration receipt');
            $message->from('noreply@talenttantra.com','Talenttantra Online Registration')->cc('talenttantrapayment@gmail.com', 'Talenttantra Registration');
      });
        return view('thankyou')->with($Mdata);
       }
        else{
             return redirect(route('tt.register'));
        }

   }
}
