<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitFormRequest extends FormRequest
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
        //dd($this);
        return [
            "designation" => "required|min:3|max:50|unique:produits,designation," .$this->produit,
            "prix" => "required|numeric|between:500,1000000",
            "description" => "required|max:200",
            "category_id" => "required|numeric"
        ];
    }
}
