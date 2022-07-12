<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$subject,$email_content)
    {
        $this->email = $email;
        $this->subject = $subject;
		$this->email_content = $email_content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->email_content[1] != null){
            return $this->view('email.contact',[
                'data' => $this->email_content[0],
            ])->attach($this->email_content[0]['cv'],[
                    'as' => $this->email_content[1][0],
                    'mime' => $this->email_content[1][1]
            ]);
        }
        else{
            return $this->view('email.contact',[
                'data' => $this->email_content[0],
            ]); 
        }
    }
}
