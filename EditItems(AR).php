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
<div class="ex3"><?php include('Nav2(AR).php');  ?> </div>
<div class="ex11">
            <table>
                <tr>
                    <td><a href="Items(AR).php">اضافت منتجات</a></td>
                    <td><a href="EditItems(AR).php">تعديل/الغاء</a></td>
                </tr>
                
            </table>
        </div>
    <?php
        if(isset($_GET['deleteID'])){
            $query = "DELETE FROM items where ItemID = '{$_GET['deleteID']}' ";
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
    $query = "SELECT Name from items";
    $query2 = "SELECT ItemID from items";
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
    $result2 = mysqli_query( $database, $query2 );
    
    while($row = mysqli_fetch_row( $result ) and $row2 = mysqli_fetch_row( $result2 )){
        for($i = 0; $i < sizeof($row) ;$i++){
        echo "<table><tr><td> $row[$i]</td><td><a href='EditItems.php?deleteID={$row2[$i]}'>ازالة</a></td><td><a href='ItemUpdate(AR).php?itemid=$row2[$i]'>تعديل</a></td></tr></table></form>";
        }
}
    mysqli_close( $database );

   ?>
</div>
<script src="myScript1.js"></script>
         
</body>
<?php include('footer(AR).php');?>
</html>