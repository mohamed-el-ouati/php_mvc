<?php
$title = 'Supprimer  Robots';

ob_start();
//var_dump($id);

?>

<p>Vous voulez vous vraiment supprimer le robot ??</p>
<a href="index.php?action=destroy&id=<?php echo $id?>" class="btn btn-danger" > Valider la suppresion </a>
<a href="index.php?action=liste" class="btn btn-warning" > Annuler la suppresion </a>
<?php
$content = ob_get_clean(); 

include_once 'views/layout.php';
?>
