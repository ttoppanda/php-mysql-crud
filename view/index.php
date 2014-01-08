<h2>Listado de usuarios</h2>
<table summary="Usuario ">
    <caption>Usuarios</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->users as $value) {
            echo '<tr><td>' . $value['id'] . '</td>';
            echo '<td>' . $value['nombre'] . '</td>';
            echo '<td>' . $value['email'] . '</td>';
            echo '<td> <button data-id="' . $value['id'] . '" class="update_btn">Actualizar</button></td>';
            echo '<td><button data-id="' . $value['id'] . '">Eliminar</button></td></tr>';
        }
        ?>
    </tbody>    
</table>
<div id="container_pop_up"class="container_popup">
    <form method="post">
        <label class="input_label">Nombre</label>                
        <input name="nombre" placeholder="nombre" type="text" value="" maxlength="50"  required/>
        <label class="input_label">Nombre</label>                
        <input name="nombre" placeholder="nombre" type="text" value="" maxlength="50"  required/>
        <input class="btn btn-submit" id="submit" type="submit" value="Enviar"/>
    </form>
</div>
