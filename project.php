<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$project = getOneProject($id);


$guide = getGuideUser($id);

// $list_pictures = getAllPicturesByProject($id);

 

getHeader($project["title"]);
?>

<section>
    <article class="guide">
        <a href="guide.php"><img src="images/photo/<?php echo $guide["avatar"]; ?>" alt="<?php echo $guide["firstname"]; ?>"></a>
                        <a href="guide.php">
                        <h2>Guide : <?php echo  $guide["firstname"]; ?></h2>
                        </a>
                        <h3>Pays : <?php echo  $project["country"]; ?></h3>
                                             
    </article>
</section>
          <section class="">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          
            <div>
              <p>Partez avec <a href="#"><strong><?php echo $guide["firstname"]; ?></strong></a></p>
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
