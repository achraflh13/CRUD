<?php
include_once"functions.php";
extract($_POST);
$cnx=connection($cnx);
update($cnx,$id,$prenom,$nom);
rediriger('tableau.php');





?>