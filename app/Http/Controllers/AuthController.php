<?php

namespace App\Http\Controllers;

use App\Helpers\RequestBody;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    private UserController $userController;

    public function __construct(UserController $userController){
        $this->userController = $userController;
    }

    public function login(Request $request){
        $request->validate([
            'email' => [
                'required',
                'string',
                'email'
            ],
            'password' => [
                'required', 
                'string' #test
            ]
        ]);
        
        $user = Users::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'message' => 'The email or password are incorrect.'
            ]);
        }

        return $user->createToken("User success login!");
    }

    public function register(Request $request){
        RequestBody::loginRequest($request);

        $this->userController->create($request);

        return response()->json([
            'status'=>200,
            'message'=>'Your account has been created.'
        ]);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status'=>200,
            'message'=>'Token has been deleted, success logout!'
        ],200);
    }

    public function getSessionUser(){
        $userLog = Auth::user();

        return response()->json([
            'data' => $userLog
        ]);
    }
}
