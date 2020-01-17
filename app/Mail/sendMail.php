<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $Mdata;
    private $type;
    public function __construct($Mdata, $type)
    {
        $this->Mdata = $Mdata;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        switch ($this->type)
        {
            case 'pass':
                return $this->from('noreply@talenttantra.com','Talenttantra Online Registration')
                    ->subject('Talent Tantra Online Ticket receipt')
                    ->cc('talenttantrapayment@gmail.com', 'Talenttantra Registration')
                    ->view('mail');
                break;
            case 'registration':
                return $this->from('noreply@talenttantra.com','Talenttantra Online Registration')
                    ->subject('Talent Tantra Online Registration receipt')
                    ->cc('talenttantrapayment@gmail.com', 'Talenttantra Registration')
                    ->view('rmail');
                break;
            default:
                return abort(403);
        }

    }
}
