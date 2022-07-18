<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class EditUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'max:255',
            'description' => 'text',
            'login' => 'min:4|max:16|unique:users,login,'.auth()->user()->login,
            'password' => 'string|min:8|max:191',
            'avatar' => 'file'
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.max' => Lang::get('Максимальная длина поля Имя - 255 символов'),
            'login.min' => Lang::get('Минимальная длина поля Логин - 4 символа'),
            'login.max' => Lang::get('Максимальная длина поля Логин - 16 символов'),
            'login.unique' => Lang::get('Такой логин уже существует'),
            'password.min' => Lang::get('Минимальная длина поля Пароль - 8 символов'),
        ];
    }
}
