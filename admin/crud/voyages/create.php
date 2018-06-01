<?php
require_once '../../../model/database.php';

$liste_pays = getAllPays();
$liste_themes = getAllThemes();

require_once '../../layout/header.php';
?>


<h1>Nouveau voyage</h1>



<form action="create_query.php" method="post" enctype="multipart/form-data">
    <label for="pays">Pays</label>
    <select class="form-control" name="country_id" id="pays">
        <?php foreach ($liste_pays as $pays): ?>
            <option value="<?php echo $pays['id']; ?>"><?php echo $pays['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <div class="form-group">
        <label for="title_travel">Titre du sejour</label>
        <input type="text" id="title_travel" name="title_travel" class="form-control">
    </div>
    <label for="theme">Thème</label>
    <select class="form-control" name="theme_id" id="theme">
        <?php foreach ($liste_themes as $theme): ?>
            <option value="<?php echo $theme['id']; ?>"><?php echo $theme['label']; ?></option>
        <?php endforeach; ?>
    </select>
    <label class="form-group" for="level">LEVEL</label>
    <select class="form-control" name="level" id="level">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <div class="form-group">
        <label for="date_depart">Date de départ</label> <br>
        <input type="date" name="date_depart">
    </div>
    <div class="form-group">
        <label for="duration">Durée</label>
        <select class="form-control" name="duration" id="duration">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="5">6</option>
            <option value="5">7</option>
            <option value="5">8</option>
            <option value="5">9</option>
            <option value="5">10</option>
            <option value="5">11</option>
            <option value="5">12</option>
            <option value="5">14</option>
            <option value="5">15</option>
        </select>
    </div>
    <div class="form-group">
        <label for="picture_princ">Photo</label>
        <input type="file" id="picture" accept="image/*" name="picture" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Tarif</label>
        <input type="text" id="price"  name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="nbr_place">Nombre de place</label>
        <input type="number" id="nbr_place"  name="nbr_place" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name= "description" class="form-control" rows="10" id="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>



<?php require_once '../../layout/footer.php'; ?>
