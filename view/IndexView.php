<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Ejemplo</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style>
        input{
            margin-top:5px;
            margin-bottom:5px;
        }
        .right{
            float:right;
        }
    </style>
</head>
<body>
<form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col-lg-5">
        <h3>Añadir usuario</h3>
        <hr>
        Nombre: <input type="text" name="nombre" class="form-control"/>
        Apellido: <input type="text" name="apellido" class="form-control"/>
        Email: <input type="text" name="email" class="form-control"/>
        Contraseña: <input type="password" name="password" class="form-control"/>
        <input type="submit" value="enviar" class="btn btn-success"/>
    </form>
    <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
        <h3>Usuarios</h3>
        <?php 
            foreach($allusers as $user) {
                echo $user->id.' - ';
                echo $user->nombre.' - ';
                echo $user->apellido.' - ';
                echo $user->email;
                echo '<div class="right">
                <a href="'.$helper->url("usuarios","borrar").'&id='.$user->id.'" class="btn btn-danger">Borrar</a>
            </div>
            <hr/>';
            } 
        ?>
    </section>  
</body>
</html>