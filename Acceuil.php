<?php include("bdconnect.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  href="css/bootstrap.css"
  rel="stylesheet"
/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
       
      </div>
    </div>
  </div>
</nav>

<table class="table caption-top">
  <caption>List of medicine</caption>
  <thead>
    <tr>
   
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
<?php
$qry="select * from medecin";
$result=mysqli_query($con,$qry);
while ($row=mysqli_fetch_assoc($result)){
  $id=$row['id_med']; ?>

   



  <tbody>
    <tr>
   
      <th><?php echo $row['id_med']?> </th>
      <td><?php echo $row['nom_med']?> </td>
      
      <td><a button type="button" class="btn btn-success" href="modifierernmed.php?id=<?php echo $id; ?>">Modifier</a>
      <a button type="button" class="btn btn-danger" href="deletemed.php?id=<?php $row['id_med']?>">Supprimer</a></td>
    </tr>
<?php
}?>
  </tbody>
</table>
</html>