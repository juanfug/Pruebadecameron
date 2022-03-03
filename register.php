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
                        <a class="nav-link active" href="register.php">Registrar Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="asign.php">Asignacion de habitaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view.php">Ver registro de hoteles</a>
                    </li>
                
                </ul>

            </div>
        </div>
    </nav>
</header>

    <form action="index-post.php" method="post">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nombre</label>
            <input type="text" name="nom" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el nombre del hotel">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Ciudad</label>
            <input type="text" name="ciu" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la ciudad donde esta ubicada el hotel">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Numero de Habitaciones</label>
            <input type="text" name="num" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el numero de habitaciones con las que cuenta el hotel">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Direccion</label>
            <input type="text" name="dir" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la direccion exacta del hotel">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nit</label>
            <input type="text" name="nit" class="form-control" id="formGroupExampleInput2" placeholder="Nit de registro del hotel">
        </div>
        <input type="submit" class="btn btn-primary float-right" value="Registrar Hotel">
    </form>
</body>

</html>