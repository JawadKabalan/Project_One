<!DOCTYPE html>
<html lang="SV">
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
  if($row[4] == $_POST['user'] && $row[5] == $_POST['pass']){
    header("Location: http://localhost/ISD-project/Admin.php");
    exit();
  }else{
    echo "<script>
    alert('Fel användarnamn eller lösenord! Vänligen försök igen.');
    </script>";
  }
}
  }



?>
  <div class="ex1">
    <table>
      <tr>
        <th><li><a href="index(SV).php">PERSONAL</a></li></th>
        <th><li><a href="Guest(SV).php">GÄST</a></li></th>
      </tr>
    </table>
  </div>
  <div class="ex2">
    <table>
 <tr>
   <th>
     <form action="index.php" method="POST">
    <h3 id="log"> Användarnamn: <br><input type="text" name="user" /><br> </h3>
    <h3 id="log"> Lösenord: <br><input type="password" name="pass" minlength="8"></h3> 
    <input type="submit" name="Login" value="Logga in">
</form>
    </th>
    </tr>
    </table>
    <p>Glömt ditt lösenord?<a href="#">Klicka här!</a></p>
  </div>
  <p id="text1"></p>
<script>
let x = document.getElementById("text1");
let a = setInterval(myFunction,1000);
let i = 0;
let word;
x.style.fontSize = "40px";
x.style.color = "black";
x.style.textAlign = "Center";
function myFunction(){
     if(i == 0){
       word = "KLÄDER";
     }else if(i == 1){
       word = "MAT";
     }else if(i == 2){
       word = "MÖBEL";
     }else{
       i = 0;
     }
     x.innerHTML = word;
     i = (i + 1)%3;
  }
</script>

</body>
<?php include('footer(SV).php');?>
</html>