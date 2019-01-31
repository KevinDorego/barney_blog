<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Barney Stinson official blog</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="barnico.ico" type="image/x-icon">
    <link rel="icon" href="barnico.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <a class="logo" href="index.php">
                <img src="images/logo.png" alt="Homepage">
            </a>
        </div> <!-- end header__logo -->


<!--         <a class="header__search-trigger" href="#0"></a>
        <div class="header__search">
            
            
            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Recherche:</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Recherche:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Recherche">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Fermer</a>
        </div> -->  <!-- end header__search -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Navigate to</h2>

            <ul class="header__nav">
                <li class="current"><a href="index.php" title="">Menu</a></li>
                <li class="has-children">
                    <a href="#0" title="">Catégories</a>
                    <ul class="sub-menu">
                        <li><a href="index.php?page=category">Le Pote Code</a></li>
                        <li><a href="index.php?page=category">Le Livre des rôles</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=about" title="">À propos</a></li>
                <li><a href="index.php?page=contact" title="">Contact</a></li>
                <li>
                    <?php
                    if (isset($_SESSION['id']))
                    {
                        echo('<a href="index.php?stopsession=yes" title="">Deconnection</a>');
                     }
                     else
                     {
                        echo('<a href="index.php?page=connection" title="">Connection</a>');
                     }
                    ?>
                </li>
            </ul> <!-- end header__nav -->

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Fermer</a>
        </nav> <!-- end header__nav-wrap -->

    </header> <!-- s-header -->