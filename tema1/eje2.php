<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
			<?php
				$numero = 6;

                for($i = 1; $i <=10; $i++){
                    echo $numero . "*" . $i . " = " . $numero*$i . "<br>";
                }
			?>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>