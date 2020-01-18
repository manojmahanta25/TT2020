<?php

namespace App\Http\Controllers;

use App\Accommodation;
use App\Event;
use App\Http\Requests\RegistrationValidate;
use App\Jobs\sendMailJob;
use App\Registration;
use Session;
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
    public function accoM() {
        $rid = session()->get('rid');
        if($rid==null || $rid ==''){
            return abort(403);
        }
        $total_member = session()->get('tm');
        session()->forget('tm');
        $page = 'registration';
        $page_title = 'All Events of Talent Tantra 2020';
        $mtitle = 'All Events of Talent Tantra 2020';
        $description = 'Talent Tantra, the annual student festival of the University, is hosted each year to provide students to with a platform to showcase their talents and promote the honing of skills required to become a versatile and socially concious global citizen.';
        $keywords = 'Talent Tantra, annual fest, talent tantra 2020, kaziranga university, kaziranga university student festival, jorhat, assam, northeast india fest';
        return view('acco', compact('page', 'page_title', 'mtitle', 'description', 'keywords', 'total_member','rid'));
    }
    public function accoMstore(Request $request) {
        if(!isset($request->sbtn)){
            return abort(403);
        }
        $rid = $request->rid;
        if($rid==null || $rid ==''){
            return abort(403);
        }else{
            Registration::where('rid', $rid)->firstOrFail();
            $input = $request->all();
            Accommodation::create(["rid" => $rid,"members" => json_encode($input)]);
            return redirect(route('tt.registermail'))->with(['rid' => $rid]);
        }
        return abort(403);
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
            return abort(403);
        }
        $value = Event::select('parent_event','cost')->where('event_code', $request->event_name)->firstOrFail();

        $cost=1500;
        if($value->cost == 1500)
        {
            $cost=1500;
        }else {
            $cost = $this->e($request->total_member)*$value->cost;
        }
        $total = $cost;
        $acco =0;
        if($request->accommodations == 1)
        {
            $acco =1;
            $total = $total + 200*$this->e($request->total_member);
        }
        else{
            $total = $total;
        }
        $rid=$this->getRID();
        $body =[
            'rid'=> $rid,
           'team_name' => $this->e($request->team_name),
            'team_leader' => $this->e($request->team_leader),
            'event_name' => $this->e($request->event_name),
            'parent_name' =>$this->e($value->parent_event),
            'total_member' => $this->e($request->total_member),
            'email' => $this->e($request->email),
            'phone' => $this->e($request->phone),
            'address' => $this->e($request->address),
            'pincode' => $this->e($request->pincode),
            'district' => $this->e($request->district),
            'institute_name' => $this->e($request->institute_name),
            'accommodations' => $this->e($request->accommodations),
            'event_price' => $this->e($value->cost),
            'total_amount' => $this->e($total)
        ];
        Registration::create($body);
        $request->session()->regenerateToken();
        $request->flush();
        if($acco==1){
            return redirect(route('tt.acco'))->with(['rid' => $rid,'tm' => $body['total_member']]);
        } else {
            return redirect(route('tt.registermail'))->with(['rid' => $rid]);
        }
        return abort(403);
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
        $value = Event::select('min_members','max_members')->where('event_code', $id)->firstOrFail();
        if($request -> ajax()) {
            $option='';
            $count = 1;
            for ($i=$value->min_members; $i<=$value->max_members; $i++)
            {   if($count == 1) {
                $option .= '<option value="' . $i . '" selected>' . $i . '</option>';
                }else {
                    $option .= '<option value="' . $i . '" >' . $i . '</option>';
                }
                $count++;
            }
            return response()->json(['data' => $option, 'status' => 'success']);
//            return response()->json(['data' => $value, 'status' => 'success']);
        }

        return abort(404);
    }
    public function getPrice($id='ml', $member=1, Request $request)
    {
        $id = trim(htmlspecialchars(strip_tags($id)));
        $member = trim(htmlspecialchars(strip_tags($member)));
        if($request->ajax()){
            $value = Event::select('cost')->where('event_code', $id)->firstOrFail();
            $cost=1500;
            if($value->cost == 1500)
            {
                $cost=1500;
            }else {
                    $cost = $member*$value->cost;
             }
            return response()->json(['data' => $cost, 'status' => 'success']);
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
            $parent_event =$key->parent_name;
            $total_member = $key->total_member;
            $email = $key->email;
            $phone = $key->phone;
            $address = $key->address;
            $pincode = $key->pincode;
            $district = $key->district;
            $institute_name = $key->institute_name;
            $accommodations = $key->accommodations;
            $event_price = $key->event_price;
            $payment_status = $key->payment_status;
            $total_amount = $key->total_amount;
        }
         $evn= Event::where('event_code', $event_name)->first();
            $evname = $evn->event_name;

        $Mdata = [
            'rid'=>$rid,
            'team_name'=>$team_name,
            'team_leader'=>$team_leader,
            'event_name'=>$evname.'-'.$parent_event,
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
            'payment_status'=>$payment_status,
            'cname'=> $evn->name,
            'cnumber'=> $evn->number
       ];


            $job =(new sendMailJob($email,$team_leader,$Mdata,'registration'));
            dispatch($job);


        return view('thankyou')->with($Mdata);
       }
        else{
             return redirect(route('tt.register'));
        }

   }
   public function e($value)
   {
        return htmlspecialchars(strip_tags(trim($value)));
   }
}
