<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackendAboutRequest extends FormRequest
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
            'title' => 'required',
            'S_text' => 'required',
            'text' => 'required'
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'title.required' => 'გთხოვთ შეავსოთ სათაურის ველი',
        'S_text.required' => 'გთხოვთ შეავსოთ მოკლე ტექსტის ველი',
        'text.required' => 'გთხოვთ შეავსოთ ტექსტის ველი'
    ];
}
}
