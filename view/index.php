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
            echo '<tr><td class="td_id">' . $value['id'] . '</td>';
            echo '<td class="td_name">' . $value['nombre'] . '</td>';
            echo '<td  class="td_email">' . $value['email'] . '</td>';
            echo '<td> <button data-id="' . $value['id'] . '" class="update_btn">Actualizar</button></td>';
            echo '<td><button data-id="' . $value['id'] . '">Eliminar</button></td></tr>';
        }
        ?>
    </tbody>    
</table>
<div id="container_pop_up"class="container_popup">
    <form method="post" action="">
        <span id="close">X</span>
        <h3>Actualizar usuario</h3>
        <input id="input_id" name="id"type="hidden" value="" >
        <label class="input_label">Nombre</label>                
        <input id="input_nombre" name="nombre" placeholder="Nombre" type="text" value="" maxlength="50"  required/>
        <label class="input_label">Email</label>                
        <input id="input_email" name="email" placeholder="Email" type="text" value="" maxlength="50"  required/>
        <input id="submit" type="submit" value="Actualizar"/>
    </form>
</div>
