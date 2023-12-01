@extends('app')
@section('titulo', 'Detalhes do Cliente')
@section('conteudo')
    <div class="card">
        <div class="card-header">
            Detalhes do cliente {{ $client->name }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $client->id }}</p>
            <p><strong>Nome: </strong> {{ $client->name }}</p>
            <p><strong>Endereço:</strong> {{ $client->endereco }}</p>
            <p><strong>Observação:</strong> {{ $client->observacao }}</p>
            <br>
            <a href="{{ route('clients.index') }}" class="btn btn-success">Voltar para lista</a>
        </div>
    </div>
@endsection
