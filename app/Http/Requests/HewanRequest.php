<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HewanRequest extends FormRequest
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
            'ras_id' => 'required',
            'bobot'=> 'required|numeric',
            'umur'=> 'required|numeric',
            'jenis_kelamin'=> 'required',
            'harga'=> 'required|numeric',
        ];
    }
}
