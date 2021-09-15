<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

// Базовый роутер для создание единого паттерна ответа от сервера
class BaseAPIController extends Controller
{
    //Удачно
    public function Success($data,string $msg){
        $response = [
            'status'=>true,
            'data'=>$data,
            'msg'=>$msg
        ];
        return response()->json($response);
    }
    //С ошибками
    public function Error($error,string $msg){
        $response = [
            'status'=>false,
            'errors'=>[$error],
            'msg'=>$msg
        ];
        return response()->json($response);
    }
}
