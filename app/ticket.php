<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    protected $primaryKey = 'custid';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable =[
    'custid', 'name', 'mobile', 'email', 'phone', 'pass_type', 'numbers_pass', 'select_day', 'payable_total', 'payment_status','instatus','indates'
];
}
