<?php

namespace App\Http\Controllers;
use Yoeunes\Toastr\Facades\Toastr;

use App\Models\Blog;
use App\Models\BlogCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::paginate(50);
        return view('admin.blogs.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = BlogCategory::where('status' , 1)->get();
        return view('admin.blogs.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::User();
        $data = $this->validateData($request);
        $data['user_id'] = $user->id;
        Blog::create($data);
        toastr()->success('Post added successfully!');
        return redirect()->back();
    }


    private function validateData(Request $request , $mode = 'required'){
        $data = $request->validate([
            'blog_category_id' => 'required|exists:blog_categories,id',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' =>  $mode.'|image',
            'status' => 'required|string',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $user = Auth::User();
        
        if($image = $request->file('image')){
            $filename = time().'.'.$image->extension();
            $destinationPath = public_path('/post_images');
            $image->move($destinationPath, $filename);
            $data['image'] = $filename;
        }

        $data['slug'] = Str::slug($request['title']);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $post)
    {
        $categories = BlogCategory::where('status' , 1)->get();
        return view('admin.blogs.edit',compact('categories' , 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findorfail($id);
        if(empty($blog)){
            //toastr()->error('Item not found!');
            return redirect()->back();
        }
        $data = $this->validateData($request , 'nullable');
        if(!empty($blog->image)){
            try{
                unlink( public_path('/post_images').'/'.$blog->image);
            }
            catch(Exception $e){
                //toastr()->error('Couldn`t delete old image!');
            }
        }
        $blog->update($data);
        toastr()->success('Post updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findorfail($id);
        try{
            unlink(public_path('/post_images').'/'.$blog->image);
        }
        catch(Exception $e){
           // toastr()->error('Couldn`t delete old image!');
        }
        $blog->delete();
        toastr()->success('Post deleted successfully!');
        return redirect()->back();
    }
}
