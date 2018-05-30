<?php $utilisateur = getCurrentUser(); ?>
<nav class="nav_top ">
    <ul>
        <li><a href="#">Home</a></li>
          <?php if (isset($utilisateur["id"])) : ?>   
        <li><a href="">Album</a></li>        
        <?php endif; ?>
        <li><a href="#">Notifiction</a></li>
        <?php if (isset($utilisateur["id"])) : ?>   
        <li><a href="">Mes voyages</a></li>        
        <?php endif; ?>
        <?php if (isset($utilisateur["id"])) : ?>
        <ul>
        <li><a href="">Mon compte</a>
         </li>        
        <?php else: ?>
        <li><a href="">Login</a></li>        
        <?php endif; ?>
       </ul>
    <!-- Connection avatar -->
    <div class="log">
        <?php if (isset($utilisateur["id"])) : ?>
            <a href="./admin/login.php"><img src="./images/photo/<?php echo $utilisateur["avatar"]; ?>" alt="avatar"></a>
        <?php else: ?>
            <a href="./admin/login.php"><img src="./images/photo/volcan-1.jpg" alt="avatar"></a>
        <?php endif; ?>
    </div>

</nav><?php

