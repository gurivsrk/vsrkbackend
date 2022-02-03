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

        $team = team::orderBy('order_id')->get()->take(4);
        $blogs = blogs::reverse()->get()->take(4);
        $testimonials = testimonials::reverse()->get();
        $brand_logo = category::select('name','logo')->whereNotNull('logo')->get();

        $faq_ids_raw = staticPages::getField('home','faqs');
        $faqs = faqs::whereIn('id',json_decode($faq_ids_raw->field_value))->get();

        return view('frontend.index',compact(['team','blogs','testimonials','brand_logo','faqs']));
    }
}
