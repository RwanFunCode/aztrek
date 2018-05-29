<?php $utilisateur = getCurrentUser(); ?>
<nav class="nav_top ">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Toolbox</a></li>
        <li><a href="#">Album</a></li>
        <li><a href="#">Notifiction</a></li>
        <li><a href="#">Map</a></li>
    </ul>
    <!-- Connection avatar -->
    <div class="log">
        <?php if (isset($utilisateur["id"])) : ?>
            <a href="#"><img src="./images/photo/<?php echo $utilisateur["avatar"]; ?>" alt="avatar"></a>
        <?php else: ?>
            <a href="#"><img src="./images/photo/volcan-1.jpg" alt="avatar"></a>
        <?php endif; ?>
    </div>

</nav><?php

