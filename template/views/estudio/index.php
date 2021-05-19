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
    <form action="<?php echo URL.'employee/add'; ?>" method="POST">
        <label for="">fecha</label>
        <input type="date" name="nombres" id="">  
        <br>  
        <label for="">trabajador</label>
        <select name="" id="">
            <option value="">trabajador 1</option>
            <option value="">trabajador 2</option>
            <option value="">trabajador 3</option>
        </select> 
        <br>
        <label for="">cultivo</label>
        <select name="" id="">
            <option value="">Cultivo 1</option>
            <option value="">Cultivo 2</option>
            <option value="">Cultivo 3</option>
        </select> 
        <br>
        <input type="submit" value="Registrar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>