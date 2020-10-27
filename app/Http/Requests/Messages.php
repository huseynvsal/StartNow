<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Messages extends FormRequest
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
            'name' => 'required|max:20|min:3|string',
            'surname' => 'required|max:35|min:5|string',
            'email' => 'required|max:200|min:7|email',
            'message' => 'required|max:1500|min:20|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Zəhmət olmasa adınızı daxil edin',
            'name.max' => 'Adınız maksimum 20 elementdən ibarət ola bilər',
            'name.min' => 'Adınız minimum 3 elementdən ibarət ola bilər',
            'name.string' => 'Adınız yalnız elementlərdən ibarət olamalıdır',

            'surname.required' => 'Zəhmət olmasa soyadınızı daxil edin',
            'surname.max' => 'Soyadınız maksimum 35 elementdən ibarət ola bilər',
            'surname.min' => 'Soyadınız minimum 5 elementdən ibarət ola bilər',
            'surname.string' => 'Soyadınız yalnız elementlərdən ibarət olamalıdır',

            'email.required' => 'Email daxil olunmayıb',
            'email.max' => 'Email maksimum 200 elementdən ibarət ola bilər',
            'email.min' => 'Email minimum 7 elementdən ibarət ola bilər',
            'email.email' => 'Email düzgün formatda daxil olunmalıdır',

            'message.required' => 'Mesaj daxil olunmayıb',
            'message.max' => 'Mesaj maksimum 1500 elementdən ibarət ola bilər',
            'message.min' => 'Mesaj minimum 20 elementdən ibarət ola bilər',
            'message.string' => 'Mesaj yalnız elementlərdən ibarət olamalıdır',
        ];
    }
}
