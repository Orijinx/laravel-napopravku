<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseAPIController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\quote;

class PostQuoteController extends BaseAPIController
{
    //
    public function PostQuote(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'text' => ['required'],
                'author' => ['required', 'max:255'],
                'tags' => ['array']
            ]
        );
        if ($validator->fails()) {
            return $this->Error($validator->errors(), 'Validation error');

        }
        $quote = new quote();
        $quote->text = $request->text;
        $quote->author = $request->author;
        $quote->save();

        if(isset($request->tags)){
            $quote->Tags()->attach($request->tags);
        }
        
        return $this->Success($quote, 'Good');
    }
}
