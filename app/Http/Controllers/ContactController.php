<?php

namespace App\Http\Controllers;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'nullable|string',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        try{
            Mail::send( new ContactMessage($request));
        }catch(Exception $ex){
            dd($ex);
        }
        return redirect()->back();
    }

}
