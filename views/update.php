<?php
$title = 'Update  Robots';

ob_start();
//var_dump($robot);
?>
<p>Mis à jour de  robot </p>
<form action="index.php?action=updatefin" method="post">
    <div class="form-group">
    <label> ID  </label>
    <input type="text" class="form-control" name="id" value="<?php echo $robot->id ?>">
    </div>
    <div class="form-group">
        <label> Name </label>
        <input type="text" class="form-control" name="name" value="<?php echo $robot->name ?> ">
    </div>
    <div class="form-group">
    <label> description </label>
    <input type="text" class="form-control" name="description" value="<?php echo $robot->description ?>">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary my-2" value="Modifier" name="modifier">
    </div>
</form>
<?php
$content = ob_get_clean(); 

include_once 'views/layout.php';
?>
