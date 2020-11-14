<?php 

function tabla($titulos,$datos)
{
	echo '<table class="table">';
	
	echo $titulos;

	foreach ($datos as $fila) {
		echo "<tr>";
		foreach ($fila as $celda) {
			echo "<td> $celda </td>";
		}
		echo"<td>editar</td>";
		echo"<td>eliminar</td>";
		echo "</tr>";
	}
	echo '</table>';
}
