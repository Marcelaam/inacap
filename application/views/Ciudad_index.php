<h1><u>Ciudades</u></h1><br>

<a href="<?php echo (base_url() .'index.php/ciudad/nuevo') ?>">Nueva ciudad</a><br>
<a href="<?PHP echo (base_url().'index.php/login/log_out') ?>">Cerrar sesion</a>
<br>
<table border="1">
    <thead>
    <th>ID</th>
    <th>Nombre</th>
   
    </thead>
    <tbody>
             <?php foreach ($Ciudad as $ci){ ?>
        <tr>
            <td> <?php echo $ci->ciudad_id;?> </td>
            <td> <?php echo $ci->nombre; ?></td>
            
            <td><a href="<?php echo 'Ciudad/delete/'.$ci->ciudad_id; ?>">Eliminar</a></td>
            <td><a href="<?php echo ( base_url(). '/index.php/ciudad/detail/' .$ci->ciudad_id) ?>">Ver Detalle</a></td>
            
            <td><a href=<?php echo (base_url() .'index.php/ciudad/edit/' . $ci->ciudad_id) ?>>Editar</td>
        </tr>
  <?php } ?>
    </tbody>
</table>


  baseurl(). /index.php/ciudad/edit/