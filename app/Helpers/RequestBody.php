<?php

namespace App\Helpers;

use Illuminate\Http\Request;
class RequestBody {
    public static function loginRequest(Request $request){
        return $request->validate([
            'email' => [
                'required',
                'string',
                'email'
            ],
            'password' => [
                'required',
                'string'
            ]
        ]);
    }
}