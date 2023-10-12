<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NhanVienRequest extends FormRequest
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
            // 'MaNV'=>'required | string | max:255',
            'HoNV'=> 'required | string | max:255',
            'TenLot'=> 'required | string | max:255',
            'TenNV'=>'required | string | max:255',
            'MaNV' => 'string | max: 255',
            'NgSinh' => 'required | date',
            'DChi' => 'required | string | max:255',
            'Phai' => ['required ', Rule::in(['Nam', 'Nữ'])],
            'Luong' => 'required | numeric',
            'Ma_NQL' => 'nullable | string | max:255',
            'PHG' => 'required | integer ',

        ];
    }
    public function messages()
    {
        return [
            'HoNV.required'=> 'HoNV là bắt buộc',
            'HoNV.string'=> 'HoNV phải là một chuỗi ký tự',

            'TenLot.required'=> 'TenLot là bắt buộc',
            'TenLot.string'=> 'TenLot phải là một chuỗi ký tự',

            'TenNV.required'=> 'TenNV là bắt buộc',
            'TenNV.string'=> 'TenNV phải là một chuỗi ký tự',

            'NgSinh.required'=> 'NgSinh là bắt buộc',
            'NgSinh.date'=> 'NgSinh phải là năm tháng ngày ',

            'DChi.required'=> 'DChi là bắt buộc',
            'DChi.string'=> 'DChi phải là một chuỗi ký tự',

            'Phai.required'=> 'Phai là bắt buộc',
            'Phai.in'=> 'Phai phải là Nam hoặc Nữ',

            'Luong.required'=> 'Luong là bắt buộc',
            'Luong.numeric'=> 'Luong phải là một số',

            'Ma_NQL.required'=> 'Ma_NQL là bắt buộc',
            'Ma_NQL.string'=> 'Ma_NQL phải là một chuỗi ký tự',

            'PHG.required'=> 'PHG là bắt buộc',
            'PHG.integer'=> 'PHG phải là một số nguyên',

        ];
    }
}
