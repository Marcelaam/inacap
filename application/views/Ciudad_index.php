<h1><u>Ciudades</u></h1><br>

<a href="Ciudad/nuevo">Nueva ciudad</a><br>

<table border="1">
    <thead>
    <th>ID</th>
    <th>Nombre</th>
   
    </thead>
    <tbody>
             <?php foreach ($Ciudad as $data){ ?>
        <tr>
            <td> <?php echo $data->ciudad_id;?> </td>
            <td> <?php echo $data->nombre; ?></td>
            
            <td><a href="<?php echo 'Ciudad/delete/'.$data->ciudad_id; ?>">Eliminar</a></td>
            <td><a href="<?php echo 'Ciudad/detail/'.$data->ciudad_id; ?>">Ver Detalle</a></td>
        </tr>
  <?php } ?>
    </tbody>
</table>
