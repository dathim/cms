<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagesRequest extends FormRequest
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
            'name' => 'min:2|max:50',
            'path' => 'min:2|max:50'
        ];
    }

    
    public function messages(){
        return[
            'name.required' => 'Поле имя является обязательным',
            'name.min' => 'Поле имя слишком короткое',
            'name.max' => 'Поле имя слишком длинное',
            'path.required' => 'Поле path является обязательным',
            'path.min' => 'Поле path слишком короткое',
            'path.max' => 'Поле path слишком длинное'
        ];
    }

}
