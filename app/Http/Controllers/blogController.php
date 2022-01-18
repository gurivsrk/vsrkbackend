<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\category;
use App\Http\Requests\StoreblogsRequest;
use App\Http\Requests\UpdateblogsRequest;
use Illuminate\Support\Facades\Storage;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = "index-blog";
        $item = blogs::orderBy('id','desc')->paginate(10);
        $catetag = category::where('for','other')->get();
        return view('pages.all-blogs',compact(['catetag','item','type']));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreblogsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreblogsRequest $request)
    {
            $imgname = addMedia($request->file('blogImage'),'blog_images');
        // $request->merge(['blogImage'=>$imgname]);
            $data = $request->all();
            $data['blogImage'] = $imgname;
            $data['tags'] = json_encode($request->tags);
            $data['categories'] = json_encode($request->categories);
            blogs::create($data);
        
        return redirect()->back()->with('success','Successfully Added');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(blogs $blogs,$id)
    {
        //die($id);
        $blogs = blogs::findOrFail($id);
        $type = "edit-blog";
        $item = blogs::orderBy('id','desc')->paginate(10);
        $catetag = category::where('for','other')->get();
        return view('pages.all-blogs',compact(['catetag','type','blogs','item']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateblogsRequest  $request
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateblogsRequest $request, blogs $blogs,$id)
    {
        $blogs = blogs::findOrFail($id);
       
        $data = $request->all();

        if($request->file('blogImage')){
            $image = pathinfo($blogs->blogImage,PATHINFO_BASENAME);
            //echo$image;
            if(Storage::delete('public/blog_images/'.$image)){
                $imgname = addMedia($request->file('blogImage'),'blog_images');
                $data['blogImage'] = $imgname;
            }
            else {
                return redirect()->back()->with('delete','Fail to delete');
            }
        }
        
        $blogs->update($data);
        return redirect()->route('all-blogs.index')->with('update','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogs $blog,$id)
    {
        $blogs = blogs::findOrFail($id);
        $image = pathinfo($blogs->blogImage,PATHINFO_BASENAME);
        if(Storage::delete('public/blog_images/'.$image)){
            $blogs->delete();
            return redirect()->back()->with('success','Successfully Deleted Blog');
       }
       else{
           //die('fail');
            return redirect()->back()->with('delete','Fail to Delete Blog');
       }
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // // /**
    // //  * Display the specified resource.
    // //  *
    // //  * @param  \App\Models\blogs  $blogs
    // //  * @return \Illuminate\Http\Response
    // //  */
    // public function show(blogs $blogs)
    // {
    //     echo $blogs.'sas';
    // }

}
