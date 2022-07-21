<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\blogs;
use App\Models\category;
class processRequestController extends Controller
{
    public function ajaxBlogSearch(Request $request){
        if(strlen($request->post('input')) > 2){
            $blogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where('title',"LIKE",'%'.$request->post('input').'%')->Enable()->get();
               foreach($blogs as $blog){
                $ajaxSearch[] = '<a href="/blog/'.$blog->id.'/'.Str::slug($blog->title).'"><span>'.$blog->title.'</span></a>';
               }
            return [ 'all'=>$blogs, 'search'=>$ajaxSearch ];
        }
    }
}
