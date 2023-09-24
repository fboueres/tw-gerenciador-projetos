@extends('app')

@section('titulo', 'Editar Funcionário')

@section('conteudo')
    <h1>Editar Funcionário '{{ $employee->nome }}'</h1>
    <form action="{{ route('employees.update', $employee) }}" method="post">
        @method('PUT')
        @include('employees._form')
    </form>
@endsection