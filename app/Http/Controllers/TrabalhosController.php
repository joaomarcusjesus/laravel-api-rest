<?php

namespace App\Http\Controllers;

use App\Trabalhos;
use Illuminate\Http\Request;

use App\Http\Requests;

class TrabalhosController extends Controller
{
    public function index ()
    {
        $trabalhos = Trabalhos::all();
        return response()->json($trabalhos);
    }

    public function store(Request $request)
    {
        $trabalhos = new Trabalhos();
        $trabalhos->fill($request->all());
        $trabalhos->save();

        return response()->json($trabalhos, 201);
    }

    public function show($id)
    {
        $trabalhos = Trabalhos::find($id);

        if (!$trabalhos) return response()->json(['message' => 'Não existe esse trabalho'], 404);

        return response()->json($trabalhos);
    }

    public function update(Request $request, $id)
    {
        $trabalhos = Trabalhos::find($id);

        if (!$trabalhos) return response()->json(['message' => 'Não existe esse trabalho'], 404);

        $trabalhos->fill($request->all());
        $trabalhos->save();

        return response()->json($trabalhos);
    }

    public function delete($id)
    {
        $trabalhos = Trabalhos::find($id);

        if (!$trabalhos) return response()->json(['message' => 'Não existe esse trabalho'], 404);

        $trabalhos->delete();
    }
}
