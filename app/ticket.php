<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ticket extends Model
{
    protected $primaryKey = 'custid';
    protected $fillable =[
    'custid', 'name', 'mobile', 'email', 'phone', 'pass_type', 'numbers_pass', 'select_day', 'payable_total', 'payment_status','instatus','indates'
];
}
