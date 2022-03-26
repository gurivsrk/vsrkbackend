<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\subscribe;
use Illuminate\Support\Facades\Mail;

class sendNewsletter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $request;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emails = $this->request['emails'];
        $subject = $this->request['email_subject'];
        $email_content = $this->request['email_content'];

        foreach($emails as $key=>$email){
            Mail::to($email)->later(now()->addMinutes($key++),new subscribe($email ,$subject, $email_content )); 
        }
    }
}
