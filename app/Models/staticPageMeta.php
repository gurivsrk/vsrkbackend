<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staticPages;
use Illuminate\Support\Str;

class staticPageMeta extends Model
{
    use HasFactory;
    
    protected $table = 'static_page_meta';

    protected $fillable = [
        'page_name',
        'page_slug',
        'misc'
    ];


    public static function add_data($page,$request){

        $data['page_name'] = $page;
        $data['page_slug'] = Str::Slug($request->page_title);
        $table = @self::create($data);
        staticPages::updateFields($table->id, $request);
        return true;
    }

    public static function update_data($page,$request){
        $data['page_slug'] = Str::Slug($request->page_title);
        $table = @self::findOrFail($request->check_calc);
        if($table->page_slug != $data['page_slug']){
            $table->update($data);
        }
        staticPages::updateFields($table->id, $request);
        return true;
        
    }

    public static function getAllFields($id){
        $data['meta'] = @self::findOrFail($id);
        $data['table'] =  staticPages::getAllFields($data['meta']->id);
        return $data;
    }
}
