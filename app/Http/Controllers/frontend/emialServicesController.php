<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\contactForm;
use Illuminate\Support\Facades\Mail;

class emialServicesController extends Controller
{

   public function formProcess(Request $request){
      if($request->file('cv')){
          $fileName = $request->file('cv')->getClientOriginalName();
          $fileMime = $request->file('cv')->getClientMimeType();
          $fileDetails = [$fileName, $fileMime];
      }

      $fileDetails = $fileDetails ?? null;
      $this->sendMail($request,$request->all(),$fileDetails);

      return $request->file('cv') ? redirect()->back()->with('form_messsage','success') : 'success';
   }


   private function sendMail($rawData,$data,$fileDetails){
      $main_email = "contact@vsrkcapital.com";
      $email = 'gursharan@vsrkcapital.com';
      $subject = "$rawData->subject";
      $email_content = [$data, $fileDetails];
       Mail::to($email)->send(new contactForm( $email ,$subject, $email_content ));
   }
}
