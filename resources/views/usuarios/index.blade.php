@extends('layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')

    <h1 style="text-align: center;">Lista de Usuários</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align: center;">Nome</th>
                    <th style="text-align: center;">Cargo</th>
                    <th style="text-align: center;">Escolaridade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td style="text-align: center;">{{ $usuario->nome }}</td>
                        <td style="text-align: center;">{{ $usuario->cargo }}</td>
                        <td style="text-align: center;">{{ $usuario->escolaridade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="text-align: center;">
    <a href="{{ route('usuarios.create') }}" 
       style="display: inline-block; background-color: #007bff; color: white; padding: 15px 30px; border-radius: 5px; font-size: 18px; text-decoration: none;">
       Cadastrar Novo Usuário
    </a>
</div>


@endsection
