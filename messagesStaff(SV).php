<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Page </title>
</head>
<body>
  <div class="ex3"><?php  include('Nav2(SV).php');  ?> </div>
  <?php
if(isset($_POST['Send'])){
    $query = "UPDATE messages SET messagerecieved = '{$_POST['message']}' where MessageID = '{$_GET['MessageID']}' ";
    if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
        die( "Could not connect to database. </body></html>" );
     }
 
    if( !mysqli_select_db( $database, "market" ) ){
 
     die( "Could not open database. </body></html>" );
    }
   if ( !( $result = mysqli_query( $database, $query ) ) ) {
 
      echo "<p>Could not execute query!</p>";
     die( mysqli_error($database) . "</body></html>" );
     }
     mysqli_close( $database );   
}



?>
  <div>
      <?php
      $query = "SELECT  messageSent from messages";
      $query2 = "SELECT MessageID from messages";
      $query3 = "SELECT Messagerecieved from  messages";
      if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
        die( "Could not connect to database. </body></html>" );
     }
 
    if( !mysqli_select_db( $database, "market" ) ){
 
     die( "Could not open database. </body></html>" );
    }
   if ( !( $result = mysqli_query( $database, $query ) ) ) {
 
      echo "<p>Could not execute query!</p>";
     die( mysqli_error($database) . "</body></html>" );
     }
     $result2 = mysqli_query( $database, $query2 ) ;
     $result3 = mysqli_query( $database, $query3 ) ;
      while($row = mysqli_fetch_row( $result ) and $row2 = mysqli_fetch_row( $result2 ) and $row3 = mysqli_fetch_row( $result3 )){
          for($i = 0; $i < sizeof($row);$i++){
              if($row3[$i] == null){
              echo"$row[$i] <br><form method='POST' action='messagesStaff.php?MessageID={$row2[$i]}'>ditt meddelande:<input type='text' name='message'><input type='Submit' name='Send' value='skicka'></form>";
              }
            }
      }
      mysqli_close( $database );      
        

        ?>
  </div>


<script src="myScript1.js"></script>         
</body>
<?php include('footer(SV).php');?>
</html>