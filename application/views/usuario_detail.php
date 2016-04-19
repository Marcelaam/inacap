<h1><u>Lista de Usuarios</u></h1><br> 

<a href="<?PHP echo (base_url().'index.php/login/log_out') ?>">Cerrar sesion</a>
<br>
<a href="usuario/nuevo">Nuevo Usuario</a><br>

<table border="1">
    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Acciones</th>
    
    </thead>
    <tbody>
             <?php foreach ($Usuario as $data){ ?>
        <tr>
            <td> <?php echo $data->nombre; ?></td>
            <td> <?php echo $data->apepat; ?></td>
            
        </tr>
  <?php } ?>
    </tbody>
</table>


