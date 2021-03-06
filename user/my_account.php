<?php
require_once '../model/database.php';

$id = $_GET["id"];
$member = getOneEntity("member", $id);

require_once '../../layout/header.php';
?>

<h1>Nouveau membre</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $member["lastname"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $member["firstname"]; ?> "class="form-control">
    </div>
    <div class="form-group">
        <label for="firstname">Sexe</label>
        <input type="text" id="firstname" name="Sexe" value="<?php echo $member["Sexe"]; ?> "class="form-control">
    </div>
    <div class="form-group">
        <label for="firstname">Email</label>
        <input type="text" id="firstname" name="Email" value="<?php echo $member["Email"]; ?> "class="form-control">
    </div>
    <div class="form-group">
        <label for="address">zip</label>
        <input type="text" id="firstname" name="address" value="<?php echo $member["address"]; ?> "class="form-control">
    </div>
    <div class="form-group">
        <label for="zip">zip</label>
        <input type="text" id="firstname" name="zip" value="<?php echo $member["zip"]; ?> "class="form-control">
    </div>
    <div class="form-group">
        <label for="country">zip</label>
        <input type="text" id="firstname" name="country" value="<?php echo $member["country"]; ?> "class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" accept="image/*" name="picture" class="form-control">
          <?php if (!empty($member["picture"])) : ?>
            <img src="../../../uploads/<?php echo $member["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $member["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>



<?php require_once '../../layout/footer.php'; ?>
