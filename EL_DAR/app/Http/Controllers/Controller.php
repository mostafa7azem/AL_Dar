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
use Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  
    function getBathroomsector(){
        $data['data']=DB::table('products')->whereIn("type",["Bathroom sector","قطع حمام"])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('Bathroomsector',$data);
    
    }
    function getbuiltindevices(){
        $data['data']=DB::table('products')->whereIn("type",["builtindevices","اجهزة built in"])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('builtindevices',$data);
    
    }
    
    function getdoorsandwindows(){
        $data['data']=DB::table('products')->whereIn("type",["doorswindows Alumital","doorswindows PVC","ابواب و شبابيك PVC","ابواب و شبابيك الوميتال"])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('doorandwindows',$data);
    
    }
    function getdressingrooms(){
        $data['data']=DB::table('products')->whereIn("type",['dressingroom','غرفة ملابس'])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('dressingrooms',$data);
    
    }
    function getkitchenhoods(){
        $data['data']=DB::table('products')->whereIn("type",[ 'kitchenhood','شفاطات'])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('kitchenhoods',$data);
    
    }
    function getmoderntables(){
        $data['data']=DB::table('products')->whereIn("type",[ 'moderntables','تربيزات مودرن'])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('moderntables',$data);
    
    }
    function gettnd(){
        $data['data']=DB::table('products')->whereIn("type",[   'tanda','تند'])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('tnd',$data);
    
    }
    function getlibraries(){
        $data['data']=DB::table('products')->whereIn("type",[ 'liberary','مكتبات'])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('libarary',$data);
    
    }
    function getkitchen(){
        $data['data']=DB::table('products')->whereIn("type",['khachmonium','خاشمنيوم',
        'Acleric','اكلاريك',
        'LAMIGLOSS','لامي جلوس',
        'highgloss','هاي جلوس',
        'powergloss','باور جلوس',
        'polylac','بولي لاك',
        'kitchen Alumital','مطبخ الوميتال',
        'kitchen PVC','مطبخ PVC',
        'HPL','HPL','-----'])->get();
        $alldata = $data;    
        $date=$data['data']->toArray();
        $date = json_decode(json_encode($date),true);
        
        foreach($date as $one){
            $images['data']=DB::table('products_photos')->where("product_id",$one['id'])->get();
            $data['data']->push($images['data']);
        }
        
           
        return view('kitchen',$data);
    
    }
    
    
    function delete(Request $req){
        $id = $req->input('lolo');
        $data['data']=DB::table('products_photos')->where("product_id",$id)->delete();
        $data['data']=DB::table('products')->where("id",$id)->delete();
        return Redirect::back();

    }
    
    
}
