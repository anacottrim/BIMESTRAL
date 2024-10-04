<?php

namespace App\Models;

class Financeiro
{
    public static function all()
    {
        return collect([
            (object)['descricao' => 'Salário', 'valor' => 3000, 'tipo' => 'A receber'],
            (object)['descricao' => 'Aluguel', 'valor' => 1500, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Conta de Luz', 'valor' => 200, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Conta de Água', 'valor' => 100, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Internet', 'valor' => 150, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Venda de Produto', 'valor' => 500, 'tipo' => 'A receber'],
            (object)['descricao' => 'Serviço Prestado', 'valor' => 800, 'tipo' => 'A receber'],
            (object)['descricao' => 'Impostos', 'valor' => 400, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Fornecedores', 'valor' => 600, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Recebimento de Cliente', 'valor' => 2000, 'tipo' => 'A receber'],
        ]);
    }
}
