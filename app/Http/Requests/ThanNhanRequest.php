<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ThanNhanRequest extends FormRequest
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
            'Ma_Nvien' => 'string | max:255',
            'TenTN' => 'string | max: 255',
            'Phai' => ['required' ,Rule::in(['Nam', 'Nữ'])],
            'NgSinh' => 'required | date',
            'QuanHe' => 'required | string | max: 255'
        ];
    }
    public function messages()
    {
        return [
            'Ma_Nvien.string' => 'Ma_Nvien phải là chuỗi ký tự',

            'TenTN.string' => 'TenTN phải là chuỗi ký tự',

            'Phai.required' => 'Phai là bắt buộc',
            'Phai.in' => 'Phai phải là Nam hoặc Nữ',

            'NgSinh.required' => 'NgSinh là bắt buộc',
            'NgSinh.date' => 'NgSinh phải là năm tháng ngày',

            'QuanHe.required' => 'QuanHe là bắt buộc',
            'QuanHe.string' => 'QuanHe phải là chuỗi ký tự'

        ];
    }
}
