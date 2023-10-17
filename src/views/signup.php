<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartaments Figuerencs</title>
    <link rel="icon" href="imatges/ApartamentsFiguerencs.png" type="image/x-icon">
    <?php controllerLibs() ?>
</head>

<?php controllerMenu() ?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
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
                    <div class="mb-4"> <!-- Agregamos el margen aquí -->
                        <p>¿Ya tienes un cuenta creada? <a href="index.php?r=login">Inicia sesión</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
</body>

</html>