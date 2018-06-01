<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?php echo (CURRENT_URL == ADMIN_URL) ? "active" : ""; ?> " href="<?php echo ADMIN_URL; ?>">
            <i class="fa fa-home"></i>       
            Mon compte
        </a>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/voyages/">
            <i class="fa fa-users"></i>         
            Les voyages
        </a>
    </li>
   <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/pays/">
            <i class="fa fa-briefcase"></i>
            pays
            
        </a>
    </li>
</ul>