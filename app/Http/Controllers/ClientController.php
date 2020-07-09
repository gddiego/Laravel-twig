<?php

namespace App\Http\Controllers;

use App\modelo_descricao;
use Illuminate\Http\Request;


class clientController extends Controller
{
    public function index()
    {
        $clients = modelo_descricao::all();
        return View('pages.clients.servicos-construcao')->with($clients);
    }

    // public function create()
    // {
    //     return view('pages.clients.create');
    // }

    public function create()
    {
        return view('pages.clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'address' => 'required'
        ]);

        $clients = new AppClient([
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'address' => $request->get('address'),

        ]);
        // dd($client);
        $clients->save();
        return redirect()->route('table');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $clients = AppClient::findOrFail($id);
        return view('pages.clients.edit', compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $clients = AppClient::findOrFail($id);
        $clients->name        = $request->name;
        $clients->lastname = $request->lastname;
        $clients->address    = $request->address;
        $clients->save();
        return redirect()->route('pages.clients.index')->with('message', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $clients = AppClient::findOrFail($id);
        $clients->delete();
        return redirect()->route('pages.clients.index')->with('alert-success', 'Cliente deletado!');
    }
}
