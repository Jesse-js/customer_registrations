@extends('app')
@section('titulo', 'Lista de Projetos')
@section('conteudo')
    <h1>Lista de Projetos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cliente</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td><a href="{{ route('projects.show', $project) }}">{{ $project->name }}</a></td>
                    <td>{{ $project->client->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('projects.edit', $project)}}">Atualizar</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar o registro?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('projects.create') }}">Novo Projeto</a>
@endsection
