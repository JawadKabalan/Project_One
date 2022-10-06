<?php Session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Place-Trading </title>
</head>
<body>
        <div class="ex3">
            <?php  include('Navigation.php');   ?>
        </div>
        <?php
if(isset($_POST['Login'])){
  $query = "SELECT * from accounts";
  if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
         die( "Could not connect to database. </body></html>" );
  }
  
  if( !mysqli_select_db( $database, "market" ) ){
  
  die( "Could not open books database. </body></html>" );
  }
  if ( !( $result = mysqli_query( $database, $query ) ) ) {
  
  echo "<p>Could not execute query!</p>";
  die( mysqli_error($database) . "</body></html>" );
  
  }
  mysqli_close( $database );
  while ( $row = mysqli_fetch_row( $result ) ) {
    if($row[1] == $_POST['user'] && $row[2] == $_POST['pass']){
      $_SESSION["Name"] = $row[3];
      $_SESSION["ID"] = $row[0];
      $_SESSION['Loged'] = true;
      header("Location: http://localhost/ISD-project/Guest.php");
      exit();
    }else{
      $_SESSION['Name'] = "Login";
      echo "<script>
      alert('Wrong username or password!Please Tryagain.');
      </script>";
    }
  }
    }





      ?>
        <div class="ex2">
    <table>
 <tr>
   <th>
     <form action="Login.php" method="POST">
    <h3 id="log"> Username: <br><input type="text" name="user" /><br> </h3>
    <h3 id="log"> Password: <br><input type="password" name="pass" minlength="8"></h3> 
    <input type="submit" name="Login" value="Login" onclick="Loged(1)">
</form>
    </th>
    </tr>
    </table>
    <p>New User?<a href="SignUp.php">Sign up </a>now!</p>
  </div>
  <script src="myScript1.js"></script>
</body>
<?php include('footer.php');?>
</html>