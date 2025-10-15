<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarWorld - Premium Car Dealership</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Vista/css/estilos_web.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <i class="bi bi-telephone me-2"></i> Llámanos gratis: +57 310 456 7890
            </div>

            <div class="col-md-6 text-end position-relative">
                <div class="dropdown d-inline">
                    <a class="dropdown-toggle text-decoration-none text-white" href="#" id="menuHorario"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-clock me-2"></i> Alquila ahora tu vehículo o Regístralo
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="menuHorario">
                        <li><a class="dropdown-item" href="#" id="btnAlquila">Alquila tu vehículo</a></li>
                        <li><a class="dropdown-item" href="#" id="btnRegistra">Registra tu vehículo</a></li>
                    </ul>
                </div>

                <div id="formAlquila" class="formulario-desplegable position-absolute end-0 mt-2 shadow"
                    style="display:none;">
                    <div class="card border-danger">
                        <div class="card-body py-3 px-3">
                            <h6 class="text-danger fw-bold mb-2">Alquila tu vehículo</h6>
                            <form>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Nombre completo">
                                    </div>
                                    <div class="col-6">
                                        <input type="email" class="form-control form-control-sm"
                                            placeholder="Correo electrónico">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Tipo de vehículo">
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-danger btn-sm mt-2">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="formRegistra" class="formulario-desplegable position-absolute end-0 mt-2 shadow"
                    style="display:none;">
                    <div class="card border-danger">
                        <div class="card-body py-3 px-3">
                            <h6 class="text-danger fw-bold mb-2">Registra tu vehículo</h6>
                            <form>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Nombre completo">
                                    </div>
                                    <div class="col-6">
                                        <input type="email" class="form-control form-control-sm"
                                            placeholder="Correo electrónico">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Placa del vehículo">
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-danger btn-sm mt-2">Registrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="inicio">
            <img src="./Vista/svg/logo-alqui-auto-.svg" alt="Logo" class="logo me-2">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-none d-lg-flex w-100 justify-content-between">
            <ul class="navbar-nav mx-auto flex-row">
                <li class="nav-item"><a class="nav-link" href="inicio">INICIO</a></li>
                <li class="nav-item"><a class="nav-link" href="conocenos">CONÓCENOS</a></li>
                <li class="nav-item"><a class="nav-link" href="catalogo">CATÁLOGO</a></li>
                <li class="nav-item"><a class="nav-link" href="servicios">SERVICIOS</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto">CONTÁCTANOS</a></li>
            </ul>
            <a class="btn btn-get-offer" href="cuenta">INICIAR SESIÓN</a>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start canva-menu" tabindex="-1" id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menú</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="inicio">INICIO</a></li>
            <li class="nav-item"><a class="nav-link" href="conocenos">CONÓCENOS</a></li>
            <li class="nav-item"><a class="nav-link" href="catalogo">CATÁLOGO</a></li>
            <li class="nav-item"><a class="nav-link" href="servicios">SERVICIOS</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto">CONTÁCTANOS</a></li>
        </ul>
        <a class="btn btn-get-offer mt-3" href="cuenta">INICIAR SESIÓN</a>
    </div>
</div>

<section class="hero-section contenedor-banner" id="home">
    <div class="container">
        <p style="font-size: 18px; letter-spacing: 2px;">TU MEJOR OPCIÓN EN MOVILIDAD</p>
        <h1>BIENVENIDO A ALQUIAUTO</h1>
        <div class="price">DESDE $159 / DÍA</div>
    </div>
</section>


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="loginModalLabel">Acceso Requerido</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mb-3 fs-5">Debes <strong>iniciar sesión</strong> o <strong>registrarte</strong> para
                    continuar.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="cuenta" class="btn btn-outline-danger px-4">Iniciar Sesión</a>
                    <a href="cuenta" class="btn btn-danger px-4 text-white">Regístrate</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./Vista/js/script_header_web.js"></script>