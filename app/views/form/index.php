<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="author" content="Nicolas Alfaro, Oriana Celis, Miguel Suarez">
    <meta name="description" content="">
    <meta name="keywords" content="HTML, CSS, Bootstrap, Practica, mini proyecto programacion">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Usuario</title>

    <link rel="stylesheet" href="app/views/home/Style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <nav class="nav-form">
        <div class="">
            <a href="/UPTJAA-projects" class="nav-link-home">
                <i class="bi bi-house-fill icono-home"></i> Home
            </a>
        </div>
    </nav>

    <?php if (!empty($error)) : ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <section class="form">
    <h1>¡Rellena el formulario!</h1>
    <form method="POST" action="/UPTJAA-projects/form">
        <div class="form-group"> <label for="nombre">Nombre de Usuario:
                <i class="bi bi-info-circle-fill text-muted ms-2"
                   data-bs-toggle="popover"
                   data-bs-placement="right"
                   data-bs-title="Requisitos de Nombre de Usuario"
                   data-bs-content="Debe tener entre 3 y 20 caracteres. Solo letras, números y guiones bajos."
                   data-bs-trigger="hover focus"></i> </label>
            <input type="text" id="username" name="username" placeholder="Tu nombre de usuario">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:
                <i class="bi bi-info-circle-fill text-muted ms-2"
                   data-bs-toggle="popover"
                   data-bs-placement="right"
                   data-bs-title="Requisitos de Contraseña"
                   data-bs-content="Mínimo 8 caracteres, incluye mayúsculas, minúsculas, números y un símbolo."
                   data-bs-trigger="hover focus"></i>
            </label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña segura">
            
            <div id="password-requirements" class="mt-2 small text-muted">
                <p class="mb-1">La contraseña debe contener:</p>
                <ul>
                    <li id="req-length" class="invalid">Al menos 8 caracteres</li>
                    <li id="req-upper" class="invalid">Una mayúscula</li>
                    <li id="req-lower" class="invalid">Una minúscula</li>
                    <li id="req-number" class="invalid">Un número</li>
                    <li id="req-symbol" class="invalid">Un símbolo (!@#$%^&*)</li>
                </ul>
            </div>
        </div>
        
        <button type="submit">Registrar</button>
    </form>

    </section>

<section class="tabla-users">

<div class="container mt-5 container-tabla ">
    
    <div class="d-block w-75 mx-auto">
        <h2 class="">Usuarios Registrados <i class="bi bi-people-fill"></i></h2>
    <div class="table-responsive"> 
        
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre de Usuario</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($users)) {
                    foreach ($users as $user) {
                        echo '<tr>';
                        echo '<th scope="row">' . htmlspecialchars($user['id']) . '</th>';
                        echo '<td>' . htmlspecialchars($user['username']) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="2">No hay usuarios registrados.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
</div>

    </section>

<footer>
    <div class="Autores">Creado por Oriana Celis, Nicolas Alfaro (2025) &#169;</div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="public/js/validacion.js"></script>
</body>
</html>