<?php    Session_start();    ?>
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

                if(isset($_GET['deleteID'])){
                    $query = "DELETE FROM cart where ItemID = '{$_GET['deleteID']}' ";
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
                



             ?>
            <?php

                if($_SESSION != null){
                    if($_SESSION['Loged'] = true){
                           $query = "SELECT ItemID from cart where userID = '{$_SESSION['ID']}'";
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

                     while($row =mysqli_fetch_row( $result ) ){
                         for($i = 0 ; $i < sizeof($row); $i++){
                         $query2 = "SELECT Name from items where ItemID = '$row[$i]'";
                         $result2 = mysqli_query( $database, $query2 );
                         $row2 = mysqli_fetch_row( $result2 );
                        echo"$row2[0]    <a href='shoppingcart(AR).php?deleteID={$row[$i]}'>إلغاء</a><br>";

                     }
                    
                    }
                     echo"<a href='pay(AR).php?Pay={$_SESSION['ID']}'>ادفع</a>";
                    }
                }else{
                    echo"<p style='font-size:40px;text-align:center'>يجب عليك تسجيل الدخول أولا</p>";
                }


             ?>
       </div>
       <script src="myScript1.js"></script>        
</body>
<?php include('footer(AR).php');?>
</html>