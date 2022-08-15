<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'file' => 'required|image:jpg, jpeg, png',
        ];
    }
    public function messages()
    {
        return[
        'name.required' => 'Поле name является обязательным',
        'email.required' => 'Поле email является обязательным',
        'password.required' => 'Поле password является обязательным',
        'file.required' => 'Поле file является обязательным',
        'file.image' => 'Тип файла должен быть image',
        'password.min:8' => 'Поле password должно быть не менее 8 символов',
        ];
    }
}
