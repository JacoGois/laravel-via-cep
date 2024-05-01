<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $table = "address";

    protected $fillable = [
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
    ];
}
