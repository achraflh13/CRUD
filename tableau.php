<?php
include_once"functions.php";
$cnx=connection();
$result=mysqli_query($cnx,"select * from v");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ajouter</title>
</head>

<body>


  <a href="create.php" class="badge text-bg-primary">ajouter un produit</a>
  <br><br><br><br><br>
  <table class="table" >
    <tr>
      <th>id</th>
      <th>prenom</th>  
      <th>nom</th>
    </tr>
    <?php  while($p=$result->fetch_assoc()){?>
    <tr>
      <td><?=$p['id']?></td>
      <td><?=$p['prenom']?></td>
      <td><?=$p['nom']?></td>
    <td>
    <a href="modifier.php?id=<?=$p['id']?>" class="badge text-bg-success">Modifier</a>
    <a onclick="return confirm('sur')"  href="supprimer.php?id=<?=$p['id']?>" class="badge text-bg-danger">Supprimer</a>
    </td>
    </tr>
    
<?php } ?>

  </table>
</body>
</html>
