<a href="index">volver</a>
<a href="<?PHP echo (base_url().'index.php/login/log_out') ?>">Cerrar sesion</a>
<br>
<form method="post" action="save">
Nombre: <input type="text" name="nombre"><br>
apepat: <input type="text" name="apepat"><br>
ciudad_id: <select name="ciudad_id">
    <?php foreach ($ciudad as $ciu) {?>
    <option value=<?php echo $ciu->ciudad_id ?>><?php echo $ciu->nombre; ?></option>
    <?php }?>
</select>
<br>
<input type="submit" value="guardar">
</form>
