<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:100'],
            'price' => ['required','integer', 'min:0'],
            'category_id' => ['required','integer', 'min:1', 'exists:categories,id'],
            'status_id' => ['required','integer', 'min:1', 'exists:statuses,id'],
            'slug' => ['required', 'string', 'min:3', 'max:100'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Privalomas produkto pavadinimas',
            'name.string' => 'Pavadinima turi sudaryti lotyniški simboliai',
            'name.min' => 'Minimalus pavadinimo ilgis privalo būti :min simboliai',
            'name.max' => 'Maximalus pavadinimo ilgis privalo būti :max simboliai',
            'price.required' => 'Privaloma produkto kaina',
            'price.integer' => 'Produkto kaina turi buti skaicius',
            'price.min' => 'Produkto kaina turi buti teigiama',
            'category_id.require' => 'Privaloma produkto kategorija',
            'category_id.integer' => 'Produkto kategorijos id turi buti sveikasis skaicius',
            'category_id.min' => 'Produkto kategorijos id negali buti mazesnis nei 1',
            'category_id.exists' => 'Kategorija su tokiu id turi egzistuoti',
            'status_id.require' => 'Privalomas produkto statusas',
            'status_id.integer' => 'Produkto statuso id turi buti sveikasis skaicius',
            'status_id.min' => 'Produkto statuso id negali buti mazesnis nei 1',
            'status_id.exists' => 'Statusas su tokiu id turi egzistuoti',
            'slug.required' => 'Privalomas produkto slug',
            'slug.string' => 'Slug turi sudaryti lotyniski simboliai',
            'slug.min' => 'Slug minimalus ilgis turi buti :min simboliai',
            'slug.max' => 'Slug maximalus ilgis turi buti :max simboliai',
            'description.string' => 'Aprasyma turi sudaryti lotyniski simboliai',
            'description.min' => 'Aprasymo minimalus ilgis turi buti :min simboliai',
            'color.in_array' => 'Spalva turi buti Red, Gree, Blue, Black, White',
            'size.in_array' => 'Dydis turi buti XS, S, M, L, XL'
        ];
    }
}
