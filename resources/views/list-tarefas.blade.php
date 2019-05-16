<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarefas</title>

    <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />

    <!-- JavaScript -->
    <script src="{{URL::asset('js/search.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
    <script src="{{URL::asset('js/lightbox.js')}}"></script>
    
    
    

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/')}}" title="Página Inicial" style="margin-top: -3px">
                <img src="{{URL::asset('img/logo.png')}}"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right" id="link-white">
                <li class="dropdown">
                    <a href="#" style="text-decoration: none">
                        <img src="{{URL::asset('img/danilo.jpg')}}" class="img-circle" width="26" height="26" style="margin-top: -3px">
                        <span id="underline">Danilo Alexandrino</span>
                    </a>
                </li>
                <li><a href="#" style="text-decoration: none">
                        <span class="glyphicon glyphicon-log-in"></span>
                        <span id="underline">Sair</span></a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>
        </div>
    </nav>
    @if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
    @endif
    <div id="line-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="center">
                    <h1><b>Tarefas</b></h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Panel</a></li>
                        <li class="active">Tarefas</li>
                    </ol>
                    <br>
                    <a href="{{route('assignment.create')}}" class="btn btn-default btn-sm pull-right">
                        <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                    <div id="pesquisa" class="pull-right">
                        <form class="form-group" method="post" action="#">
                            <input id="myInput" onkeyup="myFunction()" type="text" name="pesquisar" class="form-control input-sm pull-left" placeholder="Pesquisar por código..." required>
                            <button class="btn btn-default btn-sm pull-right" id="color" disabled>
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br />
                    <h4 id="center"><b>TAREFAS CADASTRADAS ({{$total}})</b></h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th id="center">Código</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th id="center">Prazo</th>
                                    <th id="center">Prioridade</th>
                                    <th id="center">Situação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tarefas as $tarefa)
                                <tr>
                                    <td id="center">{{$tarefa->id}}</td>
                                    <td title="Nome">{{$tarefa->nome}}</td>
                                    <td title="Descrição">{{$tarefa->descricao}}</td>
                                    <td title="Prazo" id="center">{{$tarefa->prazo}}</td>
                                    <td title="Prioridade" id="center">{{$tarefa->prioridade}}</td>
                                    <td title="Situação" id="center">{{$tarefa->situacao}}</td>
                                    <td id="center">
                                        <a href="{{route('assignment.edit', $tarefa->id)}}" data-toggle="tooltip" data-placement="top" title="Alterar"><i class="fa fa-pencil"></i></a>
                                        &nbsp;<form style="display: inline-block;" method="POST" action="{{route('assignment.destroy', $tarefa->id)}}" data-toggle="tooltip" data-placement="top" title="Excluir" onsubmit="return confirm('Confirma exclusão?')">
                                            {{method_field('DELETE')}}{{ csrf_field() }}
                                            <button type="submit" style="background-color: #fff">
                                                <a><i class="fa fa-trash-o"></i></a>
                                            </button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{URL::asset('img/subir.png')}}" id="up" style="display: none;" alt="Ícone Subir ao Topo" title="Subir ao topo?">
</body>

</html>