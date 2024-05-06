<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'unique:users,username', 'max:255'],
            'email' => ['required', 'unique:users,email', 'email', 'max:255'],
            'password' => ['required_with:password|same:password'],
        ]);
        if($validator->fails()){
            return [
            'success' => false,
            'error' => $validator->getMessageBag()->toArray()
            ];
        }else{


        $new_register = new User;
        $new_register->first_name = $request->firstname;
        $new_register->middle_name = $request->middlename;
        $new_register->last_name = $request->lastname;
        $new_register->contact_number = $request->contactnumber;
        $new_register->birthdate = $request->birthdate;
        $new_register->address = $request->address;
        $new_register->gender = $request->gender;
        $new_register->civil_status = $request->civil_status;
        $new_register->citizenship = $request->citizenship;
        $new_register->username = $request->username;
        $new_register->email = $request->email;
        $new_register->password = Hash::make($request->password);
       
        // dd($new_register);


        $res = $new_register->save();

            // event(new Registered($new_register));
            // Auth::login($new_register);
            return ['success' => true];


        // return $res;

        }
        
    }
}
