<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Subscriber;
use App\Models\BlogComments;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('web.index');
    }

    public function aboutUs(){
        
        return view('web.aboutus');
    }

    public function contactUs(){
        return view('web.contactus');
    }

    public function events(){
        $current_date = Carbon::now();
        $upcoming = Event::where('status', 1)->whereDate('event_date','>=',$current_date)->get();
        $past = Event::where('status', 1)->whereDate('event_date','<=',$current_date)->get();
        return view('web.events', compact('upcoming','past'));
    }

    public function event_info($id){
        $post = Event::findorfail($id);
        return view('web.event_info' , compact('post'));
    }

    public function blogsView(Request $request){
        $search_keywords = $request->keywords;
        $category_id = $request->category_id;
        $categories = BlogCategory::orderby('title')->limit(5)->inRandomOrder()->get();
        $recent_posts = Blog::orderby('created_at' , 'desc')->limit(5)->inRandomOrder()->get();
        $builder = Blog::where('status' , 1)->orderBy('created_at' , 'desc');
        if(empty($category_id)){
            $posts = $builder->where('title', 'like' , '%'.$search_keywords.'%')->paginate(20);
        }
        else{
            $posts = $builder->where('title', 'like' , '%'.$search_keywords.'%')
            ->where('post_category_id' , $category_id )->paginate(20);
            $category_id = BlogCategory::find($category_id);
        }
        return view('web.blogs' , compact('posts' , 'categories' , 'search_keywords' , 'recent_posts' ));
    }

    
    public function blog_info($id){
        $post = Blog::findorfail($id);
        //$post['social_links'] = $this->post_share_links($post);
        $categories = BlogCategory::orderby('title')->limit(5)->inRandomOrder()->get();
        $recent_posts = Blog::orderby('created_at' , 'desc')->limit(5)->inRandomOrder()->get();
        $comments = BlogComments::where('blog_id',$post->id)->where('status',1)->orderby('id','desc')->get();
        return view('web.blog_info' , compact('post','categories' , 'recent_posts', 'comments'));
    }

    public function blog_category_posts(Request $request , $id){
        $category = $this->PostCategory->find($id);
        if(!empty($category)){
            $request['category_id'] = $id;
            return $this->blogsView($request);
        }
    }



    public function blogsComment(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'nullable|string',
            'website' => 'nullable|string',
            'blog_id' => 'required|string',
            'comment' => 'required|string',
        ]);

        if($validator->fails()){
            return response()->json([
                'success'=> false ,
                'msg' => 'Comment could not be added!',
                'data' => null,
            ]);
        }
        else{
           $data = $validator->validated();
           $comment = BlogComments::create($data);
           return response()->json([
               'success'=> true ,
               'msg' => 'Comment added successfully!',
               'data' => [
                   'avatar' => $comment->getAvatar() ,
                   'name' => $comment->name,
                   'date' => date('d M Y h:i:A',strtotime($comment->created_at)),
                   'comment' => $comment->comment,
                ],
           ]);
        }
    }


    public function make_comment(Request $request){
        //dd($request->all());
        $data = $request->validate([
            'blog_id' => 'required',
            'name' => 'required|string',
            'email' => 'required|string',
            'body' => 'required|string',
        ]);
        $data['status'] = 1;
        $comment = BlogComments::create($data);
        $comment['post_date'] = date('d/m/y',strtotime($comment->created_at));
        $comment['name'] = $comment->name;
        $comment['email'] = $comment->email;
        $comment['body'] = $comment->body;
       return response()->json($comment);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
