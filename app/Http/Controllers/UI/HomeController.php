<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UI\Register;
use App\Model\UI\Products;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;
use Auth;
use Session;

class HomeController extends Controller
{
    public function index(){
        return view('frontend/contents/home');
    }
    
    public function show_register(){
        return view('frontend/contents/register');
    }
    
    public function add_register(Request $request){
        $register = new Register();
        $register->first_name = $request->first_name;
        $register->last_name = $request->last_name;
        $register->email_id = $request->email_id;
        $register->password = bcrypt($request->password);
        $register->desgination = $request->desgination;
        $register->mobile = $request->mobile;
        $register->alter_mobile = $request->alter_mobile;
        $register->cmpny_name = $request->company_name;
        $register->cmpny_location = $request->company_location;
        $register->products = $request->products;
        $register->industry = $request->industry;
        $register->business_name = $request->business_name;
        $register->job_title = $request->job_title;
        $register->contact_number = $request->contact_number;
        $register->cmpny_business_name = $request->cmpny_business_name;
        if($request->hasFile('file_img')){
            $image = $request->file('file_img');
            $path = public_path(). '/images';
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);
            $register->file = $request->image = $filename;
        }
//        $register->file = $request->file('file_img')->store('file_img');
        
        $insert_user = $register->save();
        if($insert_user){
            return response()->json(array(
                "error"=>FALSE,
                "message"=> "inserted successfully"
            ));
        }else{
            return response()->json(array(
                "error"=>TRUE,
                "message"=> "not inserted"
            ));
        }
        
    }
    
    public function login(Request $request){
        $email = $request->supplier_name;
        $password = $request->supplier_password;
        $user_id = Auth::user()->id;
        if(Auth::attempt(['email_id' => $email, 'password' => $password])){
        Session::put('email', $user_id); 
            $items = Session::get('email');
            return response()->json(array(
                    "error"=>FALSE,
                    "message" => "Success",
                    "sess" =>$items
            ));
            
        }else{
            return response()->json(array(
                    "error"=>TRUE,
                    "message" => "Failed"
            ));
        }
    }
    
    public function ajax_product(Request $request){
        $query = $request->get('query','');
        $products = Products::where('product_name','LIKE','%'.$query.'%')->get();
        return response()->json($products);
    }
    
   
    
    
}
