<?php

namespace App\Http\Controllers;

use App\Models\Financeiro; 
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function index()
    {
        $financeiros = Financeiro::all(); 

        return view('financeiro.index', compact('financeiros'));
    }

    public function create()
    {
        return view('financeiro.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('financeiro.index')->with('success', 'Registro financeiro cadastrado com sucesso!');
    }
}
