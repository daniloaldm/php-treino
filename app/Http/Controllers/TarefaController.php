<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefaController extends Controller
{
    private $tarefasModel;
    public function __construct () {
        //Nao se esquecer do construtor, para tu nao ter que inicializar a classe varias vezes, só chamar ela uma vez pra ser carregada
        $this->tarefasModel = new Tarefa;
    }

    public function index() {
        $tarefas = $this->tarefasModel->all();
        $total   = count($tarefas);
        return view('list-tarefas', compact('tarefas', 'total'));
    }

    public function create() {
        return view('include-tarefa');
    }

    public function store(Request $request) {
        //Quero Salvar no Banco, como tu criou uma Model, tu utiliza o metodo do Eloquent
        //Tem Varios Modoso temos a função insertGetId que insere no banco e retorna o id do objeto que foi salvo
        // Tem o firstOrCreate que ele vai verificar todos os parametros, se tiver tudo diferente ele cria um novo registro no banco
        // e temos o mais comum o insert
        $this->tarefasModel->insert([
            'nome'          => $request->nome,
            'descricao'     => $request->descricao,
            'prazo'         => $request->prazo,
            'prioridade'    => $request->prioridade,
            'situacao'      => $request->situacao
        ]);
        return redirect()->route('assignment.index')->with('message', 'Tarefa criada com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $assignment =$this->tarefasModel->findOrFail($id);
        return view('alter-tarefa', compact('assignment'));
    }

    public function update(Request $request, $id) {
        //Update é quase a mesma coisa do store só vamos add mais algumas funcoes
        $this->tarefasModel
            ->where('id', $id)
            ->update([
                'nome'          => $request->nome,
                'descricao'     => $request->descricao,
                'prazo'         => $request->prazo,
                'prioridade'    => $request->prioridade,
                'situacao'      => $request->situacao
            ]);
        return redirect()->route('assignment.index')->with('message', 'Tarefa alterada com sucesso!');
    }

    public function destroy($id) {
        $assignment = $this->tarefasModel->where('id', $id)->delete();
        return redirect()->route('assignment.index')->with('message', 'Tarefa excluída com sucesso!');
    }

}
