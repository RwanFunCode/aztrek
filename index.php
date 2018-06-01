<?php
//Appel des fonctions
require_once 'lib/functions.php';
//Appel DB
require_once 'model/database.php';

//Déclaration variable
$list_projects = getAllProjects();
$liste_pays = getAllPays();
$liste_themes = getAllThemes();

//Appel Accueil
getHeader("Accueil");
getCapitalGain();
?>

<!-- filtre -->
<section class="filtre">
    <label for="menu-toggle">Vos séjours triés par <strong>Prix</strong></label>
    <input type="checkbox" id="menu-toggle"/>
    <ul id="menu">
        <li><a href="#"><strong>Recommandation</strong></a></li>
        <li><a href="#"><strong>Durée</strong></a></li>
        <li><a href="#"><strong>Départ</strong></a></li>
    </ul>
</section>

<!-- loop projects -->
<div >
    <?php foreach ($liste_pays as $pays): ?>
        <li>
            <a href="pays.php?id=<?php echo $pays['id']; ?>">
                <button type="button" class="btn btn-light"><?php echo $pays['name']; ?></button>
            </a>
        </li>
    <?php endforeach; ?>
</div>

<div>
     <?php foreach ($liste_themes as $themes): ?>
        <li>
            <a href="pays.php?id=<?php echo $themes['label']; ?>">
                <button type="button" class="btn btn-light"><?php echo $themes['label']; ?></button>
            </a>
        </li>
    <?php endforeach; ?>
</div>
<div class="actions">
    <?php foreach ($list_projects as $project) : ?>
        <?php include 'include/project_inc.php'; ?>
    <?php endforeach; ?>
</div>
</section>

<div class="pagination">
    <a href="#">&laquo;</a>
    <a class="active" href="#">1</a>
    <a href="#">2</a>
</div>
<?php
//Appel trust
getTrust();

//Appel footer
getFooter();
?>

