<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UI\Products;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;
use Auth;
use Session;

class AdsController extends Controller
{
    public function show_post(){
        return view('frontend/contents/post_ads');
    }
    
    public function add_post(Request $request){
        $post = new Products();
        $post->title = $request->title;
        $post->product_name = $request->product_name;
        $post->product_id = $request->product_id;
        $post->description = $request->description;
        $post->availability = $request->availability;
        $post->price = $request->price;
        if($request->hasFile('file_img')){
            $image = $request->file('file_img');
            $path = public_path(). '/images';
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);
            $post->product_pic = $request->product_pic = $filename;
        }
        
        if($request->hasFile('product_doc')){
            $doc = $request->file('product_doc');
            $path_doc = public_path(). '/product_documents';
            $filename_doc = time(). '.' . $doc->getClientOriginalExtension();
            $doc->move($path_doc, $filename_doc);
            $post->product_doc = $request->product_doc = $filename_doc;
        }
        $add_posts = $post->save();
        if($add_posts){
            return response()->json(array(
                    "error" => FALSE,
                    "message" => "Post Successfully"
            ));
        }else{
             return response()->json(array(
                    "error" => TRUE,
                    "message" => "Post Failed"
            ));
        }
    }
}
