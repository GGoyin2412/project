<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Escuelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Calendarios Escolares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('adminini') }}">Administrador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profesores</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Bienvenido a mi sitio</h1>
        <p>Contenido relacionado con escuelas y calendarios escolares de la SEP.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>