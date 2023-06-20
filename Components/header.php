<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Taller mecánico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a href="/about" class="nav-link">Acerca de</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Registrar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="/Registrar/RegistraAuto.php" class="dropdown-item">Registrar auto</a> </li>
                        <li><a href="/Registrar/RegistraMecanico.php" class="dropdown-item">Registrar mecánico</a> </li>
                        <li><a href="/Registrar/RegistraPuesto.php" class="dropdown-item">Registrar puesto</a> </li>
                        <li><a href="/Registrar/RegistraTrabajo.php" class="dropdown-item">Registrar trabajo</a> </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="/Registrar/RegistraCliente.php" class="dropdown-item">Registrar cliente</a> </li>
                        <li><a href="/Registrar/RegistraClienteAuto.php" class="dropdown-item">Registrar auto a un cliente</a> </li>
                        <li><a href="/Registrar/RegistraTaller.php" class="dropdown-item">Registrar taller</a> </li>
                        <li><a href="/Registrar/RegistraAccidente.php" class="dropdown-item">Registrar accidente</a> </li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Modificar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="/Modificar/ModificaAuto.php" class="dropdown-item">Modificar auto</a> </li>
                        <li><a href="/Modificar/ModificaMecanico.php" class="dropdown-item">Modificar mecánico</a> </li>
                        <li><a href="/Modificar/ModificaPuesto.php" class="dropdown-item">Modificar puesto</a> </li>
                        <li><a href="/Modificar/ModificaTrabajo.php" class="dropdown-item">Modificar trabajo</a> </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="/Modificar/ModificaCliente.php" class="dropdown-item">Modificar cliente</a> </li>
                        <li><a href="/Modificar/ModificaClienteAuto.php" class="dropdown-item">Modificar auto a un cliente</a> </li>
                        <li><a href="/Modificar/ModificaTaller.php" class="dropdown-item">Modificar taller</a> </li>
                        <li><a href="/Modificar/ModificaAccidente.php" class="dropdown-item">Modificar accidente</a> </li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reportes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="/Reportes/ClientesAccidentes.php" class="dropdown-item">Listado de accidentes</a> </li>
                        <li><a href="/Reportes/ListadoTrabajos.php" class="dropdown-item">Listado de trabajos</a> </li>
                        <li><a href="/Reportes/TalleresAccidentes.php" class="dropdown-item">Listado de atención a accidentes</a> </li>
                        <li><a href="/Reportes/ReporteTiempoPromedio.php" class="dropdown-item">Tiempo promedio de reparación</a> </li>
                    </ul>
                    </li>
                </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>