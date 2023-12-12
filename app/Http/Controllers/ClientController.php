<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::get();
        return view('clients.index', [ 'clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::find($id);
        return view('clients.show')->with('client', $client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Client::create($dados);
        return redirect()->route('clients.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client', $client));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::find($id);

        $client->update([
            'name' => $request->name,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $client = Client::find($id);

        $client->delete();

        return redirect()->route('clients.index');
    }
}
