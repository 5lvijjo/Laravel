<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CongViecRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'MaDA' => 'integer',
            'STT' => 'integer',
            'Ten_Cong_Viec' => 'required | string | max: 255 '
        ];
    }
    public function messages()
    {
        return [
            'MaDA.integer' => 'MaDA phải là một số',

            'STT.integer' => 'STT phải là một số',

            'Ten_Cong_Viec.required' => 'Ten_Cong_Viec là bắt buộc',
            'Ten_Cong_Viec.string' => 'Ten_Cong_Viec phải một chuỗi ký tự'


        ];
    }
}
