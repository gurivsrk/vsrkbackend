<?php

namespace App\Http\Controllers\frontend;

use App\Models\staticPages;
use App\Models\team;
use App\Models\blogs;
use App\Models\category;
use App\Models\faqs;
use App\Models\testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
     

    public function index(){

        $team = team::select(['name','profileImg','designation','descritption'])->orderBy('order_id')->get()->take(4);
        $blogs = blogs::select(['title','blogImage','categories','tags','descritption','created_at'])->reverse()->get()->take(3);
        $testimonials = testimonials::select(['name','profileImg','designation','descritption'])->reverse()->get();
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();

        $faq_ids_raw = staticPages::getField('home','faqs');
        $faqs = faqs::select(['question','answer'])->whereIn('id',json_decode($faq_ids_raw->field_value))->get();

        return view('frontend.index',compact(['team','blogs','testimonials','brand_logo','faqs']));
    }

    public function about(){
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.about_us',compact(['brand_logo']));
    }

    public function our_team(){

        $team = team::select(['name','profileImg','designation','descritption'])->orderBy('order_id')->get();
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();
        return view('frontend.our_people',compact(['team','brand_logo']));
    }
}
