<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=blog_barney', 'root', '');
}

catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?>