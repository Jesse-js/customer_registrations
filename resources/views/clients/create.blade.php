@extends('app')
@section('titulo', 'Novo Cliente')
@section('conteudo')
    <h1>Novo Cliente</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Nome do Cliente">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Endereço do Cliente">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea name="observacao" class="form-control" id="observacao" rows="3" placeholder="Digite a observação"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
@endsection
