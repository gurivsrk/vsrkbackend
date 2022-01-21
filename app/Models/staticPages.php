<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class staticPages extends Model
{
    use HasFactory;

    protected $table = 'static_page';


    public function getAllFields($page){
        $raw_data = self::where('page',$page)->get(); 
        $data = [];
        foreach($raw_data as $raw){
            $data[$raw->field_name] = $raw->field_value;
        }

        $data = json_decode(json_encode($data));
        return $data;
    }

    public function updateFields($page, $request){

        foreach($request->all() as $key=>$value){
          
            if(in_array($key,['_token','_method','submit'])){
                continue;
            }
            $staticPage = self::where('page',$page)
                                ->Where('field_name',$key)
                                ->first();
            if($staticPage){
                $staticPage->field_value = $value;
            }
            else{
                $staticPage = new self;
                $staticPage->page = $page;
                $staticPage->field_name = $key;
                $staticPage->field_value = $value;
            }

           $staticPage->save();
        }
        return true;
    }
}
