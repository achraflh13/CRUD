<?php

function connection(){
  $cnx=mysqli_connect("localhost","root","","tpw");
  return $cnx;
}
function push($cnx,$prenom,$nom){
  mysqli_query($cnx,"insert into v (prenom,nom) values ('$prenom','$nom')");
}
function rediriger($chemin) {
  header("Location: $chemin");
  exit();

}
function supprimer($cnx,$id){
  mysqli_query($cnx,"delete from v where id=$id");
}
function update($cnx,$id,$prenom,$nom) {
mysqli_query($cnx,"update v set prenom='$prenom',nom='$nom' where id=$id");
}
function afficher(){
  
}


?>