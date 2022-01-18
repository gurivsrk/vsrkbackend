<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function addMedia(request $request){
        dd($request);
        // $img = $request->file('file');
        // $img_name = $img->getClientOriginalName();
        // $filename = date('his').'-'.$img_name;
        // $img_name = $img->storePubliclyAs('sliderImgs',$filename );
        // return response()->json([
        //       'name' => $filename,
        //   ]);
      }
  
      public function deleteMedia(request $request){
          
  
      }
}
