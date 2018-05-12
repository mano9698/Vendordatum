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
use DB;

class ProfileController extends Controller {

    public function profile() {
        $id = Session::get('email');
        $get_user = Register::find($id);
//        return $get_user;
        return view('frontend.contents.profile')->with('get_user', $get_user);
    }

    public function change_password() {
        $id = Session::get('email');
        $get_user = Register::find($id);
        return view('frontend.contents.change_password')->with('get_user', $get_user);
    }

    public function update_profile($id, Request $request) {
        $profile = new Register();
//        $id = Session::get('email');

        $profile_data = Register::findOrFail($id);
//                return $profile_data;
        $profile_data->first_name = $request->first_name;
        $profile_data->last_name = $request->last_name;
        $profile_data->email_id = $request->email_id;
        $profile_data->desgination = $request->desgination;
        $profile_data->mobile = $request->mobile;
        $profile_data->alter_mobile = $request->alter_mobile;
        $profile_data->cmpny_name = $request->company_name;
        $profile_data->cmpny_location = $request->company_location;
        $profile_data->products = $request->products;
        $profile_data->industry = $request->industry;
        
//        return $request->all();
        $update_data = $profile_data->save();
//        return $profile_data;

        if ($update_data) {
            return response()->json(array(
                        "error" => FALSE,
                        "message" => "Update Successfully"
            ));
        } else {
            return response()->json(array(
                        "error" => TRUE,
                        "message" => "Update Failed"
            ));
        }

    }

    public function update_password(Request $request,$id) {
//        $id = Session::get('email');
        try {
            $profile_data = Register::find($id);
            
            $profile_data->password = $request->password;
//            return $request->password;
            $update_data = $profile_data->save();
            if ($update_data) {
                return response()->json(array(
                            "error" => FALSE,
                            "message" => "Update Successfully",
                    "value" => $request->all()
                ));
            } else {
                return response()->json(array(
                            "error" => TRUE,
                            "message" => "Update Failed",
                            "value" => $request->all()
                ));
            }
        } catch (Exception $ex) {
            return $request->message();
        }
    }

    public function my_ads() {
        try{
            $id = Session::get('email');
//        $get_products = Products::find('user_id', $id);
        $get_products = Products::where('user_id', $id)->get();
//        return $get_products;
        return view('frontend.contents.my_ads')->with('get_products', $get_products);
        } catch (Exception $ex) {
            return $request->message();
        }
        
    }

}
