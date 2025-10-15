<main class="p-4">

  <h2 class="fw-bold mb-4 text-danger">Panel de Control</h2>

  <div class="row g-4">
    <div class="col-md-3">
      <div class="card text-center p-4 shadow-sm border-0" style="background: linear-gradient(135deg, #800000, #b22222); color: #fff;">
        <i class="bi bi-car-front fs-1 mb-3"></i>
        <h5 class="fw-bold">Vehículos</h5>
        <p class="mb-1">Disponibles</p>
        <h3 class="fw-bold">128</h3>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center p-4 shadow-sm border-0 bg-secondary text-white">
        <i class="bi bi-calendar-check fs-1 mb-3"></i>
        <h5 class="fw-bold">Reservas</h5>
        <p class="mb-1">Activas</p>
        <h3 class="fw-bold">57</h3>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center p-4 shadow-sm border-0 bg-secondary text-white">
        <i class="bi bi-people fs-1 mb-3"></i>
        <h5 class="fw-bold">Clientes</h5>
        <p class="mb-1">Registrados</p>
        <h3 class="fw-bold">942</h3>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center p-4 shadow-sm border-0" style="background: linear-gradient(135deg, #800000, #b22222); color: #fff;">
        <i class="bi bi-cash-stack fs-1 mb-3"></i>
        <h5 class="fw-bold">Ingresos</h5>
        <p class="mb-1">Mensuales</p>
        <h3 class="fw-bold">$85,200</h3>
      </div>
    </div>
  </div>
  
  <div class="card mt-5 shadow-sm border-0">
    <div class="card-header bg-danger text-white d-flex align-items-center">
      <i class="bi bi-car-front-fill me-2 fs-5"></i>
      <h5 class="mb-0 fw-bold">Vehículos Recientes</h5>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th>Placa</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Estado</th>
              <th>Precio/Día</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ABC123</td>
              <td>Toyota</td>
              <td>Corolla</td>
              <td><span class="badge bg-danger">Disponible</span></td>
              <td>$250</td>
              <td>
                <button class="btn btn-sm btn-outline-danger me-1"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-pencil"></i></button>
              </td>
            </tr>
            <tr>
              <td>XYZ789</td>
              <td>BMW</td>
              <td>X5</td>
              <td><span class="badge bg-secondary">Ocupado</span></td>
              <td>$500</td>
              <td>
                <button class="btn btn-sm btn-outline-danger me-1"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-pencil"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</main>