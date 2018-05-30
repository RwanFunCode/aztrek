<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$project = getOneProject($id);

// $list_pictures = getAllPicturesByProject($id);

 

getHeader($project["title"]);
?>
          <section class="">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
            <a href="#"><img src="images/photo/<?php echo $project["avatar"]; ?>" alt="<?php echo $project["firstname"]; ?>"></a>
          
            <div>
              <p>Partez avec <a href="#"><strong><?php echo $project["firstname"]; ?></strong></a></p>
            <p>Au <a href="#"><strong> <?php echo $project["country"]; ?></strong></a></p>
          </div>
        </article>
        <div class="travel_img">
            <a href="project.php?id=<?php echo $project["id"]; ?>"><img src="images/photo/<?php echo $project["picture_princ"]; ?>" alt="<?php echo $project["title"]; ?>"></a>
        </div>
        <article class="travel_bottom">
          <div class="interested">
            <h3>Intéressés</h3>
            <a href="#"><?php echo $project["interested"] ?></a>
          </div>
          <div class="traveler">
            <h3>Participants</h3>
            <a href="#"><?php echo $project["duration"] ?></a>
          </div>
          <div class="date">
              <a href="#"><?php echo $project["depart"] ?></a>
            <a href="#"><?php echo $project["nbr_place"] ?>Places</a>
          </div>
          <div class="price">
              <p><?php echo $project["price"];  ?> €</p>
          </div>
            
            <p><?php echo $project["description"]; ?></p>
        </article>
      </section>

<?php getFooter(); ?>
