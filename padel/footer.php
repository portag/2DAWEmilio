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
                <span class="text-light font-weight-bold">BIENVENIDO <?=strtoupper(unserialize($_SESSION["jugador"])->getApodo()) ?></span>
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


    <!-- MODAL INSERTAR PARTIDA -->
    <div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva partida</h5>
                </div>
                <div class="modal-body">
                    <form id='formInsertarTarea'>

                        <div class='mb-3'>
                            <label for='fecha' class='form-label'>Fecha</label> <br>

                            
                           <input type="date" name="fecha" class="form-control">
                                
                        </div>


                        <div class='mb-3'>
                            <label for='hora' class='form-label'>Hora</label> <br>
                            <input type="text" name="hora" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="ciudad" name="ciudad">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="lugar" name="lugar">Lugar</label>
                            <input type="text" name="lugar" class="form-control">
                        </div>

                        <input type="hidden" name="accion" value="insertar">
                        
                        


                        <div class='mb-3'>
                            <input type="radio" class="btn-check" name="estado" value='Cubierto' id="option1" autocomplete="off">
                            <label class="btn btn-secondary" for="option1">Cubierto</label>

                            <input type="radio" class="btn-check" name="estado" value='Descubierto' id="option2" autocomplete="off">
                            <label class="btn btn-secondary" for="option2">Descubierto</label>
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



</body>

</html>