<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$guide = getGuideUser($id);
$pays = getOneEntity("country", $id);
// Récupérer la liste des séjours d'un pays
$travel_pays = getTravelPays($id);
$project = getOneProject($id);
getHeader($pays["name"]);
?>

<h2><?php echo $pays["name"] ?></h2>

<!-- foreach pour afficher la liste des séjours du pays -->
 <?php foreach ($travel_pays as $travel): ?>
        </section>
          <section class="">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          
            <div>
              <p>Partez avec <a href="#"><strong><?php echo $guide["firstname"]; ?></strong></a></p>
          </div>
        </article>
        <div class="travel_img">
            <a href="project.php?id=<?php echo $travel["id"]; ?>"><img src="images/photo/<?php echo $travel["picture_princ"]; ?>" alt="<?php echo $project["title"]; ?>"></a>
        </div>
        <article class="travel_bottom">
          <div class="interested">
            <h3>Intéressés</h3>
            <a href="#"><?php echo $travel["interested"] ?></a>
          </div>
          <div class="traveler">
            <h3>Participants</h3>
            <a href="#"><?php echo $project["duration"] ?></a>
          </div>
          <div class="date">
              <a href="#"><?php echo $project["depart"] ?></a>
            <a href="#"><?php echo $travel["nbr_place"] ?>Places</a>
          </div>
          <div class="price">
              <p><?php echo $travel["price"];  ?> €</p>
          </div>
            
            <p><?php echo $travel["description"]; ?></p>
        </article>
      </section>
    <?php endforeach; ?>

<?php getFooter(); ?>