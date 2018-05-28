<?php
//Appel des fonctions
require_once 'lib/functions.php';
//Appel DB
require_once 'model/database.php';
//Appel Accueil
getHeader("Accueil");
?>

  <main>

    <!-- On commence une partie explicative (capital gain) du site -->
    <section class="capital_gain_traveler ">

      <!-- AZTREK KEZAKO ? -->

      <ul >
        <!-- Trouvez votre voyage -->
        <li id="kezako_explorez">EXPLOREZ</li>

        <!-- Chatter entre vous -->
        <li id="kezako_discutez">DISCUTEZ</li>

        <!-- Réserver et partez -->
        <li id="kezako_voyagez">VOYAGEZ</li>

      </ul>
    </section>

<!-- filtre -->
<section class="filtre">

  <label for="menu-toggle">Votre séjour trié par <strong>Prix</strong></label>
  <input type="checkbox" id="menu-toggle"/>
  <ul id="menu">
    <li><a href="#"><strong>Recommandation</strong></a></li>
    <li><a href="#"><strong>Durée</strong></a></li>
    <li><a href="#"><strong>Départ</strong></a></li>
  </ul>

</section>



    <!-- </section> -->

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

      <!-- Voyage 02 -->
      <section class="travel travel_2">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top ">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-03.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 03 -->
      <section class="travel travel_03">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-04.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 04 -->
      <section class="travel travel_04">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-05.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 05 -->
      <section class="travel travel_05">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-06.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 06 -->
      <section class="travel travel_6">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-06.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 07 -->
      <section class="travel travel_07">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-07.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 08 -->
      <section class="travel travel_08">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-08.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 09 -->
      <section class="travel travel_09">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-09.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <!-- Voyage 10 -->
      <section class="travel travel_10">
        <!-- Navigation top travel il est possible de cliquer sur l'avatar ainsi que sur le nom du guide afin d'aller sur sa fiche -->
        <article class="travel_top">
          <a href="#"><img src="./images/photo/Avatar_connected.jpg" alt="avatar connected"></a>
          <div>
            <p>Partez avec <a href="#"><strong>Lucie</strong></a></p>
            <p>Au <a href="#"><strong>Salvador</strong></a></p>
          </div>
        </article>
        <div class="travel_img">
          <a href="#"><img src="./images/photo/Voyage_image-10.jpg" alt=""></a>
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

          <div class="">

          </div>
        </article>
      </section>

      <div class="pagination">
        <a href="#">&laquo;</a>
        <a class="active" href="#">1</a>
        <a href="#">2</a>
      </div>



    </section>
    <!-- Setion de mise en confiance de l'internaute -->
    <section class="trust">
      <h2>Nos garanties</h2>

      <ul>

        <!-- Service client -->
        <li><img src="./images/picto/trust_costumer_service_FM.svg" alt="service client du lundi au vendredi de 9h à 18h">
          <p>Service Client à votre écoute du lundi au vendredide 9h à 18h</p>
        </li>

        <!-- Accompte -->

        <li><img src="./images/picto/trust_piggy_bank_FM.svg" alt="Payer un accompte à la réservation et le solde à la fin du séjour">
          <p>Payez l’accompte à la réservation et le solde à la fin de votre séjour</p>
        </li>

        <!-- Paiement sécurisé -->
        <li><img src="./images/picto/trust_payment_FM.svg" alt="Paiement entièrement sécurisé">
          <p>Paiement entièrement sécurisé</p>
        </li>

      </ul>
    </section>

  </main>

<?php //Appel footer
getFooter()?>

