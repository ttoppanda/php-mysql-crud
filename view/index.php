<h2>Listado de usuarios</h2>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Email</th>
	</tr>
	<?php
		foreach ($this->users as  $value) {
			echo '<tr>';
				echo '<td>';echo $value['id'];echo '</td>';
				echo '<td>';echo $value['nombre'];echo '</td>';
				echo '<td>';echo $value['email'];echo '</td>';
				echo '<td>';
					echo '<button data-id="'. $value['id'] .'">Actualizar</button>';
				echo '</td>';
				echo '<td>';
					echo '<button data-id="'. $value['id'] .'">Eliminar</button>';
				echo '</td>';
			echo '</tr>';
		}		
		
	?>
</table>
