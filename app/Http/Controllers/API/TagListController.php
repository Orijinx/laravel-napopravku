<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseAPIController;
use App\Models\tag;

class TagListController extends BaseAPIController
{
    //
    public function TagList(){
        $tags = tag::all();//Получение всего списка тэгов
        return $this->Success($tags,"Список всех Тэгов");
    }
}
