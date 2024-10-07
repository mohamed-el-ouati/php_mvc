<?php
$title = 'Liste des Robots';

ob_start();
?>
<a href='index.php?action=create' class= 'btn btn-primary'>Ajouter </a>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($robots as $robot): ?>
            <tr>
                <td><?= htmlspecialchars($robot->id) ?></td>
                <td><?= htmlspecialchars($robot->name) ?></td>
                <td><?= htmlspecialchars($robot->description) ?></td>
                <td>
                    <a href="index.php?action=update&id=<?php echo $robot->id?>" class="btn btn-success btn-sm">Modifier</a>
                    <a href="index.php?action=delete&id=<?php echo $robot->id?>" class="btn btn-danger btn-sm">Supprimer Robot</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
$content = ob_get_clean(); 

include_once 'views/layout.php';
?>
