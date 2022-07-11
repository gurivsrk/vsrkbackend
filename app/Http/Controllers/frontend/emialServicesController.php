<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\contactForm;
use Illuminate\Support\Facades\Mail;

class emialServicesController extends Controller
{
   public function formProcess(){

      $main_email = "contact@vsrkcapital.com";
      $email = 'gursharan@vsrkcapital.com';
      $subject = "test email from local sever";
      $email_content = "Welcome to mail Function";

      Mail::to($email)->send(new contactForm(  $email ,$subject, $email_content ));
       echo 'done';
       
   }
}
