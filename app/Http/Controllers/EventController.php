<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Event::paginate(50);
        return view('admin.events.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $mode = 'required')
    {
        $user = Auth::User();
        $data = $this->validateData($request);
        $data['user_id'] = $user->id;
        //print_r($data);
        Event::create($data);
        toastr()->success('Event added successfully!');
        return redirect()->back();
    }

    private function validateData(Request $request , $mode = 'required'){
        $data = $request->validate([
            'title' => 'required|string',
            'status' => 'required|string',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'event_link' => 'nullable|string',
            'location' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
            'image' =>  $mode.'|image',
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
        //
    }
}
