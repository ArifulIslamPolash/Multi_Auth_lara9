<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class AdminController extends Controller
{
    public function AdminLoginForm(){
        return view('backend.admin.admin_login');
    }
    public function AdminLogin(Request $request){
        // return view('backend.admin.admin_login');
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('/admin/dashboard');
        }else{
            Session::flash('error', 'Invalid Email or Password');
            return redirect()->back();
        }
    }
    public function AdminLogout(){
        Auth::guard('admin')->logout();
       return redirect('login/admin');
    }
}
