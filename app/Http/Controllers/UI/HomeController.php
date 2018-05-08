<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UI\Register;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;

class HomeController extends Controller
{
    public function show_register(){
        return view('frontend/contents/register');
    }
    
    public function add_register(Request $request){
        $register = new Register();
        $register->first_name = $request->first_name;
        $register->last_name = $request->last_name;
        $register->email_id = $request->email_id;
        $register->password = $request->password;
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
    
}
