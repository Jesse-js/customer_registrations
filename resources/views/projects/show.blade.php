@extends('app')
@section('titulo', 'Detalhes do Projeto')
@section('conteudo')
    <div class="card mt-2">
        <div class="card-header">
            Detalhes do Projeto {{ $project->name }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $project->id }}</p>
            <p><strong>Nome: </strong> {{ $project->name }}</p>
            <p><strong>Cliente:</strong> {{ $project->client->name }}</p>

            <br>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header">
            Funcionários que trabalham no projeto
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($project->employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-success mt-2">Voltar para lista</a>
@endsection
