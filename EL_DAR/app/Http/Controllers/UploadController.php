<?php

namespace App\Http\Controllers;
 
use App\Http\Requests\UploadRequest;
use App\product;
use App\ProductsPhoto;


 
 
class UploadController extends Controller
{
 
    public function uploadForm()
    {
        return view('upload_form');
    }
 
    public function uploadSubmit(UploadRequest $request)
    {
        $product = Product::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('public/images');
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';
    }
 
}