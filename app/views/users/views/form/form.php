<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="author" content="Grupo de programacion ListPersons">
    <meta name="description" content="">
    <meta name="keywords" content="HTML, CSS, Bootstrap, Practica, mini proyecto programacion">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Usuario</title>

    <link rel="stylesheet" href="../../Style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <nav class="nav-form">
        <div class="">
            <a href="../../index.php" class="nav-link-home">
                <i class="bi bi-house-fill icono-home"></i> Home
            </a>
        </div>
    </nav>

    <section class="form">
        <h1>¡Rellena el formulario!</h1>
        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <button type="submit">Registrar</button>
        </form>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>