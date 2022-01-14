<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\storeCategoryRequest;


class CategoryTagContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::with('parent')->get();
        return view('pages.form-category',compact('category'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCategoryRequest $request)
    {
        $data = $request->all();
        category::create($data);

        return redirect()->back()->with('success','Successfully Added');        
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category,$id)
    {
        $category = category::with('parent')->get();
        $cateUpdate = category::findOrFail($id);
        return view('pages.form-category',compact(['cateUpdate','category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category,$id)
    {
            $category = category::findOrFail($id);
            $data = $request->all();
            $category->update($data);
            
            return redirect()->route('cateTag.index')->with('update','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('delete','Deleted Successfully');
    }


       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    // public function show(category $category)
    // {
    //     echo 'show';
    // }


}
