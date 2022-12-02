<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/app.css">
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <script src="vista/js/jquery-3.6.0.min.js"></script>
    <script src="vista/js/bootstrap.min.js"></script>

    <title>SISTEMA</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">SISTEMA PRODUCTOS</h1>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">SISTEMAS DE PRODUCTOS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" class="btn">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?c=productos&m=index" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?c=productos&m=index" class="btn">Listar Productos</a>                    
                    <a class="dropdown-item" href="index.php?c=productos&m=nuevo" class="btn">Nuevo Producto</a>                                        
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?c=provedor&m=index" class="btn" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Proveedor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?c=provedor&m=index" class="btn">Listar Provedor</a>                      
                    <a class="dropdown-item" href="index.php?c=provedor&m=nuevo" class="btn">Nuevo Provedor</a>                                                
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categoria
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?c=categoria&m=index" class="btn">Listar Categoria</a>
                    <a class="dropdown-item" href="index.php?c=categoria&m=nuevo" class="btn">Nueva Categoria</a>                      
                                        
                    </div>
                </li>
                </ul>
            </div>
        </nav>
    
    
        <!-- 
        CONTENIDO
       -->