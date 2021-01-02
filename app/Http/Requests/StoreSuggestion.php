<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuggestion extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'email' =>'required',
            'requestt' => 'required|min:8'
        ];
    }

    public function attribute()
    {
        return [
          
        ];
    }

    public function message()
    {
        return [
        //   'requestt.required' => 'blblblblalbalbla'
        ];
    }
}
