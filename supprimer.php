<?php
include_once"functions.php";
$id=$_GET['id'];
$cnx=connection($cnx);
supprimer($cnx,$id);
header("location:tableau.php");
?>
