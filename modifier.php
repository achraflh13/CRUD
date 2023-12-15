
<?php
include_once"functions.php";
$id=$_GET['id'];
$cnx=connection();
$pr=$result=mysqli_query($cnx,"select * from v where id=$id");
  $pr=$result->fetch_assoc();

  
  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier des donnes</title>
  </head>
  <body>
    <form action="update.php" method="post">
      <input type="hidden" name="id" id="" value="<?=$id?>">
      <div class="mb-3">
        <label class="form-label" class="mx-auto" style="width: 200px;" value="">prenom</label>
        <input type="" class="form-control" name="prenom" value="<?=$pr['prenom']?>">
      </div>
      <div class="mb-3">
        <label class="form-label">nom</label>
        <input class="form-control" name="nom" value="<?=$pr['nom']?>">
      </div>
  
    
        <button type="submit" class="btn btn-primary">modifier</button>

        
      </form>
    </body>
    </html>

  