<form method="post" action="../update">
    <a href="<?PHP echo (base_url().'index.php/login/log_out') ?>">Cerrar sesion</a>
<br>
    <?php foreach($ciudad as $ciu){ ?>
    Id: <input type="text" name="ciudad_id" value=<?php echo $ciu->ciudad_id; ?>><br>
    Nombre:<input type="text" name="nombre" value=<?php echo $ciu->nombre; ?>><br>
    <br>
    <input type="submit" value="Editar Ciudad">
    <?php }?>
</form>




