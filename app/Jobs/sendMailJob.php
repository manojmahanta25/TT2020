<?php

namespace App\Jobs;

use App\Mail\sendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $_Mdata;
    private $_type;
    private $_email;
    private $_name;

    public function __construct($email,$name,$Mdata, $type)
    {
        $this->_email=$email;
        $this->_name=$name;
        $this->_Mdata=$Mdata;
        $this->_type=$type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->_email,$this->_name)
            ->send(new sendMail($this->_Mdata,$this->_type));
    }
}
