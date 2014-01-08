<h2>Listado de usuarios</h2>
<table>
     <caption>Usuarios</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->users as $value) {
            echo '<tr><td>' . $value['id'] . '</td>';
            echo '<td>' . $value['nombre'] . '</td>';
            echo '<td>' . $value['email'] . '</td>';
            echo '<td> <button data-id="' . $value['id'] . '">Actualizar</button></td>';
            echo '<td><button data-id="' . $value['id'] . '">Eliminar</button></td></tr>';
        }
        ?>
    </tbody>    
</table>
