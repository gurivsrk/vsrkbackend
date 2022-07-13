<?php

namespace App\Http\Controllers;

use App\Models\forms;
use App\Models\category;
use App\Http\Requests\StoreformsRequest;
use App\Http\Requests\UpdateformsRequest;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_type="MF Forms";
        $page_class = "mfForm";
        $cate= category::where('name','kyc_forms')->where('for','Form')->get();
        $form = forms::where('category_id','!=', $cate[0]->id)->get();
        $catetag = category::where('for','Form')->orwhere('for','all')->get();
        return view('pages.all-form',compact(['catetag','form','form_type','page_class']));
    }

    public function otherForms(){

        $form_type="Other Forms";
        $page_class = "otherForm";
        $catetag = category::whereIn('name',['kyc_forms'])->where('for','Form')->get();
        $form = forms::whereIn('category_id',[$catetag[0]->id])->get();

        return view('pages.all-form',compact(['catetag','form','form_type','page_class']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreformsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreformsRequest $request)
    {

            $cateName = category::find($request->post('category_id'));
            $fileName = addMedia($request->file('form'),'forms/'.$cateName->name);
            $data = $request->all();

            $data['form'] = $fileName;
            forms::create($data);
        
        return redirect()->back()->with('success','Successfully Added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function edit(forms $forms,$id)
    {
        $type = 'edit-form';
        $formItem = forms::find($id);
        $form = forms::all();
        $catetag = category::where('for','Form')->orwhere('for','all')->get();
        return view('pages.all-form',compact(['catetag','form','formItem','type']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateformsRequest  $request
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateformsRequest $request, forms $forms, $id)
    {
        $form = forms::findOrFail($id);
        $cateName = category::find($request->post('category_id'));
        $data = $request->all();

        if($request->hasFile('form')){
            if(!empty($form->form)){
                $data['form'] =  !empty($form->form) ? updateMedia( $form->form,$request->file('form'),'forms/'.$cateName->name) : addMedia($request->file('form'),'forms/'.$cateName->name);
            }
            else{
                $data['form'] =  addMedia($request->file('form'),'forms/'.$cateName->name);
            }
        }

        $form->update($data);   
        return redirect()->route('forms.index')->with('update','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function destroy(forms $forms,$id)
    {
        $form = forms::findOrFail($id);
        $form_file = pathinfo($form->form,PATHINFO_BASENAME);
        $cateName = category::findOrFail($form->category_id);

        if(Storage::delete('public/forms/'.$cateName->name.'/'.$form_file)){
            $form->delete();
            return redirect()->back()->with('success','Successfully Deleted Form');
       }
       else{

            return redirect()->back()->with('delete','Fail to Delete Form');
       }
    }
}
