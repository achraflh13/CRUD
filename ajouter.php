<?php
include_once"functions.php";
connection($cnx);
$cnx = connection();
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
push($cnx,$prenom,$nom);
rediriger('tableau.php');

?>