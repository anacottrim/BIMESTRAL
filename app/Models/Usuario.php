<?php

namespace App\Models;

class Usuario
{
    public static function all()
    {
        return [
            (object) ['nome' => 'João Silva', 'cargo' => 'Gerente', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Maria Oliveira', 'cargo' => 'Analista', 'escolaridade' => 'Médio'],
            (object) ['nome' => 'Pedro Santos', 'cargo' => 'Desenvolvedor', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Ana Paula', 'cargo' => 'Assistente', 'escolaridade' => 'Médio'],
            (object) ['nome' => 'Carlos Lima', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Juliana Costa', 'cargo' => 'Designer', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Felipe Martins', 'cargo' => 'Técnico', 'escolaridade' => 'Técnico'],
            (object) ['nome' => 'Bruna Souza', 'cargo' => 'Recepcionista', 'escolaridade' => 'Médio'],
            (object) ['nome' => 'Roberto Ferreira', 'cargo' => 'Vendedor', 'escolaridade' => 'Médio'],
            (object) ['nome' => 'Lucas Alves', 'cargo' => 'Analista Financeiro', 'escolaridade' => 'Superior'],
        ];
    }
}    