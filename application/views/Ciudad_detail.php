<h1><u>Ciudades</u></h1><br> 

<a href="<?PHP echo (base_url().'index.php/login/log_out') ?>">Cerrar sesion</a>
<br>
<table border="1">
    <thead>
    <th>Nombre</th>
    
    
    </thead>
    <tbody>
             <?php foreach ($Ciudad as $data){ ?>
        <tr>
            <td> <?php echo $data->nombre; ?></td>
           
          </tr>
  <?php } ?>
    </tbody>
</table>

