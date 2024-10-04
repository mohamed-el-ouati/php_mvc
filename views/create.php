<?php
$title = 'Ajouter Robots';

ob_start();
?>
<form action="store.php" method="post">
    <div class="form-group">
        <label> Name </label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
    <label> ID Powercat </label>
    <input type="text" class="form-control" name="id_powercat">
    </div>
    <div class="form-group">
    <label> description </label>
    <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
    </div>
</form>
<?php
$content = ob_get_clean(); 
include_once 'views/layout.php';
?>
