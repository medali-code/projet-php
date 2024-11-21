<?php include("bdconnect.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset='utf-8'>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Font Awesome -->
<link
  href="css/bootstrap.css"
  rel="stylesheet"
/>

    </head>
    <body>
      <div class="container">
      <form method="post" action="">
            <!-- Login input -->
            <div class="form-group">
              <label class="form-label" for="form1Example1">login</label>
              <input type="text" id="login" class="form-control" name="login" required />
            </div>
          
            <!-- Password input -->
            <div class="form-group">
              <label class="form-label" for="form1Example2">Password</label>
              <input type="passsword" id="MP" name="MP" class="form-control" required/>
            </div>
          
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
              </div>
          
              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
          </form>
          <?php 
          if(isset($_POST['MP']))
          {
          $mp=$_POST['MP'];
          $login=$_POST['login'];
          echo $mp;
          $Req=mysqli_query($con,"select * from admin where login='$login' and MP='$mp' ");
     $num=mysqli_Fetch_array($Req);
 if($num)
 echo "existe";
 else
 echo "non existe";
          }
          header('Location: Acceuil.php');
 ?>
        </div>
    </body>
    

</html>