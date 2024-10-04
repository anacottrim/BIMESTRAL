@extends('layouts.app')

@section('title', 'Cadastrar Novo Usuário')

@section('content')
    <h1 style="text-align: center;">Cadastrar Novo Usuário</h1>

    <div style="display: flex; justify-content: center; margin: 20px 0;">
        <form action="{{ route('usuarios.store') }}" method="POST" style="width: 300px;">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required>
            </div>
            <div class="form-group">
                <label for="escolaridade">Escolaridade</label>
                <select class="form-control" id="escolaridade" name="escolaridade" required>
                    <option value="Médio">Médio</option>
                    <option value="Técnico">Técnico</option>
                    <option value="Superior">Superior</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success" style="width: 100%; margin-top: 10px;">Cadastrar</button>
        </form>
    </div>
@endsection
