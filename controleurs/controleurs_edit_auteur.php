<?php
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['id'])){
    
profil_update($bdd, $_POST['firstname'], $_POST['lastname'],$_POST['password'],$_POST['login'],$_POST['id']);
}
header('Location: http://localhost:8888/BLOG-CODE/barney_blog/');
?>