<?php

namespace App\Http\Controllers;

use App\tbl_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
Session_start();

class adminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
        
    }
    public function dashboard(Request $request)
    {
     

       $admin_email= $request->admin_email;      
       $admin_password= $request->admin_password;
      
       $result=DB::table('tbl_admin')
      ->where('admin_email',$admin_email)
      ->where('admin_password',$admin_password)
      ->first();
           
      if($result)
      {
         Session::put('admin_name',$result->admin_name);
         Session::put('admin_id',$result->admin_id);
         return redirect(route('dashboard'));
      }else{
          Session::put('message','your Email and password are invalid');
          return redirect(route('admin'));
      }
      
    }
}
