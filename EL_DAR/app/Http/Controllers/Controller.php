<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
        $obj_name = $req->input('name');
        $describition = $req->input("discreption");
        if( $obj_name != null && $describition != null){
        $data = array('obj_name'=>$obj_name,'describition'=>$describition);
        DB::table('object')->insert($data);
        echo"succces";
        }
    }

    function getdata(){
        $data['data']=DB::table('object')->get();
        if(count($data)>0){
            return view('add',$data);
        }
        else{
            return view('add');
        }
    }
}
