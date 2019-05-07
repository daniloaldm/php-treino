<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefaController extends Controller
{
    public function index() {
        $tarefas = Tarefa::all();
        $total = Tarefa::all()->count();
        //return view('list-tarefas', compact('tarefas', 'total'));
    }

    public function create() {
        return view('include-tarefa');
    }

    public function store(Request $request) {
        $assignment = new Tarefa;
        $assignment->nome = $request->nome;
        $assignment->descricao = $request->descricao;
        $assignment->prazo = $request->prazo;
        $assignment->prioridade = $request->prioridade;
        $assignment->situacao = $request->situacao;
        $assignment->save();
        return redirect()->route('assignment.index')->with('message', 'Tarefa criada com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $assignment = Tarefa::findOrFail($id);
        //return view('alter-tarefa', compact('assignment'));
    }

    public function update(Request $request, $id) {
        $assignment = Tarefa::findOrFail($id); 
        $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->quantity = $request->quantity;
        $assignment->price = $request->price;
        $assignment->save();
        return redirect()->route('assignment.index')->with('message', 'Tarefa alterada com sucesso!');
    }

    public function destroy($id) {
        $assignment = Tarefa::findOrFail($id);
        $assignment->delete();
        return redirect()->route('assignment.index')->with('message', 'Tarefa excluída com sucesso!');
    }

}
