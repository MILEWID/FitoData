<?php require_once INCLUDES . 'header.php' ?>
<!-- nav bar para el inicio de Seción -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="col-1">
      <img src="<?php echo IMAGES . 'logo.png'; ?>" class="navbar-brand" href="#">></img>
    </div>
    <div class="col-7">
      <h2 class=>FitoData</h2>
    </div>
    <div class="col-2">
      <div class="collapse navbar-collapse " id="navbarNav">

        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
          <a class="nav-link " href="#">Iniciar Sesión</a>
        </button>
      </div>
    </div>
  </div>
</nav>
<div>
  <img class="home-slider" src="<?php echo IMAGES . 'slider.png'; ?>" alt="">
</div>

<!-- modal par aloguearse -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo URL.'login/login'; ?>" method="POST" class="row g-3 needs-validation">
          <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Correo:</label>
            <input type="email" name="logincorreo" class="form-control" id="validationCustom01" required>
            <div class="valid-feedback">
              correcto
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationCustom03" class="form-label">Contraseña</label>
            <input type="password" name="logincontrasenia" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              proporcione una contraseña válida
            </div>
          </div>
        </form>
        <div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>l