<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // $messages =[
        //     'event_name.required'=>'Select any given competition',
        //     'team_name.required'=>'Enter Team Name, for any singular participant just enter your name',
        //     'team_leader.required'=>'Enter Your Name',
        //     'email.required'=>'Enter Valid Email ID',
        //     'email.email'=>'Valid Email ID is required as details will be mailed to you',
        //     'phone.required'=>'Enter your mobile number',
        //     'phone.regex'=>'Enter Valid mobile number',
        //     'address.required'=>'Enter your address',
        //     'pincode.required'=>'Enter Pincode',
        //     'pincode.regex'=>'Enter valid Pincode',
        //     'district.required'=>'Enter your District',
        //     'institute_name.required'=>'Enter your Institute or College or University'         
        // ];
        return 
        [
            'event_name'=>'required',
            'team_name' => 'required',
            'team_leader' =>'required|max:50',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{10}$/',
            'address' => 'required|max:100',
            'pincode' => 'required|regex:/^\d{6}$/',
            'district' => 'required|max:50',
            'institute_name' => 'required|max:60',
            'accommodations' => 'required'
        ];
        // ],$messages;
    }
}
