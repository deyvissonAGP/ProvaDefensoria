<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

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
        <link href="<?php echo e(URL::asset('css/style-home.css')); ?>" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo e(URL::asset('js/ajax.js')); ?>"></script>
    </head>
    <body>
          
            <div class="flex-center position-ref full-height" id="fundo">
            <?php if(Route::has('login')): ?>
            <div class="top-right links">
                <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
                <?php else: ?>
                <a href="<?php echo e(url('/login')); ?>">Login</a>
                <a href="<?php echo e(url('/register')); ?>">Register</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="content">
                <i class="fa fa-bank"></i>
                <div class="title m-b-md">
                    Prova Defensoria
                </div>
               
            </div>
        </div>
    </body>
</html>
