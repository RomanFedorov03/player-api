<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class RegisterRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'login' => 'required|max:16|unique:users,login',
            'password' => 'required|min:8|max:191',
            'avatar' => 'file'
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => Lang::get('Поле Имя обязательное'),
            'login.required' => Lang::get('Поле Логин обязательное'),
            'login.unique' => Lang::get('Такой логин уже существует'),
            'password.required' => Lang::get('Поле пароль обязательное'),
        ];
    }
}
