<?php

require_once 'layout/header.php';
?>

<h1>Admin</h1>

  <img src="../images/photo/<?php echo $utilisateur["avatar"]; ?>" alt="<?php echo $utilisateur["firstname"]; ?>">
  
<p><?php echo $utilisateur['firstname'] ?></p>
<p><?php echo $utilisateur['lastname'] ?></p>
<p><?php echo $utilisateur['email'] ?></p>
<p><?php echo $utilisateur['adress'] ?></p>
<p><?php echo $utilisateur['zip'] ?></p>
<p><?php echo $utilisateur['country'] ?></p>
<p><?php echo $utilisateur['phone_number'] ?></p>
     



<?php require_once 'layout/footer.php'; ?>