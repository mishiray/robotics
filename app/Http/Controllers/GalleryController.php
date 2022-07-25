<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Gallery::paginate(50);
        return view('admin.gallery.index',compact('posts'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Gallery::select('filter')->distinct()->get();
        return view('admin.gallery.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'description' => 'required|string',
            'status' => 'required|string',
            'filter' => 'nullable|string',
        ]);
        if($image = $request->file('image')){
            $filename = time().'.'.$image->extension();
            $destinationPath = public_path('/post_images');
            $image->move($destinationPath, $filename);
            $data['image'] = $filename;
        }
        Gallery::create($data);
        toastr()->success('New Image added successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findorfail($id);
        try{
            unlink(public_path('/post_images').'/'.$gallery->image);
        }
        catch(Exception $e){
           // toastr()->error('Couldn`t delete old image!');
        }
        $gallery->delete();
        toastr()->success('Image deleted successfully!');
        return redirect()->back();
    }
}
