<?php


class ControladorRegalo{

    public static function mostrarRegalo($id) {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $regalos = RegaloBD::getRegalos($id);

        //Llamar a una vista para pintar esas películas
        VistaRegalosMostrarTodos::render($regalos);
    }

    public static function insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario){
        RegaloBD::insertarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idUsuario);
    }

    public static function borrarRegalo($id){
        RegaloBD::borrarRegalo($id);
    }

    public static function modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idRegalo){
        RegaloBD::modificarRegalo($nombre, $destinatario, $precio, $estado, $anio, $idRegalo);
    }


    public static function filtrarRegalo($anio){
        $regalo = RegaloBD::filtrarRegalo($anio);
        VistaRegalosMostrarTodos::render($regalo);
    }

    public static function generarPDF($id_usuario) {
        require './vendor/autoload.php';
        $regalos = RegaloBD::getRegalos($id_usuario);

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->setCreator(PDF_CREATOR);
        $pdf->setAuthor('Emilio');
        $pdf->setTitle('TCPDF Example 001');
        $pdf->setSubject('TCPDF Tutorial');
        $pdf->setKeywords('TCPDF, PDF, example, test, guide');

        // set default header data
        $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
        $pdf->setFooterData(array(0,64,0), array(0,64,128));

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->setHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->setFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->setFont('dejavusans', '', 14, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();

        // set text shadow effect
        $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

        // Set some content to print



        $html = "
        <h1>REGALOS</h1>
        <i>Todos los regalos</i><br><br>";
        $html .= '<table class="table table-striped">';
        $html .= "<tr><td>" . strtoupper("Nombre") . "</td>";
        $html .= "<td>" . strtoupper("Destinatario") . "</td>";
        $html .= "<td>" . strtoupper("Precio") . "</td>";
        $html .= "<td>" . strtoupper("AÑO") . "</td></tr>";        
        foreach($regalos as $regalo) {
            $html .= "<tr>";
            $html .= "<td>".$regalo->getNombre()."</td>";
            $html .= "<td>" . $regalo->getDestinatario() . "</td>";
            $html .= "<td>" . $regalo->getPrecio() . "</td>";
            $html .= "<td>" . $regalo->getAnio() . "</td>";
            $html .= "</tr>";
        }

        $html .= "</table>";









        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        // ---------------------------------------------------------


        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $flujo = $pdf->Output('ejemplo.pdf', 'S');
        file_put_contents("ejemplo.pdf", $flujo);

        //============================================================+
        // END OF FILE
        //============================================================+
            
            
        }
}
