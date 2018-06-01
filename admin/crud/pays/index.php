<?php
require_once '../../../model/database.php';

$list_travel = getAllProjects();

require_once '../../layout/header.php';
?>

<h1>Gestion des membres</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i>Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Titre</th>
            <th>Pays</th>
            <th>Photo</th>
            <th>Modifier / Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_travel as $travel) : ?>
            <tr>
                <td><?php echo $travel["title"]; ?></td>
                <td><?php echo $travel["country"]; ?></td>
                <?php $picture = (!empty($travel["picture_princ"])) ? "../../../images/photo/" . $travel["picture_princ"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td>
                    <a href="update.php?id=<?php echo $travel["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $travel["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>