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
    <form method="post" action="index.php?c=index&m=actualizar">
        <span id="close">X</span>
        <h3>Actualizar usuario</h3>
        <input name="id"type="hidden" value="" >
        <label class="input_label">Nombre</label>                
        <input name="nombre" placeholder="Nombre" type="text" value="" maxlength="50"  required/>
        <label class="input_label">Email</label>                
        <input name="email" placeholder="Email" type="text" value="" maxlength="50"  required/>
        <input id="submit" type="submit" value="Actualizar"/>
    </form>
</div>
