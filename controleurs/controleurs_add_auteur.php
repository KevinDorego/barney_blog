<?php
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['login']) && isset($_POST['password'])){
    
$mail_user = verif_mail($bdd, $_POST['login']);
    
    if($mail_user){
        echo ('<script type="text/javascript">alert("mail non valide");</script>');
    }else{
        add_author($bdd, $_POST['firstname'], $_POST['lastname'], $_POST['login'], $_POST['password'], $_FILES['file']);
    }
}
header('Location: http://localhost/Barney_blog/index.php');
?>