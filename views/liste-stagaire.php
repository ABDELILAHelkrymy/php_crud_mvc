<?php
$title = "Liste des stagaires";

ob_start();
?>
<a href="views/create_stagaire.php" class="btn btn-primary">New</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">UserName</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($stagaires as $stagaire) : ?>
            <tr>
                <th scope="row"><?php echo $stagaire->id; ?></th>
                <td><?php echo $stagaire->first_name; ?></td>
                <td><?php echo $stagaire->last_name; ?></td>
                <td><?php echo $stagaire->age; ?></td>
                <td><?php echo $stagaire->username; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $stagaire->id; ?>" class="btn btn-primary">Edit</a>
                    <a href="index.php?action=delete&id=<?php echo $stagaire->id; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>