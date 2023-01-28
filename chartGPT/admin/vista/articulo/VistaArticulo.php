<?php

require_once('vendor/autoload.php');

class VistaArticulo
{


    public static function render($texto)
    {

        $client = new \GuzzleHttp\Client();
        $textoArticulo = "Escribe un artículo sobre " . $texto;

        $response = $client->request('POST', 'https://api.openai.com/v1/completions', [
            'body' => '{"model": "text-davinci-003", "prompt": "' . $textoArticulo . '", "temperature": 0, "max_tokens": 1000, "n": 1}',
            'headers' => [
                'Authorization' => 'Bearer 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',
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);

        $respuesta = $response->getBody();

        $respuestaJSON = json_decode($respuesta);

        $parrafo = $respuestaJSON->choices[0]->text;

        $textoImagen = $texto;
        $response = $client->request('POST', 'https://api.openai.com/v1/images/generations', [
            'body' => '{"prompt": "' . $textoImagen . '", "size": "1024x1024", "n": 1}',
            'headers' => [
                'Authorization' => 'Bearer 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',
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);

        $respuesta = $response->getBody();

        $respuestaJSON = json_decode($respuesta);

        $imagen = $respuestaJSON->data[0]->url;

        $_SESSION["imagen"] = $respuestaJSON->data[0]->url;



        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>
        </head>

        <style>
            body {
                background-color: whitesmoke;
            }
            a{
                text-decoration: none;
            }
        </style>

        <body>
            <!-- Image and text -->
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-right-dots-fill mx-4" viewBox="0 0 16 16">
                        <path
                            d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </svg>
                    Tu resultado
                </a>
            </nav>

            <div class="d-flex justify-content-center mt-5 mb-5">

                <div class="card" style="width: 48rem;">

                <?php
                echo '<img class="card-img-top" src="'.$imagen.'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">'.$texto.'</h5>
                        <p class="card-text">'.$parrafo.'</p>';
                ?>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center mt-5 mb-5">
                <form action="" class="mx-2">
                    <input type="hidden" name="accion" value="guardar" id="">
                    <?php
                    echo '<a href="enrutador.php?accion=guardar&titulo='.$texto.'&texto='.$parrafo.'&imagen='.$imagen.'" class="btn btn-info">GUARDAR</a>';

                    ?>
                </form>

                <form action="">
                    <input type="hidden" name="accion" value="mostrarForm" id="">
                    <button class="btn btn-warning">GENERAR OTRO</button>
                </form>
            </div>








            <!-- Footer -->
            <footer class="text-center text-lg-start bg-white text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-gem me-3 text-secondary"></i>Company name
                                </h6>
                                <p>
                                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Angular</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">React</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Vue</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Laravel</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Pricing</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Settings</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Orders</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Help</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                                <p>
                                    <i class="fas fa-envelope me-3 text-secondary"></i>
                                    info@example.com
                                </p>
                                <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                    © 2021 Copyright:
                    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </body>

        </html>

        <?php

    }


}


?>