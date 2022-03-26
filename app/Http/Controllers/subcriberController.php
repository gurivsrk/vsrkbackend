<?php

namespace App\Http\Controllers;

use App\Models\subscriber;
use App\Http\Requests\StoresubscriberRequest;
use App\Http\Requests\UpdatesubscriberRequest;

use App\Mail\subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class subcriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresubscriberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubscriberRequest  $request
     * @param  \App\Models\subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubscriberRequest $request, subscriber $subscriber)
    {
        //
    }

    public function sendMail($email_id=0)
    {
        $type = 'single';
        $subscribe = subscriber::select('id','email','status')->get();
        if(!$email_id){
            $type = 'multi';
            $subscribe = subscriber::select('id','email','status')->where('status','subscribe')->get();
        }
        return view('pages.send_mail',compact(['subscribe','email_id','type']));
    }

    public function send(Request $request)
    {
        
        $this->sendEmail($request->all());
        return back()->with('success','Send Email Successfully');
    }

 /////// Purely for testing purpose
    public function testEmail(Request $request)
    {    
        $main_email = "contact@vsrkcapital.com";
        $email = 'gursharan@vsrkcapital.com';
        $subject = "test email from local sever";
        $email_content = "Welcome to mail Function";

        Mail::to($email)->send(new subscribe(  $email ,$subject, $email_content ));
       echo 'done';
    }


    
    private function sendEmail($request)
    {    
        $job = (new \App\Jobs\sendNewsletter($request))->delay(now()->addMinute(2));
        dispatch($job);
        return true;
    }


}
