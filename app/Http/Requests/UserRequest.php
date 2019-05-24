<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
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
            'name'=> 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,'.Auth::id(),
            'email'=>'required|email',
            'introduction'=>'max:80',
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=288,min_height=208',
        ];
    }

    public function messages(){
        return [
            'avatar.mimes'=>'头像必须是jpeg,bmp,png,gif 格式的图片',
            'avatar.dimensions'=>'图片的清晰度不够，宽和高需要208px+',
            'name.unique'=>'用户名已经被占用，请换一个',
            'name.regex'=>'用户名支支持英文数字下划线横杠',
            'name.between'=>'用户名必须介于3-25个字符之间',
            'name.required'=>'用户名必须写'
        ];
    }
}
