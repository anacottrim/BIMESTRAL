@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1></h1>
    <p>Selecione uma das opções abaixo:</p>
    <ul>
        <li><a href="{{ route('usuarios.index') }}">Gerenciar Usuários</a></li>
        <li><a href="{{ route('financeiro.index') }}">Gerenciar Financeiro</a></li>
    </ul>
@endsection
