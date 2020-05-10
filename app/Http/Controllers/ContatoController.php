<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return Contato::all();
    }

    public function store(Request $request)
    {
        return Contato::create($request->all());
    }

    public function show(Contato $contato)
    {
        return $contato;
    }

    public function update(Request $request, Contato $contato)
    {
        $contato->update($request->all());

        return $contato->fresh();
    }

    public function destroy(Contato $contato)
    {
        $contato->delete();
    }
}
