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
            <label for="formGroupExampleInput" class="form-label">Cantidad de habitaciones</label>
            <input type="text" name="cant" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el numero de habitaciones">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tipo de habitacion</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione el tipo de habitacion</option>
                <option value="1">Estandar</option>
                <option value="2">Junior</option>
                <option value="3">Suite</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Acomodacion</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione la acomodacion para la habitacion</option>
                <option value="1">Sencila</option>
                <option value="2">Doble</option>
                <option value="3">Triple</option>
            </select>        
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Hotel</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione El hotel para asignar habitaciones</option>
                <option value="1"></option>
               
            </select>        
        </div>
        <input type="submit" class="btn btn-primary float-right" value="Asignar habitaciones">
    </form>
</body>

</html>