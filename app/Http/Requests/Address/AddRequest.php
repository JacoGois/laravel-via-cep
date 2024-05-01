<?php

namespace App\Http\Requests\Address;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "cep" => "required|string",
            "logradouro" => "required|string",
            "numero" => "required|string",
            "bairro" => "required|string",
            "cidade" => "required|string",
            "estado" => "required|string",
        ];
    }
}
