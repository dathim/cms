<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'email' => 'required|min:2|max:50',
            'password1' => 'required|min:2|max:50',
            'password2' => 'required|min:2|max:50'
        ];
    }

    
    public function messages(){
        return[
            'name.required' => 'Поле имя является обязательным',
            'name.min' => 'Поле имя слишком короткое',
            'name.max' => 'Поле имя слишком длинное'
        ];
    }

}
