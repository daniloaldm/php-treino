<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['nome','descricao','prazo','prioridade','situacao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'tarefas';

}
