<?php

session_start();
require('function/connexion.php');
require('function/functions.php');


if(isset($_POST['login']) && isset($_POST['password']))
{
  $user = search_user($bdd, $_POST['login'], $_POST['password']);
  if ($user)
  {
    echo 'Connection réussie';
    $_SESSION['id'] = $user['id'];
    $_SESSION['firstname'] = $user['id'];
    $_SESSION['lastname'] = $user['lastname'];
    $_SESSION['email'] = $user['email'];
  }
  else
  {
    echo 'Mot de passe ou email incorrect';
  }
}

if (isset($_GET['stopsession']) && ($_GET['stopsession']) == 'yes')
{
    unset($_SESSION['id']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['email']);
    session_destroy();
}

if(isset($_POST['title']) && isset($_POST['content']) && isset($_SESSION['id']) && isset($_POST['cat']))
{
    add_article($bdd, $_POST['title'], $_POST['content'],$_SESSION['id'], $_POST['cat']);
}

if(isset($_GET['action']) && ($_GET['action'])=='delete'){
    echo'toto';
    delete_post($bdd, $_GET['id']);
}


require('includes/header.php');


if (!isset ($_GET['page']))
{
    $all_posts = search_all_posts($bdd);
   
    $title= "Ceci est un site d'entrainement";
    require('includes/contenthome.php');
}
    else{switch ($_GET['page']) 
        {
            case 'category':
            require('includes/contentcategory.php');

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

            default:
            require('includes/contenthome.php');
            break;
    }}

require('includes/footer.php');

?>
