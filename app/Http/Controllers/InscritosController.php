<?php

namespace App\Http\Controllers;

use App\Inscritos;
use Illuminate\Http\Request;

use App\Http\Requests;

class InscritosController extends Controller
{
    public function index ()
    {
        $inscritos = Inscritos::all();
        return response()->json($inscritos);
    }

    public function store(Request $request)
    {
        $inscritos = new Inscritos();
        $inscritos->fill($request->all());
        $inscritos->save();

        return response()->json($inscritos, 201);
    }

    public function show($id)
    {
        $inscritos = Inscritos::find($id);

        if (!$inscritos) return response()->json(['message' => 'Não existe esse inscrito'], 404);

        return response()->json($inscritos);
    }

    public function update(Request $request, $id)
    {
        $inscritos = Inscritos::find($id);

        if (!$inscritos) return response()->json(['message' => 'Não existe esse inscrito'], 404);

        $inscritos->fill($request->all());
        $inscritos->save();

        return response()->json($inscritos);
    }

    public function delete($id)
    {
        $inscritos = Inscritos::find($id);

        if (!$inscritos) return response()->json(['message' => 'Não existe esse inscrito'], 404);

        $inscritos->delete();
    }
}
