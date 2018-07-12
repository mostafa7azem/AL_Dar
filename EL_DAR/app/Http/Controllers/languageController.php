<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;
use App\Http\Requests;

class languageController extends Controller
{
    public function index(){
        if(!\Session::has('locale'))
        {
            \Session::put('locale', Input::get('locale'));
        }else{
            session(['locale' => Input::get('locale')]);
        }
        return Redirect::back();
    }
}
