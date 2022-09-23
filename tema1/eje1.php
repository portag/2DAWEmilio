<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
			<?php
				echo "Primer ejemplo";

				echo "<table>";
				$contador = 1;
				for($i=0; $i<5; $i++){
					echo "<tr>";

					for($j=0; $j<3; $j++){
						echo "<td>" . $contador . "</td>";
						$contador++;
						
					}
					echo "</tr>";
				}
				echo "</table>"
			?>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>
