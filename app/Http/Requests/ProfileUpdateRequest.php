<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 13/11/17
 * Time: 16:17
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'language_id' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ];
    }


}