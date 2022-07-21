<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use App\Models\blogs;
use App\Models\category;
use App\Models\forms;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class homeController2 extends Controller
{

    ////// Contact us
    public function kyc_forms(){

        $catetag = category::whereIn('name',['kyc_forms'])->where('for','Form')->get();
        $forms = sizeof($catetag) > 0 ? forms::whereIn('category_id',[$catetag[0]->id])->get() : Null;

        return view('frontend.kyc_update',compact(['forms']));
    }

    ///// BLogs
    public function allBLogs(){
        $blogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->Enable()->reverse()->paginate(9);
        
        return view('frontend.all_blogs',compact(['blogs']));
    }

    public function blogByCaTag($type, $id){
        $caTag = category::findOrFail($id);
        $type = ($type == 'tag') ? 'tags' : 'categories';
        $blogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where($type,'LIKE','%"'.$caTag->id.'"%')->Enable()->reverse()->paginate(9);
        if((sizeof($blogs) < 1)){
            $blogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where($type,'LIKE','%'.$caTag->id.'%')->Enable()->reverse()->paginate(9);
        }
        $pType = 'caTag';

        return view('frontend.all_blogs',compact(['blogs','pType', 'type']));
    }

    public function blogDetail($id,$slug){
        $blog = blogs::FindOrFail($id);
         if (Str::slug($blog->title) !== $slug) return redirect()->route('frontend.all_blogs')->with('error','404 Not Found');
         
        foreach(json_decode($blog->categories) as $cc){
             $b = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where('categories',"LIKE",'%"'.$cc.'"%')->where('id','!=',$blog->id)->Enable()->get();
             if(count($b) !== 0){
                foreach($b as $bid){
                    $rawPostIds[] =  $bid->id;
                }
             }
             else{
                $b2 = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where('categories',"LIKE",'%'.$cc.'%')->where('id','!=',$blog->id)->Enable()->get();
                foreach($b2 as $bid2){
                    $bid2;
                    $rawPostIds[] =  $bid2->id;
                }
             }
         }
        
         $categories = category::select('name','id')->where('type','category')->where('name','!=','blog')->inRandomOrder()->where('for','other')->take(6)->get();
         foreach($categories as $category){
            $catId[] = $category->id;
            $blogCount[] = blogs::select('id')->where('categories','LIKE','%'.$category->id.'%')->count();
         }
         $catCount = array_combine($catId,$blogCount);

         $tags = category::select('name','id')->where('type','tag')->where('for','other')->inRandomOrder()->take(14)->get();

         $blogs = !empty($rawPostIds) ? blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->inRandomOrder()->whereIn('id',(array_unique($rawPostIds)))->take(2)->get() : Null;
         $$blogs = $blogs ?? [];

         $latestBlogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where('id','!=',$blog->id)->reverse()->Enable()->take(3)->get();
        
         return view('frontend.blog_detail',compact(['blogs','blog','latestBlogs', 'catCount', 'categories', 'tags']));
    }



}
