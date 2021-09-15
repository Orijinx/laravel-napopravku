<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseAPIController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\quote;

class PostQuoteController extends BaseAPIController
{
    //Добавление записи цитаты в БД.
    public function PostQuote(Request $request)
    {
        //Объявление валидатора и определение Rules для валидации реквеста.
        $validator = Validator::make(
            $request->all(),
            [
                'text' => ['required'], //Обязательное поле
                'author' => ['required', 'max:255'], //Обязательное поле, максимальная длина:255
                'tags' => ['required','max:255', 'array', 'exists:App\Models\tag,id']//Обязательное поле, максимальная длина:255, массив, и запись должна существовать в таблице Tags
            ]
        );
        //Проверка ошибок валидации
        if ($validator->fails()) {
            return $this->Error($validator->errors(), 'Ошибка валидации');
        }
        //Создание новой записи цитаты
        $quote = new quote();
        $quote->text = $request->text;
        $quote->author = $request->author;
        $quote->save();

        //Прикрепление тэгов к цитате
        $quote->Tags()->attach($request->tags);

        // return $this->Success($quote, 'Цитата успешно добавлена!');
        return redirect()->route('list');
    }
}
