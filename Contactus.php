<?php Session_start();  ?>
<!DOCTYPE html>
<html>
    <header>
        <title>Products</title>
        <link rel="stylesheet" href="StyleSheet.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </header>
    <body>
        <div class="ex3">
        <?php 
         if($_SESSION == null){
            include('Navigation.php'); 
            }else{
                include('Navlog.php');
            }
        ?> 
        </div>
        <?php
if(isset($_POST['Send'])){
    $query = "SELECT MessageID from messages";
    $query1 = "SELECT ID from employee";
    if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
        die( "Could not connect to database. </body></html>" );
    }
 
    if( !mysqli_select_db( $database, "market" ) ){
 
       die( "Could not open books database. </body></html>" );
     }
     if ( !( $result1 = mysqli_query( $database, $query1 ) ) ) {
           echo "<p>Could not execute query!</p>";
     }
     
     if($_SESSION == null){
            die("Please login first!</body></html>");
     }
     $result4 = mysqli_query( $database, $query );
     while($row2 = mysqli_fetch_row( $result4 )){
         $X = $row2[sizeof($row2) - 1] + 1;
     }
     while ( $row = mysqli_fetch_row( $result1 ) ) {
        for($i = 0 ; $i < sizeof($row);$i++){
        $query2 = "INSERT into messages Values('$X','{$_SESSION['ID']}','{$row[$i]}','{$_POST['message']}','')";
        $result2 = mysqli_query( $database, $query2);  
        }
     }

      mysqli_close( $database );
    
    
}


        ?>
        <div>
            <?php
        if($_SESSION != null){
            $query1 = "SELECT messageSent from messages where accountID = '{$_SESSION['ID']}'";
            $query2 = "SELECT messagerecieved from messages where accountID = '{$_SESSION['ID']}'";
            if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
                die( "Could not connect to database. </body></html>" );
            }
         
            if( !mysqli_select_db( $database, "market" ) ){
         
               die( "Could not open books database. </body></html>" );
             }
             if ( !( $result3 = mysqli_query( $database, $query1 ) ) ) {
                   echo "<p>Could not execute query!</p>";
             }
             $result4 = mysqli_query( $database, $query2 );
             $x = "<p style='border: 1px solid black;background-color: white;width:300px'>";
             $y = "</p>";
             $z = "";    
             $f = "";
             
             while ( $row = mysqli_fetch_row( $result3 ) and $row2 = mysqli_fetch_row( $result4 )) {
                 for($i = 0 ; $i < sizeof($row);$i++){
                     if($row2[$i] != null){
                       $z = "$z<br> $row[$i] <br> Reply: $row2[$i]";  
                     }else{
                        $z = "$z<br> $row[$i] <br>NO REPLY YET";
                     }
                     
                     
                 }
                   
             }
             echo"$x  $z  $y";
              mysqli_close( $database );
        }


           ?>
       </div>
        <div>
            <form action="Contactus.php" method="POST">
                yourmessage:<input type="text" name="message">
                <input type="Submit" name="Send" value="Send">
            </form>
        </div>
        <script src="myScript1.js"></script>
    </body>
    <?php include('footer.php');?>
</html>