<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public static function rules()
    {
        return [
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'kontak'=> 'required|numeric|min:8',
            'message' => 'required|string|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Harap isi nama antum',
            'email.required' => 'Harap isi alamat email antum',
            'kontak.required' => 'Harap isi nomer antum',
            'message.required' => 'Isi pesan antum apapun itu'
        ];
    }
}
