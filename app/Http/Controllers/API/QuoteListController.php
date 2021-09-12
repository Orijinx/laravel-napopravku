<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Models\quote;
use App\Http\Controllers\API\BaseAPIController;

class QuoteListController extends BaseAPIController
{
    //Лист цитат
    public function QuoteList(){
        $quotes = quote::with('Tags')->paginate(5); //Получение коллекции с  нетерпеливой загрузкой тегов и пагинацией по пять элементов.
        return $this->Success($quotes,'Лист цитат'); //Возвращение удачного результата
    }
}
