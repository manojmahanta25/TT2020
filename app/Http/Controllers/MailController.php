<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use DB;
use App\Ticket;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {

   public function html_email() {

   	   $data = DB::table('tickets')->where('custid', 'DNEOT7LY')->get();
      
     	foreach ($data as $key) {
     		 $custid = $key->custid;
     		 $name = $key->name;
			$mobile = $key->mobile;
			$email = $key->email;
			$pass_type = $key->pass_type;		
			$numbers_pass = $key->numbers_pass;
			$select_day = $key->select_day;
			$payable_total = $key->payable_total;
			$razor_payid = $key->razor_payid;
			$razor_orderid = $key->razor_orderid;
			$payment_status = $key->payment_status;		
			$updated_at = $key->updated_at;
     	}
     	// echo $custid = $data->custid;
      	$select_day=$this->getSDay($select_day);

      $Mdata = [
      	'custid'=>$custid,
      	'name'=>$name,
      	'mobile'=>$mobile,
      	'email'=>$email,
      	'pass_type'=>$pass_type,
      	'numbers_pass'=>$numbers_pass,
      	'select_day'=>$select_day,
      	'payable_total'=>$payable_total,
      	'razor_payid'=>$razor_payid,
      	'razor_orderid'=>$razor_orderid,
      	'payment_status'=>$payment_status
       ];
   	  
   	  //$data= $data->toArray();
   	 // echo $custid.'<br/>';
   	   //var_dump($Mdata);
   	  echo "<br/>";
   	  echo "<br/>";
   	 print_r($Mdata);

      Mail::send('mail', $Mdata, function($message) {
         $message->to($email, $name)->subject
            ('Talenttantra Online Ticket receipt');
         $message->from('noreply@talenttantra.com','Talenttantra Online Ticket');
      });
      echo "HTML Email Sent. Check your inbox.";

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