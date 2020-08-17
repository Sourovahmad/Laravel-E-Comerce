<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
Session_start();
class superadmincontroller extends Controller
{
    public function logout()
    {
        
        Session::flush();
        return redirect(route('admin'));
    }


    
}
