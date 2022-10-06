<?php    Session_start();      ?>
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
             include('Navigation(AR).php'); 
            }else{
              include('Navlog(AR).php');
            }  
             ?> 
        </div>
        <div>
            <?php
            if($_SESSION != null){
            if(isset($_GET['ADDID'])){
                
                $query = "INSERT into cart Values('{$_GET['ADDID']}',0,1,'{$_SESSION['ID']}')";
            if( !( $database = mysqli_connect( "localhost", "root", "" ) ) ){
                die( "Could not connect to database. </body></html>" );
         }
         
         if( !mysqli_select_db( $database, "market" ) ){
         
         die( "Could not open database. </body></html>" );
         }
         if ( !( mysqli_query( $database, $query ) ) ) {
         
         echo "<p>Could not execute query!</p>";
         die( mysqli_error($database) . "</body></html>" );
         }
         mysqli_close( $database );
        }
    }
            



            ?>
            <?php
                $query = "SELECT Name from items";
                $query2 = "SELECT Image from items";
                $query3 = "SELECT ItemID from items";
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
             $result2 = mysqli_query( $database, $query2 );
             $result3 = mysqli_query( $database, $query3 );
             
            while($row = mysqli_fetch_row( $result ) and $row2 = mysqli_fetch_row( $result2 ) and $row3 = mysqli_fetch_row( $result3 ) ){
                
                for($i = 0; $i < sizeof($row) ; $i++){
                    if($_SESSION == null){
                echo"<table><tr><td><img src='$row2[$i]' height='500px' width='400px'></td><td>$row[$i]</td><td class='ex13'><a href= 'Login.php'>أضف إلى السلة</a></td></tr></table>";
                    }else{
                        echo"<table><tr><td><img src='$row2[$i]' height='500px' width='400px'></td><td>$row[$i]</td><td class='ex13'><a onclick='alert('You're item is added')' href='Products(AR).php?ADDID={$row3[$i]}'>أضف إلى السلة</a></td></tr></table><script>function go(){alert('You're Item is added to your cart');}</script>";        
                    }
            }}
             mysqli_close( $database );
            ?>
        </div>
    </body>
    <?php include('footer(AR).php');?>
</html>