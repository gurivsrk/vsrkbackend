<?php

namespace App\Http\Controllers\frontend;

use App\Models\staticPages;
use App\Models\staticPageMeta;
use App\Models\team;
use App\Models\blogs;
use App\Models\category;
use App\Models\faqs;
use App\Models\forms;
use App\Models\career;
use App\Models\testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class homeController2 extends Controller
{
      ///// BLogs

    public function allBLogs(){
        $blogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->Enable()->reverse()->paginate(10);
        return view('frontend.all_blogs',compact(['blogs']));
    }

    public function blogDetail($id,$slug){
        $blog = blogs::FindOrFail($id);
         if (Str::slug($blog->title) !== $slug) return redirect()->route('frontend.all_blogs')->with('error','404 Not Found');
         
        foreach(json_decode($blog->categories) as $cc){
             $b = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where('categories',"LIKE",'%'.$cc.'%')->where('id','!=',$blog->id)->Enable()->get();
              if(count($b) !== 0){
                foreach($b as $bid){
                    $rawPostIds[] =  $bid->id;
                }
             }
         }

         $categories = category::select('name','id')->where('type','category')->inRandomOrder()->where('for','other')->take(6)->get();
         foreach($categories as $category){
            $catId[] = $category->id;
            $blogCount[] = blogs::select('id')->where('categories','LIKE','%'.$category->id.'%')->count();
         }

         $catCount = array_combine($catId,$blogCount);

         $tags = category::select('name','id')->where('type','tag')->where('for','other')->inRandomOrder()->take(14)->get();

         $blogs =$rawPostIds ? blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->inRandomOrder()->whereIn('id',(array_unique($rawPostIds)))->take(2)->get() : Null;

         $latestBlogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->where('id','!=',$blog->id)->reverse()->Enable()->get(3);
        
        return view('frontend.blog_detail',compact(['blogs','blog','latestBlogs', 'catCount', 'categories', 'tags']));
    }


}
