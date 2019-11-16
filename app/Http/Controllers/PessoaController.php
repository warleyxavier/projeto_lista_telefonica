<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;
use App\Http\Requests\createPessoaRequest;

class PessoaController extends Controller
{

    function store(createPessoaRequest $request) {
        
        $data = $request->all();

        $pessoa = New Pessoa();
        $pessoa->nome = $data["name"];
        $pessoa->telefone = $data["phone"];

        $pessoa->save();

        return response()->json([
            'people' => $pessoa
        ], 200);
    }

    function index($peopleName = '') {

        $data = Pessoa::where('nome', 'like', "%$peopleName%")->get();

        return response()->json([
            'peoples' => $data
        ], 200);

    }

    function delete($id) {

        $pessoa = Pessoa::find($id);

        if(!isset($pessoa))
            return response()->json([
                'message' => 'Pessoa não encontrada'
            ], 400);    

        $pessoa->delete();

        return response()->json([
            'message' => 'Pessoa excluída com sucesso'
        ], 200);

    }

}
