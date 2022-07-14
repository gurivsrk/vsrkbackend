<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use App\Models\staticPages;
use App\Models\staticPageMeta;
use App\Models\team;
use App\Models\blogs;
use App\Models\category;
use App\Models\faqs;
use App\Models\forms;
use App\Models\career;
use App\Models\testimonials;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class homeController extends Controller
{
     

    public function index(){

        $team = team::select(['name','profileImg','designation','descritption'])->orderBy('order_id')->get()->take(4);
        $blogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->Enable()->reverse()->get()->take(3);
        $testimonials = testimonials::select(['name','profileImg','designation','descritption'])->reverse()->get();
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();

        $faq_ids_raw = staticPages::getField('home','faqs');
        $faqs = !empty($faq_ids_raw) ? faqs::select(['question','answer'])->whereIn('id',json_decode($faq_ids_raw->field_value))->get() : [];

        $home = staticPages::getAllFields('home');
        return view('frontend.index',compact(['team','blogs','testimonials','brand_logo','faqs','home']));
    }

 ////// ABOUT
    public function about(){
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.about_us',compact(['brand_logo']));
    }

    public function our_team(){

        $team = team::select(['name','profileImg','designation','descritption'])->orderBy('order_id')->get();
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.our_people',compact(['team','brand_logo']));
    }

    public function mddesk(){
        $team = team::select(['profileImg','name'])->where('name','Swapnil Aggarwal')->first();
        $testimonials = testimonials::select(['name','profileImg','designation','descritption'])->reverse()->get();
        return view('frontend.md_desk',compact(['team','testimonials']));
    }

    public function letter(){
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.letter',compact(['brand_logo']));
    }

    public function registrars(){
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.registrars',compact(['brand_logo']));
    }
    
    public function career(){

        $category = category::select('id','name')->where('for','career')->get();
        $vacany = career::select('vacany_name','num_of_post','category_id','descritption','post_status')->get();
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.career',compact(['category','vacany','brand_logo']));
    }


    //// services
    public function our_services(){
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.service',compact(['brand_logo']));
    }

    public function mutual_funds(){

        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.mutual_funds',compact(['brand_logo']));
    }

    public function insurance(){

        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.insurance',compact(['brand_logo']));
    }
    
    public function forms(){

       // $forms = forms::select('id','form_name','form','category_id','form_link')->with('categoryName')->get();
        $form_cate = category::select('name','id')->where('type','category')->where('for','form')->get();
        return view('frontend.mf_forms',compact(['form_cate']));
    }

    public function forms_ajax(Request $request){
        $cat_id = $request->post('id');
        $forms = forms::select('id','form_name','category_id','form_link')->with('categoryName')->where('category_id',$cat_id)->get();
        return $forms;
    }
    
    public function forms_download($id){
        $forms = forms::findOrFail($id);
        $files = str_replace('/storage','',$forms->form); 
        return Storage::download('public'.$files)  ;  
    }
    
    public function calci($id,$calci_type){
        $meta = staticPageMeta::findOrFail($id);
        if($meta->page_slug != $calci_type){
            abort(404);
        }
        $page_content = staticPages::getAllFields($id);

        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        $blogs = blogs::select(['id','title','blogImage','categories','tags','descritption','created_at'])->Enable()->reverse()->get()->take(3);
        return view('frontend.calculator',compact(['brand_logo','blogs','calci_type','page_content']));
    }

    

  
}
