<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prova Defensoria</title>
        
        <!-- Favicon -->
        <link href="<?php echo e(URL::asset('img/favicon.ico')); ?>" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo e(URL::asset('css/lightbox.css')); ?>" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo e(URL::asset('js/ajax.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/lightbox.js')); ?>"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" 
                   title="Página Inicial" style="margin-top: -3px">
                </a>
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                        <a href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Inicio</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="<?php echo e(route('filme.index')); ?>">Filmes</a></li>
                            <li><a href="#">Usuários</a></li>                                                                                              
                            <li><a href="#">Administradores</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li class="dropdown">
                        <a href="#" style="text-decoration: none">
                            <span id="underline">Defensoria</span> 
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
        <?php if(session('message')): ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            <?php echo e(session('message')); ?>

        </div>
        <?php endif; ?>
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Filmes</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Inicio</a></li>                  
                            <li class="active">Filmes</li>
                        </ol>
                        <br>
                        <a href="<?php echo e(route('filme.create')); ?>"
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                        
                            </form>
                        </div>
                    </div>           
                </div>
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>FILMES CADASTRADOS (<?php echo e($total); ?>)</b></h4>
                        <br>
                        <div class="container">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">#</th>
                                        <th>Titulo</th>
                                        <th>Descrição</th>
                                        <th>Data de Publicação</th>
                                        <th id="center">Ação</th>
                                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $filmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td id="center"><?php echo e($filme->id); ?></td>
                                        <td title="Nome"><?php echo e($filme->strtitulo); ?></td>
                                        <td title="Descrição"><?php echo e($filme->strdescricao); ?></td>
                                        <td title="Data de publicacao"><?php echo e($filme->created_at); ?></td>
                                        
                                        <td id="center">
                                            <a href="<?php echo e(route('filme.edit', $filme->id)); ?>"
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="<?php echo e(route('filme.destroy', $filme->id)); ?>"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir"
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                <?php echo e(method_field('DELETE')); ?><?php echo e(csrf_field()); ?>                                                
                                                <button type="submit" style="background-color: #fff">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form></td>               
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo e(URL::asset('img/subir.png')); ?>" 
                 id="up" 
                 style="display: none;" 
                 alt="Ícone Subir ao Topo" 
                 title="Subir ao topo?">
            </body>
            </html>

