<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeAnRequest extends FormRequest
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
            'TenDA' => 'required | string | max: 255',
            'MaDA' => 'integer',
            'DDiem_DA' => 'required | string | max: 255',
            'Phong' => 'required | integer',

        ];
    }
    public function messages()
    {
        return [
            'TenDA.required' => 'TenDA là bắt buộc',
            'TenDA.string' => 'TenDA phải là chuỗi ký tự',

            'MaDA.integer' => 'MaDA phải là một số ',

            'DDiem_DA.required' => 'DDiem_DA là bắt buộc',
            'DDiem_DA.string' => 'DDiem_DA phải là chuỗi ký tự',

            'Phong.required' => 'Phong là bắt buộc',
            'Phong.integer' => 'Phong phải là một số ',
        ];
    }
}
