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
    <?php
if(isset($_POST['Login'])){
    $query = "SELECT * from employee";
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
        if($row[4] == $_POST['user'] && $row[8] == $_POST['pno']){
          header("Location: http://localhost/ISD-project/Admin.php");
          exit();
        }else{
          echo "<script>
          alert('Your username or your phone number is Wrong Please try again!');
          </script>";
        }
      }
        }



?>
<div class="ex1">
    <table>
      <tr>
        <th><li><a href="index.php">STAFF</a></li></th>
        <th><li><a href="Guest.php">GUEST</a></li></th>
      </tr>
    </table>
  </div>
  <div class="ex2">
    <table>
 <tr>
   <th>
     <form action="forgetpassword.php" method="POST">
    <h3 id="log"> Username: <br><input type="text" name="user" /><br> </h3>
    <h3 id="log"> Phone number: <br><input type="text" name="pno"></h3> 
    <input type="submit" name="Login" value="Login">
</form>
    </th>
    </tr>
    </table>
</div>
<script src="myScript1.js"></script>        
</body>
<?php include('footer.php');?>
</html>