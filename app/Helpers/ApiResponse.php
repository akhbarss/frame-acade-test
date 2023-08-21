<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ApiResponse{
    public static function successResponse($data){
        return self::generateResponse($data, JsonResponse::HTTP_OK, 'SUCCESS');
    }

    public static function failedResponse($data){
        return self::generateResponse($data, JsonResponse::HTTP_BAD_REQUEST, 'FAILED');
    }

    public static function generateResponse($data,$status,$message){
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ],$status);
    }
}