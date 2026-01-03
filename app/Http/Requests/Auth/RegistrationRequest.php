<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //from false to true added by gm
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //added by gm
        return [
            'name' => 'required|string|max:255|min:3|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];
    }
    //added by gm
    protected function failedValidation(Validator $validator)
    {
         throw new HttpResponseException(response()->json([
            'status' => 'Error',
            'message'=>'Validation error',
            'data'=>[],
            'error'=>$validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY));
    }

}
