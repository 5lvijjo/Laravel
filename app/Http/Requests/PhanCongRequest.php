<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhanCongRequest extends FormRequest
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
            'Ma_NVien' => 'string | max: 255',
            'MaDA' => 'integer',
            'STT' => 'integer',
            'ThoiGian' => 'required | numeric'
        ];
    }
    public function messages()
    {
        return [
            'Ma_NVien.string' => 'Ma_NVien phải là chuỗi ký tự',

            'MaDA.integer' => 'MaDA phải là một số',

            'STT.integer' => 'STT phải là một số',

            'ThoiGian.required' => 'ThoiGian là bắt buộc',
            'ThoiGian.numeric' => 'ThoiGian phải là số',
        ];
    }
}
