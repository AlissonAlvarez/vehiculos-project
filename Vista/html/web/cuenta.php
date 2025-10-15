<!-- ===================== VISTA LOGIN / REGISTRO ===================== -->
<section class="d-flex align-items-center justify-content-center py-5 seccion-cuenta" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

          <div class="row g-0">

            <div class="col-md-5 d-none d-md-block position-relative" style="background:url('./Vista/images/carro-4.png') center/cover;">
              <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(139,0,0,0.36);"></div>
              <div class="position-absolute bottom-0 text-white p-4">
                <h4 class="fw-bold">Bienvenido a <span class="text-warning">Alqui Auto</span></h4>
                <p class="small">Tu plataforma segura para alquilar o registrar tu vehículo fácilmente.</p>
              </div>
            </div>

            <div class="col-md-7 bg-white p-5">
              <div class="text-center mb-4">
                <img src="./Vista/svg/logo-alqui-auto-.svg" alt="Logo" width="150">
              </div>

              <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active fw-semibold" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" style="color:#800000;" href="dashboard">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                  <button class="nav-link fw-semibold" id="pills-register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" style="color:#800000;">Registrarse</button>
                </li>
              </ul>

              <div class="tab-content">

                <!-- ================= LOGIN ================= -->
                <div class="tab-pane fade show active" id="pills-login">
                  <h3 class="fw-bold mb-4 text-center text-dark">Accede a tu cuenta</h3>
                  <form action="#" method="POST" class="row g-3">
                    <div class="col-12">
                      <label class="form-label fw-semibold">Correo electrónico</label>
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-envelope-fill text-danger"></i></span>
                        <input type="email" class="form-control" placeholder="tucorreo@ejemplo.com" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label fw-semibold">Contraseña</label>
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-lock-fill text-danger"></i></span>
                        <input type="password" class="form-control" placeholder="••••••••" required>
                      </div>
                    </div>

                    <div class="col-12 text-center mt-3">
                      <a type="submit" class="btn text-white px-5 py-2 shadow" style="background-color:#8b0000;" href="dashboard">Iniciar Sesión</a>
                    </div>

                    <div class="col-12 text-center mt-3">
                      <a href="#" class="text-decoration-none text-danger">¿Olvidaste tu contraseña?</a>
                    </div>
                  </form>
                </div>

                <!-- ================= REGISTRO ================= -->
                <div class="tab-pane fade" id="pills-register">
                  <h3 class="fw-bold mb-4 text-center text-dark">Crea tu cuenta y registra tu vehículo</h3>
                  <form action="#" method="POST" class="row g-3">

                    <h5 class="fw-bold text-danger mt-3"><i class="bi bi-person-vcard-fill"></i> Datos personales</h5>

                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-person-fill text-danger"></i></span>
                        <input type="text" class="form-control" placeholder="Nombre completo" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-envelope-fill text-danger"></i></span>
                        <input type="email" class="form-control" placeholder="Correo electrónico" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-telephone-fill text-danger"></i></span>
                        <input type="tel" class="form-control" placeholder="Teléfono" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-geo-alt-fill text-danger"></i></span>
                        <input type="text" class="form-control" placeholder="Dirección" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-lock-fill text-danger"></i></span>
                        <input type="password" class="form-control" placeholder="Contraseña" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-shield-lock-fill text-danger"></i></span>
                        <input type="password" class="form-control" placeholder="Confirmar contraseña" required>
                      </div>
                    </div>

                    <hr class="my-3">

                    <h5 class="fw-bold text-danger mt-2"><i class="bi bi-car-front-fill"></i> Datos del vehículo</h5>

                    <div class="col-md-4">
                      <input type="text" class="form-control" placeholder="Placa (ABC123)" required>
                    </div>

                    <div class="col-md-4">
                      <input type="text" class="form-control" placeholder="Marca (Toyota, BMW...)" required>
                    </div>

                    <div class="col-md-4">
                      <input type="text" class="form-control" placeholder="Modelo (Corolla, X5...)" required>
                    </div>

                    <div class="col-md-4">
                      <input type="number" class="form-control" placeholder="Año (2025)" required>
                    </div>

                    <div class="col-md-4">
                      <select class="form-select">
                        <option selected disabled>Tipo</option>
                        <option>Sedan</option>
                        <option>SUV</option>
                        <option>Pickup</option>
                        <option>Deportivo</option>
                        <option>Camión</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <input type="text" class="form-control" placeholder="Color" required>
                    </div>

                    <div class="col-12">
                      <textarea rows="3" class="form-control" placeholder="Descripción o comentarios (estado, mantenimiento, etc.)"></textarea>
                    </div>

                    <div class="col-12 text-center mt-3">
                      <button type="submit" class="btn text-white px-5 py-2 shadow" style="background-color:#8b0000;">Registrar Cuenta</button>
                    </div>

                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
