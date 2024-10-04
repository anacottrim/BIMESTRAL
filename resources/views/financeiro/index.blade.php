@extends('layouts.app')

@section('title', 'Listagem Financeira')

@section('content')
    <h1 style="text-align: center;">Lista Financeira</h1>

    @if (session('success'))
        <div class="alert alert-success" style="text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <div style="overflow-x:auto; margin: 20px 0;"> 
        <table style="width: 100%; border-collapse: collapse; text-align: center;">
            <thead>
                <tr>
                    <th style="padding: 10px; border: 1px solid #ddd;">Descrição</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Valor</th>
                    <th style="padding: 10px; border: 1px solid #ddd;">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($financeiros as $financeiro)
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">{{ $financeiro->descricao }}</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">{{ $financeiro->valor }}</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">{{ $financeiro->tipo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="text-align: center;">
        <a href="{{ route('financeiro.create') }}" 
           style="display: inline-block; background-color: #007bff; color: white; padding: 15px 30px; border-radius: 5px; font-size: 18px; text-decoration: none;">
           Cadastrar Novo Registro
        </a>
    </div>
@endsection
