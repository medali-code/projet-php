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


<?php
$qry='select * from medecin where id_med='.$_GET['id'];
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
while ($row=mysqli_fetch_assoc($result)){ 
    
    $id_med=$_GET['id'];
    $nom_med=$row['nom_med'];
    $prenom_med=$row['prenom_med'];
    $tel_med=$row['tel_med'];
    $mail=$row['mail'];
    $spe=$row['spe'];
}
   ?>
  <tbody>
  

  <form method="POST" action="">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" name="id_med"class="form-control" value="<?php echo $id_med?>" readonly />
        <label class="form-label" for="form6Example1"  >id</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" name="nom_med"class="form-control" value="<?php echo $nom_med?>" readonly />
        <label class="form-label" for="form6Example2" >First name</label>
      </div>
    </div>
  </div>
  <div class="form-outline">
        <input type="text" id="form6Example2" name="prenom_med"class="form-control"  value="<?php echo $prenom_med?>" readonly/>
        <label class="form-label" for="form6Example2">Last name</label>
      </div>
    </div>
  </div>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" name="mail" class="form-control"  value="<?php echo $mail?>"/>
    <label class="form-label" for="form6Example5" >Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" name="tel_med"class="form-control" value="<?php echo $tel_med?>"/>
    <label class="form-label" for="form6Example6" >Phone</label>
  </div>

   <!-- Number input -->
   <div class="form-outline mb-4">
    <input type="number" id="form6Example6" name="spe"class="form-control" value="<?php echo $spe?>" />
    <label class="form-label" for="form6Example6" >Spécialité</label>
  </div>

 <!-- Submit button -->
 <button type="submit" class="btn btn-primary btn-block">Sign in</button>

</form>

  </tbody>
</table>
<?php
if(isset($_POST['id_med']))
{
$id_med= $_POST['id_med'];
$nom= $_POST['nom_med'];
$prenom= $_POST['prenom_med'];
$tel= $_POST['tel_med'];
$mail= $_POST['mail'];
$spe= $_POST['spe'];

$query="update medecin set mail='$mail',tel_med='$tel',spe='$spe' where id_med='$id_med'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if($result)
{ ?>
<div class="row">
<div class="alert alert-success col-md-4 col-md-offset-4" align="center">
<strong>modification réussite!!!</strong>
</div>
</div>
<?php
}}
?>	 
</html>