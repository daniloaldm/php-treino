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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}" 
                   title="Página Inicial" style="margin-top: -3px">
                    <img src="{{URL::asset('img/logo.png')}}"></a>
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li class="dropdown">
                        <a href="#" style="text-decoration: none">
                            <img src="{{URL::asset('img/danilo.jpg')}}" 
                                 class="img-circle" width="26" height="26" 
                                 style="margin-top: -3px"> 
                            <span id="underline">Danilo Alexandrino</span> 
                        </a>                      
                    </li>
                    <li><a href="#" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a></li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav>        
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Tarefa</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Panel</a></li>                  
                            <li><a href="{{route('assignment.index')}}">Tarefas</a></li>                  
                            <li class="active">Alteração</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAÇÃO DOS DADOS DA TAREFA</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('assignment.update', $assignment->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" 
                                       class="form-control" 
                                       value= "{{$assignment->nome}}"
                                >
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="descricao" 
                                       class="form-control" 
                                       value="{{$assignment->descricao}}"
                                >
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prazo">Prazo</label>
                                <input type="date" name="prazo" min="<?php echo date('Y-m-d');?>"
                                       class="form-control" 
                                       value="{{$assignment->prazo}}"
                                >
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="prioridade">Prioridade</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="prioridade">
                                <option>{{$assignment->prioridade}}</option>
                                <option>Alta</option>
                                <option>Média</option>
                                <option>Baixa</option>
                                </select>
                        </div> 
                        </div>                 
                        <div class="col-md-6">                        
                        <div class="form-group">
                                <label for="situacao">Situação</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="situacao">
                                <option>{{$assignment->situacao}}</option>
                                <option>Concluída</option>
                                <option>Em processo</option>
                                <option>Em análise</option>
                                </select>
                            </div>
                        </div>  
                        
                        <div class="col-md-12">                   
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html>