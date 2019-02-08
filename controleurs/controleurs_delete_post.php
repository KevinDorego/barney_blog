<?php
delete_post($bdd, $_GET['id']);
header('Location: http://localhost/Barney_blog/index.php');
?>