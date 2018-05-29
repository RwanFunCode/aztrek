<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$project = getOneProject($id);
$list_members = getAllMembersByProject($id);
$list_pictures = getAllPicturesByProject($id);

 

getHeader($project["title"]);
?>

   <section class="travels ">
      <!-- Les voyages -->

      <!-- Voyage 01 -->
      <section class="travel travel_01">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-02.jpg" alt=""></a>
        </div>
        <article class="travel_bottom">
          <div class="interested">
            <h3>Intéressés</h3>
            <a href="#">25</a>
          </div>
          <div class="traveler">
            <h3>Participants</h3>
            <a href="#">8</a>
          </div>
          <div class="date">
            <a href="#">5 juillet</a>
            <a href="#">11 nuits</a>
          </div>
          <div class="price">
            <p>1 525 €</p>
          </div>


        </article>
      </section>

<?php getFooter(); ?>
