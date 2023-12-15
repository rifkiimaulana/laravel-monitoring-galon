<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DispenserRequest extends FormRequest
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
            'dis_mikrocontrollerId'=>['required','max:100'],
            'dis_access'=>['required','numeric'],
            'dis_lantai'=>['required'],
            'dis_lokasi'=>['required'],
        ];
    }
}
