<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'detail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'ကျေးဇူးပြု၍ ခေါင်းစဉ်ထည့်ပါ။',
            'detail.required' => 'ကျေးဇူးပြု၍ စာသားထည့်ပါ။'
        ];
    }
}
