<?php

session_start();
require('function/connexion.php');
require('function/functions.php');




// --------------- CONNECTION ---------------
if(isset($_POST['login']) && isset($_POST['password']) && isset($_GET['action']) && $_GET['action'] == 'connection')
{
  $user = search_user($bdd, $_POST['login'], $_POST['password']);
  if ($user)
  {
    echo 'Connection réussie';
    $_SESSION['id'] = $user['id'];
    $_SESSION['firstname'] = $user['id'];
    $_SESSION['lastname'] = $user['lastname'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['level'] = $user['level'];
    $_SESSION['profil_picture'] = $user['profil_picture'];
   
  }
  else
  {
    echo 'Mot de passe ou email incorrect';
  }
}

// --------------- DECONNECTION ---------------
if (isset($_GET['stopsession']) && ($_GET['stopsession']) == 'yes')
{
    unset($_SESSION['id']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['email']);
    unset($_SESSION['level']);
    unset($_SESSION['profil_picture']);
    session_destroy();
}


require('includes/header.php');


if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
            
            case 'category':
            $post_cat = one_cat($bdd,$_GET['id'] );
            require('includes/contentcategory.php');
            break;

            case 'about':
            require('includes/contentabout.php');
            break;

            case 'contact':
            require('includes/contentcontact.php');
            break;
            
            case 'details':
            $post = one_post($bdd,$_GET['id']);
            require('includes/single-standard.php');
            break;
            
            case 'new_article':
            require('includes/newArticle.php');
            break;
            
            case 'connection':
            require('includes/connection.php');
            break;
            
            case 'delete':
            require('includes/delete.php');
            break;

            case 'edit':
            $post = one_post($bdd,$_GET['id']);
            require('includes/edit.php');
            break;
            
            case 'inscription':
            require('includes/inscription.php');
            break;

            case 'profil_gestion':
            $info_user = profil_gestion($bdd,$_SESSION['id']);
            require('includes/profil_gestion.php');
            break;        
    }
}



elseif(isset($_GET['action']))
{
    switch($_GET['action'])
    {
            
            case 'newArticle':
            require('controleurs/controleurs_add_post.php');
            break;
            
            case 'delete':
            require('controleurs/controleurs_delete_post.php');
            break;
            
            case 'edit':
            require('controleurs/controleurs_edit_post.php');
            break;
            
            case 'update_profil':
            require('controleurs/controleurs_edit_auteur.php');
            break;
            
            case 'newAuthors':
            require('controleurs/controleurs_add_auteur.php');
            break;
            
            case 'connection':
            $all_posts = search_all_posts($bdd);
            require('includes/contenthome.php');
            break;           
    }
}


else
{

    $all_posts = search_all_posts($bdd);
    require('includes/contenthome.php');
}


require('includes/footer.php');

?>




