<?php require_once INCLUDES . 'header.php' ?>
<body>
    <!-- nav bar para el inicio de Seción -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class ="container">
           <div class="col-1">
            <img src= "<?php echo IMAGES."logo.png"?>" class="navbar-brand" href="#">></img>
           </div>
           <div class="col-7">
            <h2 class=>FitoData</h2>
           </div>
           <div class="col-2">
            <div class="collapse navbar-collapse " id="navbarNav" >
        
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a class="nav-link "  href="#">Usuario Coordinador</a>
                </button>
          </div>
           </div>
        </div>
      </nav>

  <div class="container">
  <div class="container">
    <div class="col-6">
    <h2> INGRESO DE DATOS DEL ESTUDIO </h2>
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha </label>
    <input type="date" class="form-control" name="fecha" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <label for="exampleInputEmail1">Trabajador </label>
    <input type="text" class="form-control" name="trabajador"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <label for="exampleInputEmail1">Cultivo </label>
    <input type="text" class="form-control" name="cultivo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Guardar Datos </button>
</form>
    </div>
  </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>