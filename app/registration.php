<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
//    protected $table = 'registrations';
//    protected $primaryKey = 'id';
protected $dates = ['deleted_at'];

protected $fillable =[
    'rid','team_name', 'team_leader', 'event_name','parent_name' ,'total_member', 'email', 'phone', 'address', 'pincode', 'district', 'institute_name', 'accommodations', 'event_price'
    ,'amount_paid', 'payment_status','total_amount'
];
    public function accomo(){
        return $this->hasMany('App\Accommodation','rid','rid');
    }
}
