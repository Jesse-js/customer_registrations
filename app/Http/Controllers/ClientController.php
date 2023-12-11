<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('clients.index', [ 'clients' => $clients]);
    }

    public function show(int $id)
    {
        $client = Client::find($id);
        return view('clients.show')->with('client', $client);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Client::create($dados);
        return redirect()->route('clients.index');
    }

    public function edit(int $id) 
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client', $client));
    }

    public function update(int $id, Request $request) 
    {
        $client = Client::find($id);

        $client->update([
            'name' => $request->name,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect()->route('clients.index');
    }

    public function destroy(int $id)
    {
        $client = Client::find($id);

        $client->delete();

        return redirect()->route('clients.index');
    }
}
