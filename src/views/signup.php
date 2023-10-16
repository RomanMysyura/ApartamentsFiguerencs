<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartaments Figuerencs</title>
    <link rel="icon" href="imatges/ApartamentsFiguerencs.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="login.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
<div class="position-absolute top-50 start-50 translate-middle shadow p-3 mb-5 bg-white rounded">
    <form action="..\controllers\signup.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" />
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" />
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Teléfono" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" />
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
        <div class="mb-3">
            <p>¿Ya tienes un cuenta creada? <a href="#">Inicia sesión</a></p>
        </div>
    </form>
</div>

    
</body>

</html>