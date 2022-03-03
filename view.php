<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decameron</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>



<body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Registrar Hotel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="asign.php">Asignacion de habitaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="view.php">Ver registro de hoteles</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
    <div>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Idhotel</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Numero de habitaciones</th>
            <th scope="col">Direccion</th>
            <th scope="col">Nit</th>

            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "select * from hotel";
            $fila = ($sql);
            ?>
            
                <tr>
                <td scope="col">#</td>
                <td scope="col"><?=$fila[1]?></td>
                <td scope="col"><?=$fila[2]?></td>
                <td scope="col"><?=$fila[3]?></td>
                <td scope="col"><?=$fila[4]?></td>
                <td scope="col"><?=$fila[5]?></td>
                <td scope="col"><a href="">Actualizar</a></td>
                </tr>
            
            
        </tbody>
        </table>
</div>
</body>

</html>