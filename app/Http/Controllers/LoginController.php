<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Degrees;

class LoginController extends Controller
{
    public function login(Request $request){
    $request->validate([
        'username'=>'required',
        'password' => 'required'
    ]);

    $loginInfo = User::where('username', '=', $request->username)->first();


        // dd ($loginInfo);

    // return $count == 1;
    
    if (!$loginInfo) {
        return 'wrong username';
       
    }else{
        if (Hash::check($request->password, $loginInfo->password)){
                Auth::login($loginInfo);

                if(Auth::check()){
                    return 1;
                }else{
                    return 'cannot login, try again';
                }



            // $request->auth()->put('LoggedUser',  $loginInfo->id);
            // return redirect('/About');
        }else{
            return 'wrong password';
        }
    }


}

        public function loginData()
        {
            return Auth::check();
        }


        public function getUser()
        {
            return Auth::user();
        }




        public function getDegrees()
        {

           return Degrees::where([
                    ['college_id', 1],
                    ['active', 1]
                ])->get();



            // return Degrees::all();

            
        }


        public function logout()
        {
            Auth::logout();

            return $this->loginData();
        }

    
    
        

    // function login(){
        
    // }

    // function check(Request $request){
    //     return $request->input();
    // }
}
