<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Signup;


class SignupController extends Controller
{
    //
    public function index()
    {
        return view('Signup\singup');
    }

    public function Save(Request $request)
    {
        $id = 'DCP'.date("Y").mt_rand(100,999);
        $validate = $request->input();
        $validate_rule = ['First_Name'=>'required','Last_Name'=>'required', 'Email'=>['required','email','unique:user_account'], 'Phone_No'=>['required', 'min:10', 'unique:user_account'], 'Password'=>'required | min:6'];
        $validation = Validator::make($request->input(), $validate_rule);
        if($validation->fails())
        {
            return redirect('signup')->withInput()->withErrors($validation);
            
        }
        else
        {   $name = $request->First_Name . $request->Last_Name;
            $id = "DC".date("Y").$request->First_Name.mt_rand(100, 999);
            $save_user = new Signup;
            $save_user->Id = $id;
            $save_user->User_Name = $name;
            $save_user->Email = $request->Email;
            $save_user->Phone_No = $request->Phone_No;
            $save_user->Password = md5($request->Password);
            $save_user->save();
            return redirect('login')->with('SuccessMsg', "User Created 
            Successfuly!! Login Id ::  ". $id);
        }
    }
}