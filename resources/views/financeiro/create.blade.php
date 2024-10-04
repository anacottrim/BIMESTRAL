@extends('layouts.app')

@section('title', 'Cadastrar Nova Conta')

@section('content')
    <h1 style="text-align: center;">Cadastrar Nova Conta</h1>

    <div style="display: flex; justify-content: center; margin: 20px 0;">
        <form action="{{ route('financeiro.store') }}" method="POST" style="width: 300px;">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="form-group">
                <label for="tipo">A Pagar / A Receber</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="A pagar">A pagar</option>
                    <option value="A receber">A receber</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success" style="width: 100%; margin-top: 18px;">Cadastrar</button>
        </form>
    </div>
@endsection
