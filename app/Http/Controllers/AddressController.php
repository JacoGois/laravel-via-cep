<?php

namespace App\Http\Controllers;

use App\Http\Requests\Address\AddRequest;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddressController extends Controller
{
    public function index() {
        $address = Address::all();

        return view('listar')->with([
            "address" => $address
        ]);
    }

    public function add() {
        return view('busca');
    }

    public function get(
        Request $request
    )
    {
        $cep = preg_replace("/[^0-9]/", "", $request->input('cep'));
        $response = Http::get("viacep.com.br/ws/$cep/json/")->json();

        return view("adicionar")->with([
            "cep" => $cep,
            "logradouro" => $response["logradouro"],
            "bairro" => $response["bairro"],
            "cidade" => $response["localidade"],
            "estado" => $response["uf"],
        ]);
    }

    public function save(
        AddRequest $request
    )
    {
        Address::create([
            "cep" => $request["cep"],
            "logradouro" => $request["logradouro"],
            "numero" => $request["numero"],
            "bairro" => $request["bairro"],
            "cidade" => $request["cidade"],
            "estado" => $request["estado"],
        ]);
        return redirect('/');
    }
}
