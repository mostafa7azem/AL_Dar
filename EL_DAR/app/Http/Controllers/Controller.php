<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\support\Collection;
use App\Http\Controllers\controller;
use DB;
use stdClass;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  
    function getdata(){
        $data['data']=DB::table('products')->where("type","Bathroom sector")->get();
        $alldata = array();
        $count =0;
        
        $data=$data['data']->toArray();
        $data = json_decode(json_encode($data),true);
        foreach($data as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $images=$images['data']->toArray();
            $images = json_decode(json_encode($images),true);
            $alldata[$count][0]=$data;
            $alldata[$count][1]=$images;
            $count++;

        }
       
           
        return view('Bathroomsector',compact($alldata));
    
    }
    
    
}
