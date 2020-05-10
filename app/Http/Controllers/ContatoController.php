<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $contato = Contato::create($request);

        return $contato;
    }

    public function show(Contato $contato)
    {
        //
    }

    public function edit(Contato $contato)
    {
        //
    }

    public function update(Request $request, Contato $contato)
    {
        //
    }

    public function destroy(Contato $contato)
    {
        //
    }
}
