<?php
$title = "Update your Informations";

ob_start();
?>

<form action="index.php?action=update" method="post">
    <div class="form-group" style="display: none;">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="id" name="id" value="<?= $stagaire->id?>">
    </div>
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" value="<?= $stagaire->first_name?>">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="<?= $stagaire->last_name?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" value="<?= $stagaire->age?>">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?= $stagaire->username?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="<?= $stagaire->password?>">
    </div>
    <button type="submit" name="edit" class="btn btn-primary my-2">Save</button>


<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php'; ?>