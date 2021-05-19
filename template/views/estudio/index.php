<?php
$sectores = $params[1];
$trabajadores = $params[0];
// var_dump($trabajadores);
// die;

require_once INCLUDES . 'header.php' ?>

<body>
    <!-- nav bar para el inicio de Seción -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="col-1">
                <img src="<?php echo IMAGES . "logo.png" ?>" class="navbar-brand" href="#">></img>
            </div>
            <div class="col-7">
                <h2 class=>FitoData</h2>
            </div>
            <div class="col-2">
                <div class="collapse navbar-collapse " id="navbarNav">

                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a class="nav-link " href="#">Usuario Coordinador</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="container">
            <div class="col-6">
                <h2> INGRESO DE DATOS DEL ESTUDIO </h2>
                <form method="POST" action="<?php echo URL.'estudio/add'; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha </label>
                        <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Trabajador </label>
                        <br>
                        <select name="idtrabajador" id="">
                            <option value="" selected disabled>Seleccione uno</option>
                            <?php foreach ($trabajadores as $key => $trbajador) : ?>
                                <option class="form-control" value="<?php echo $trbajador["id_trabajador"]; ?>"><?php echo "{$trbajador["apellidos"]} {$trbajador["nombres"]}"; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sector </label>
                        <br>
                        <select name="idcultivo" id="">
                            <option value="" selected disabled>Seleccione uno</option>
                            <?php foreach ($sectores as $key => $sector) : ?>
                                <option class="form-control" value="<?php echo $sector["id_sector"]; ?>"><?php echo "{$sector["nombre"]}"; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar Datos </button>
                </form>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>