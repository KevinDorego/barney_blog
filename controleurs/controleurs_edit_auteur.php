<?php
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['id'])){
    

profil_update($bdd, $_POST['firstname'], $_POST['lastname'],$_POST['password'],$_POST['login'],$_FILES['file'],$_POST['id']);
};


header('Location: http://localhost/Barney_blog/index.php');
