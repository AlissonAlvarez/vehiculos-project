<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | AutoRent+</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./Vista/css/estilos_app.css">
</head>

  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <button class="btn btn-outline-danger me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
      <i class="bi bi-list"></i>
    </button>
    <a class="navbar-brand fw-bold" href="#">Alqui Auto</a>
    <form class="d-none d-md-flex ms-auto me-3">
      <input class="form-control me-2" type="search" placeholder="Buscar...">
      <button class="btn btn-outline-danger"><i class="bi bi-search"></i></button>
    </form>
    <div class="profile d-flex align-items-center">
      <img src="../vista/imagenes/perfil_usuario.jpg" alt="Perfil">
      <span class="fw-semibold">Admin</span>
    </div>
  </nav>

  <!-- OFFCANVAS MENU -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-bold" id="offcanvasMenuLabel">Menu</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column p-0">
      <nav class="nav flex-column p-3">
        <a href="#" class="nav-link active"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        <a href="#" class="nav-link"><i class="bi bi-car-front-fill me-2"></i>Vehículos</a>
        <a href="#" class="nav-link"><i class="bi bi-calendar-check me-2"></i>Reservas</a>
        <a href="#" class="nav-link"><i class="bi bi-person-lines-fill me-2"></i>Clientes</a>
        <a href="#" class="nav-link"><i class="bi bi-cash-coin me-2"></i>Pagos</a>
        <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i>Configuración</a>
        <a href="#" class="nav-link"><i class="bi bi-box-arrow-right me-2"></i>Salir</a>
      </nav>
    </div>
  </div>

  <div class="container-fluid mt-4">
    <h2 class="fw-bold mb-4">Panel de Control</h2>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

