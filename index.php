<?php

session_start();
require('function/connexion.php');
require('function/functions.php');


// ----- CONNECTION -----
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

// ----- DECONNECTION -----
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

// ----- AJOUT ARTICLE -----
if(isset($_POST['title']) && isset($_POST['content']) && isset($_SESSION['id']) && isset($_POST['cat']) && ($_GET['action'])=='newArticle')
{
    add_article($bdd, $_POST['title'], $_POST['content'],$_SESSION['id'], $_POST['cat'],$_FILES['file']);
}

// ----- SUPPRIMER ARTICLE -----
if(isset($_GET['action']) && ($_GET['action'])=='delete')
{ 
    delete_post($bdd, $_GET['id']);
}

// ----- MODIFIER ARTICLE -----
if(isset($_GET['action']) && ($_GET['action'])=='edit')
{  
    edit_post($bdd, $_POST['title'], $_POST['content'],$_SESSION['id'], $_POST['cat'],$_POST['id'],$_FILES['file']);
}

 // ----- MODIFIER PROFIL -----
 if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['id']) && isset($_GET['action']) && $_GET['action'] == 'update_profil' ){
     
     profil_update($bdd, $_POST['firstname'], $_POST['lastname'],$_POST['password'],$_POST['login'],$_POST['id']);
     
 }

// ----- AJOUT AUTEUR -----
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['login']) && isset($_POST['password'])&& ($_GET['action'])=='newAuthors')
{
    add_author($bdd, $_POST['firstname'], $_POST['lastname'], $_POST['login'], $_POST['password'], $_FILES['file']);
}

require('includes/header.php');



// ----- INCLUDES (APPELS DES VUES) -----
if (!isset ($_GET['page']))
{
    $all_posts = search_all_posts($bdd);
   
    $title= "Ceci est un site d'entrainement";
    require('includes/contenthome.php');
}
    else{switch ($_GET['page']) 
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

            default:
            require('includes/contenthome.php');
            break;
    }}

require('includes/footer.php');

?>
