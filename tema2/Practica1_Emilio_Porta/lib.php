<?php

function pintarFormulario()
{
    echo '<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="controlador.php" method="post">



                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                name = "email"
                                                placeholder="Enter Email Address...">
                                        </div>


                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" 
                                            name="accion" id="exampleInputPassword" value="login">
                                        </div>



                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            name="password"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>';
}


function addProyecto(&$id, &$nombre, &$inicio, &$final, &$dia, &$porcentaje, &$importancia)
{

    array_push($_SESSION["misProyectos"], [
        "id" => $id, "nombre" => $nombre, "fechaInicio" => $inicio, "fechaFin" => $final,
        "diasTranscurridos" => $dia, "porcentaje" => $porcentaje, "importancia" => $importancia
    ]);
}



function eliminarTodo()
{
    $vaciar=array();
    $_SESSION["misProyectos"]=$vaciar;
    
}


function eliminarElemento(&$id)
{
    foreach ($_SESSION["misProyectos"] as $clave => $valor) {

        if ($id == $clave) {
            unset($_SESSION["misProyectos"][$clave]);
        }
    }
}


function mostrarDato(&$id)
{
    $dato=false;
    foreach ($_SESSION["misProyectos"] as $clave => $valor) {

        if ($id == $clave) {
            $dato=true;
        }
    }
    
    return $dato;
}
