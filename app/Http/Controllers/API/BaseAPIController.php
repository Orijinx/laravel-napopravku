<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class BaseAPIController extends Controller
{
    //
    public function Success($data,string $msg){
        $response = [
            'status'=>true,
            'data'=>$data,
            'msg'=>$msg
        ];
        return response()->json($response);
    }
    //
    public function Error($error,string $msg){
        $response = [
            'status'=>false,
            'errors'=>[$error],
            'msg'=>$msg
        ];
        return response()->json($response);
    }
}
