<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Session; 
use DB;
use Redirect;



class loginController extends BaseController
{
     public function login(Request $req)
     {
      $username = $req->input('username');
      $password = $req->input('password');

      $checkLogin = DB::table('el_dar_admin')->where(['user_name'=>$username,'password'=>$password])->get();
      if(count($checkLogin)  >0)
      {
        Session::put('login', 'admin');
      }
      else
      {
        Session::put('login', 'notadmin');
      }
      return Redirect::back();
     }
    
     public function logout(){
        Session::forget('login');
        return Redirect::back();
    }
     
}
