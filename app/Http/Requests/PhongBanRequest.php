<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhongBanRequest extends FormRequest
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
            'TenPHG' => 'required | string | max: 255',
            'MaPHG' => 'integer ',
            'TrPHG' => 'nullable | string | max: 255',
            'Ng_NhanChuc' => 'nullable | date'
        ];
    }
    public function messages()
    {
        return [
            'TenPHG.required' => 'TenPHG là bắt buộc',
            'TenPHG.string' => 'TenPHG phải là chuỗi ký tự',

            'MaPHG.integer' => 'TrPHG phải là một số',

            'TrPHG.string' => 'TrPHG phải là chuỗi ký tự',

            'Ng_NhanChuc.date' => 'Ng_NhanChuc phải là năm tháng ngày'
        ];
    }
}
