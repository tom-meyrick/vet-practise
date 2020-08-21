<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class OwnerStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()['role'] === 'owner';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => ["required", "string", "max:100"],
            "last_name" => ["required", "string", "max:100"],
            "email" => ["required", "string", "max:200"],
            "address_1" => ["required", "string", "max:200"],
            "address_2" => ["required", "string", "max:200"], 
            "town" => ["required", "string", "max:200"], 
            "postcode" => ["required", "string", "max:50"],
            "telephone" => ["required", "string", "max:20"]
        ];
    }
}
