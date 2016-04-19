<h1><u>Lista de Usuarios</u></h1><br>

<a href=<?php echo (base_url() .'index.php/usuario/nuevo') ?>>Nuevo Usuario</a><br>
<a href="<?PHP echo (base_url().'index.php/login/log_out') ?>">Cerrar sesion</a>
<br>
<table border="1">
    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Ciudad</th>
    <th>Acciones</th>
    
    </thead>
    <tbody>
             <?php foreach ($Usuario as $data){ ?>
        <tr>
            <td> <?php echo $data->nombre; ?></td>
            <td> <?php echo $data->apepat; ?></td>
            <td> <?php echo $data->nomciudad; ?></td>
            <td><a href="<?php echo 'usuario/delete/'.$data->usuario_id; ?>">Eliminar</a></td>
            <td><a href="<?php echo 'usuario/detail/'.$data->usuario_id; ?>">Ver Detalle</a></td>
        </tr>
  <?php } ?>
    </tbody>
</table>
 

  