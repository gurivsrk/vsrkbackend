<?php

namespace App\Models;

use Hamcrest\Type\IsString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isJson;

class staticPages extends Model
{
    use HasFactory;

    protected $table = 'static_page';

    public static function getField($page,$field){
        $data = @self::select('field_value')->where('page',$page)->where('field_name',$field)->first();
        return $data;
    }

    public static function getAllFields($page){
        $raw_data = self::where('page',$page)->get(); 
        $data = [];
        foreach($raw_data as $raw){
            $data[$raw->field_name] = $raw->field_value;
        }

        $data = json_decode(json_encode($data));
        return $data;
    }

    public static function updateFields($page, $request){

        foreach($request->all() as $key=>$value){
      
            if(in_array($key,['_token','_method','submit'])){
                continue;
            }
     
           $value = is_string($value)?$value:\json_encode($value);

            $staticPage = self::where('page',$page)
                                ->Where('field_name',$key)
                                ->first();

            if($staticPage){
               
                if($key == 'website_logo' && $request->file('website_logo')){
                        $value  = updateMedia($staticPage->field_value, $request->file('website_logo'),'GD');
                }
                elseif($key == 'favicon' && $request->file('favicon')){
                        $value  = updateMedia($staticPage->field_value, $request->file('favicon'),'GD');
                    }
            }
            else{
                $staticPage = new self;
                $staticPage->page = $page;
                $staticPage->field_name = $key;
               
                if($key == 'website_logo' && $request->file('website_logo')){
                    $value  = addMedia($request->file('website_logo'),'GD');
                }
                elseif($key == 'favicon' && $request->file('favicon')){
                    $value  = addMedia($request->file('favicon'),'GD');
                }

            }

            $staticPage->field_value = $value;
           $staticPage->save();
        }
        return true;
    }
}
