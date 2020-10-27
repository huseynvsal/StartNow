<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Add_main_table extends FormRequest
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
            'place_name' => 'required|max:30|min:5|string',
            'coach_name_surname' => 'required|max:55|min:12|string',
            'location' => 'required|max:200|min:10|string',
            'main_picture' => 'max:20000|min:4',
            'category' => 'required|max:120|min:3|string',
            'information' => 'required|max:1500|min:20|string',
            'price' => 'required|max:10000|min:1|integer',
            'discount_rate' => 'required|max:100|min:0|integer',
            'number' => 'required|max:13|min:13',
            'city' => 'required|max:25|min:4|string',
            'website' => 'max:250',
            'facebook' => 'max:250',
            'instagram' => 'max:250',
            'prices_info' => 'required|max:1500|min:20|string',
            'location_link' => 'required|max:1500|min:5|string'
        ];
    }

    public function messages()
    {
        return [
            'place_name.required' => 'Müəssisənin adı daxil olunmayıb',
            'place_name.max' => 'Müəssisənin adı maksimum 30 elementdən ibarət ola bilər',
            'place_name.min' => 'Müəssisənin adı minimum 5 elementdən ibarət ola bilər',
            'place_name.string' => 'Müəssisənin adı yalnız elementlərdən ibarət olamalıdır',

            'coach_name_surname.required' => 'Məşqçinin adı və soyadı daxil olunmayıb',
            'coach_name_surname.max' => 'Məşqçinin adı və soyadı maksimum 55 elementdən ibarət ola bilər',
            'coach_name_surname.min' => 'Məşqçinin adı və soyadı minimum 12 elementdən ibarət ola bilər',
            'coach_name_surname.string' => 'Məşqçinin adı və soyadı yalnız elementlərdən ibarət olamalıdır',

            'location.required' => 'Məkan daxil olunmayıb',
            'location.max' => 'Məkan maksimum 200 elementdən ibarət ola bilər',
            'location.min' => 'Məkan minimum 10 elementdən ibarət ola bilər',
            'location.string' => 'Məkan yalnız elementlərdən ibarət olamalıdır',

            'main_picture.required' => 'Şəkil daxil olunmayıb',
            'main_picture.max' => 'Şəklin adı maksimum 2000 elementdən ibarət ola bilər',
            'main_picture.min' => 'Şəklin adı minimum 4 elementdən ibarət ola bilər',

            'category.required' => 'Kateqoriya daxil olunmayıb',
            'category.max' => 'Kateqoriya maksimum 120 elementdən ibarət ola bilər',
            'category.min' => 'Kateqoriya minimum 3 elementdən ibarət ola bilər',
            'category.string' => 'Kateqoriya yalnız elementlərdən ibarət olamalıdır',

            'information.required' => 'Məlumat daxil olunmayıb',
            'information.max' => 'Məlumat maksimum 1500 elementdən ibarət ola bilər',
            'information.min' => 'Məlumat minimum 20 elementdən ibarət ola bilər',
            'information.string' => 'Məlumat yalnız elementlərdən ibarət olamalıdır',

            'price.required' => 'Qiymət daxil olunmayıb',
            'price.max' => 'Qiymət maksimum 10000 ola bilər',
            'price.min' => 'Qiymət minimum 1 ola bilər',
            'price.integer' => 'Qiymət yalnız rəqəmlərdən ibarət olamalıdır',

            'discount_rate.required' => 'Endirim faizi daxil olunmayıb',
            'discount_rate.max' => 'Endirim faizi maksimum 100 ola bilər',
            'discount_rate.min' => 'Endirim faizi minimum 0 ola bilər',
            'discount_rate.integer' => 'Endirim faizi yalnız rəqəmlərdən ibarət olamalıdır',

            'number.required' => 'Nömrə daxil olunmayıb',
            'number.max' => 'Nömrə maksimum 13 elementdən ibarət ola bilər',
            'number.min' => 'Nömrə minimum 13 elementdən ibarət ola bilər',

            'city.required' => 'Şəhərin adı daxil olunmayıb',
            'city.max' => 'Şəhərin adı maksimum 25 elementdən ibarət ola bilər',
            'city.min' => 'Şəhərin adı minimum 4 elementdən ibarət ola bilər',
            'city.string' => 'Şəhərin adı yalnız elementlərdən ibarət olamalıdır',

            'website.max' => 'Sayt linki maksimum 250 elementdən ibarət ola bilər',

            'facebook.max' => 'Facebook linki maksimum 250 elementdən ibarət ola bilər',

            'instagram.max' => 'Instagram linki maksimum 250 elementdən ibarət ola bilər',

            'prices_info.required' => 'Qiymətlər haqqında məlumat daxil olunmayıb',
            'prices_info.max' => 'Qiymətlər haqqında məlumat maksimum 1500 elementdən ibarət ola bilər',
            'prices_info.min' => 'Qiymətlər haqqında məlumat minimum 20 elementdən ibarət ola bilər',
            'prices_info.string' => 'Qiymətlər haqqında məlumat yalnız elementlərdən ibarət olamalıdır',

            'location_link.required' => 'Məkan linki daxil olunmayıb',
            'location_link.max' => 'Məkan linki maksimum 1500 elementdən ibarət ola bilər',
            'location_link.min' => 'Məkan linki minimum 20 elementdən ibarət ola bilər',
            'location_link.string' => 'Məkan linki yalnız elementlərdən ibarət olamalıdır'
        ];
    }
}
