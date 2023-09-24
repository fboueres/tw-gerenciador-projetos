@extends('app')

@section('titulo', 'Lista de Funcionários')

@section('conteudo')
    <h1>Lista de Funcionários</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data de Contração</th>
                <th scope="col">Situação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td><a href="{{ route('employees.show', $employee) }}">{{ $employee->nome }}</a></td>
                    <td>{{ date('d/m/Y', strtotime($employee->data_contratacao)) }}</td>
                    <td>{{ is_null($employee->data_demissao) ? 'Ativo' : 'Demitido' }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('employees.edit', $employee) }}">Atualizar</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <th></th>
                    <td>Nenhum funcionário cadastrado</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $employees->links() }}

    <a class="btn btn-success" href="{{ route('employees.create') }}">Novo Funcionário</a>
@endsection    