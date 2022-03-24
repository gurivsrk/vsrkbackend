<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\faqs;
use App\Models\staticPages;
use App\Models\staticPageMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Http\Requests\UpdatestaticPagesRequest;


class staticPagesContoller extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  Auth::user();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staticPages  $staticPages
     * @return \Illuminate\Http\Response
     */
    public function edit(staticPages $staticPages,$id)
    {
        $data = $staticPages->getAllFields($id);
        $faqs = faqs::all();

        return view('pages.'.$id,compact(['data','faqs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestaticPagesRequest  $request
     * @param  \App\Models\staticPages  $staticPages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestaticPagesRequest $request, staticPages $staticPages,$id)
    {
        $staticPages->updateFields($id,$request);
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function calci(){
        $options = staticPageMeta::select('id','page_name','page_slug','misc')->where('page_name','calculator')->get();
        return view('pages.calculator',compact('options'));
    }

    public function calciPage(Request $request){

        if($request->id == 'add_page'){
            $data = [];
        }
        else{
             $data = staticPageMeta::getAllFields($request->id);
        }
       
        $faqs = faqs::all();
        return view('partials.calc',compact(['data','faqs']));
    }

    public function calciPageUpdate(staticPageMeta $staticPagesMeta,Request $request,$page){

            if(!empty($request->check_calc)){
                $staticPagesMeta->update_data($page,$request);
            }
            else{
                $staticPagesMeta->add_data($page,$request);
            }
            return redirect()->back()->with('success','Successfully Updated');
            
    }

}
