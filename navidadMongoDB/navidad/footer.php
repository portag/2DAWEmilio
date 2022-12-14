<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin</title>

    <!-- Custom fonts for this template-->
    <link href="./estilo/v2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./estilo/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="./estilo/v2/jquery/jquery.min.js"></script>
    <script src="./estilo/v2/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            color: var(--bs-btn-active-color);
            background-color: #212529;
            border-color: var(--bs-btn-active-border-color);
        }
    </style>
</head>

<body>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span class="text-light font-weight-bold">BIENVENIDO <?=strtoupper(unserialize($_SESSION["usuario"])->getNick()) ?></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>






    <!-- Core plugin JavaScript-->
    <script src="./estilo/v2/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./estilo/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./estilo/v2/datatables/jquery.dataTables.min.js"></script>
    <script src="./estilo/v2/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="./estilo/v2/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./estilo/js/demo/chart-area-demo.js"></script>

    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';


    </script>
    <script src="./estilo/js/demo/chart-bar-demo.js"></script>


    <!-- MODAL INSERTAR REGALO -->
    <div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Regalo</h5>
                </div>
                <div class="modal-body">
                    <form id='formInsertarTarea'>

                        <div class='mb-3'>
                            <label for='nombre' class='form-label'>Nombre</label> <br>

                            
                           <input type="text" name="nombre" class="form-control">
                                
                        </div>


                        <div class='mb-3'>
                            <label for='destinatario' class='form-label'>Destinatario</label> <br>
                            <input type="text" name="destinatario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="precio" name="precio">Precio</label>
                            <input type="text" name="precio" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="anio" name="anio">Año</label>
                            <input type="text" name="anio" class="form-control" maxlength="4">
                        </div>

                        <input type="hidden" name="accion" value="insertar">
                        <?php
                            echo '<input type="hidden" name="idUsuario" value="'.$id=unserialize($_SESSION["usuario"])->getId().'">';

                        ?>
                        


                        <div class='mb-3'>
                            <input type="radio" class="btn-check" name="estado" value='pendiente' id="option1" autocomplete="off">
                            <label class="btn btn-secondary" for="option1">Pendiente</label>

                            <input type="radio" class="btn-check" name="estado" value='comprado' id="option2" autocomplete="off">
                            <label class="btn btn-secondary" for="option2">Comprado</label>

                            <input type="radio" class="btn-check" name="estado" value='envuelto' id="option3" autocomplete="off">
                            <label class="btn btn-secondary" for="option3">Envuelto</label>

                            <input type="radio" class="btn-check" name="estado" value='entregado' id="option4" autocomplete="off">
                            <label class="btn btn-secondary" for="option4">Entregado</label>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary hidden-xs" data-bs-dismiss="modal">Close</button>-->
                    <button type='submit' class='btn btn-primary' form="formInsertarTarea" formaction="enrutador.php" formmethod="get">Enviar</button>
                </div>
            </div>
        </div>
    </div>

        






    <!-- MODAL INSERTAR ENLACE -->
    <div class="modal fade" id="insertarEnlace" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Enlace</h5>
                </div>
                <div class="modal-body">
                    <form id='formInsertarEnlace'>

                        <div class='mb-3'>
                            <label for='nombre' class='form-label'>Nombre</label> <br>

                            
                           <input type="text" name="nombre" class="form-control">
                                
                        </div>


                        <div class='mb-3'>
                            <label for='enlace' class='form-label'>Enlace Web</label> <br>
                            <input type="text" name="enlace" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="precio" name="precio">Precio</label>
                            <input type="text" name="precio" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="imagen" name="imagen">Imagen</label>
                            <input type="text" name="imagen" class="form-control">
                        </div>
                
                        <div class="mb-3">
                            <label for="regalo" name="regalo">Regalo</label>
                            <select name="regalo" id="" class="form-control">
                                <option selected value="">--Selecciona--</option>
                                <?php
                                    include_once("./modelo/RegaloBD.php");
                                    $id = unserialize($_SESSION["usuario"])->getId();
                                    $regalos = RegaloBD::getRegalos($id);
                                    foreach($regalos as $regalo){
                                        echo "<option name='regalo' value='" . $regalo->getId() . "'>" . $regalo->getNombre() . "</option>";
                                    }
                                ?>
                            </select>

                        </div>

                        <input type="hidden" name="accion" value="insertarEn">
                        


                        <div class='mb-3'>
                            <label for="prioridad">Prioridad</label>
                            <select class="form-control" name="prioridad" id="">
                                <option value="">--Selecciona--</option>
                                <option name="prioridad" value="1">Baja</option>
                                <option name="prioridad" value="2">Media</option>
                                <option name="prioridad" value="3">Alta</option>
                            </select>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary hidden-xs" data-bs-dismiss="modal">Close</button>-->
                    <button type='submit' class='btn btn-primary' form="formInsertarEnlace" formaction="enrutador.php" formmethod="get">Enviar</button>
                </div>
            </div>
        </div>
    </div>



</body>

</html>