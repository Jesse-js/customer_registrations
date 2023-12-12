@extends('app')
@section('titulo', 'Editar Cliente')
@section('conteudo')
    <h1>Novo Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" value="{{ $client->name }}" type="text" class="form-control" id="name" placeholder="Nome do Cliente" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input name="endereco" value="{{ $client->endereco }}" type="text" class="form-control" id="endereco" placeholder="Endereço do Cliente" required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea name="observacao" class="form-control" id="observacao" rows="3" placeholder="Digite a observação" required>{{ $client->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
@endsection
