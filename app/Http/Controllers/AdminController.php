<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Facades\Toastr;

class AdminController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            // User::where('email' , $data['email'])->update(['password' => Hash::make($data['password'])]);
            // dd(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]));
            if (Auth::attempt(['email' =>$data['email'], 'password' => $data['password'], 'role' => 'Admin'])) {
                toastr()->success('Successful Login!.');
                // dd(auth()->user());
                return redirect('/admin/dashboard');;
            }else {
               toastr()->error('Wrong Email or Password! Try again');
                return redirect('/login');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        toastr()->success('Post added successfully :)','Success');
        return view('admin.dashboard');
    }
   

}
