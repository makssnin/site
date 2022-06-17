<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequset extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'company' => 'required|max:50',
            'topic' => 'required|min:4|max:50',
            'message' => 'required|min:10|max:150'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Поле имя обязательно для заполнения',
            'email.required' => 'Поле email обязательно для заполнения'
        ];
    }


}
