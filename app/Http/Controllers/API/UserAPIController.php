<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;

use Response;

class UserAPIController extends AppBaseController
{
    public function login(Request $request){
        
        if(Auth::attempt(['email' => request('email'), 'password' => (request('password'))])){
            
           $user = Auth::user();
           
           if($user !== null) {

                //$success['token'] = $user->createToken(time())->accessToken;

                return response()->json(['user' => $user, 'success' => 'true'], 200);
            }
            return response()->json(['error'=>'Unable to find user'], 401);
        }
        else{
            return response()->json(['error'=>'Username or password is incorrect, please try again','password'=>Hash::make(request('password'))], 401);
        }
    }
    
}
