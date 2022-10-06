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
if(isset($_POST['ADD'])){
$query = "UPDATE items SET Name = '{$_POST['Iname']}', Price = '{$_POST['Price']}', bio = '{$_POST['bio']}', Quanityt = '{$_POST['Quantity']}', Image = '{$_POST['filename']}'  where ItemID = '{$_GET['itemid']}'";
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
}
?>
       <div class="ex11">
            <table>
                <tr>
                    <td><a href="Items(SV).php">lägga till objekt</a></td>
                    <td><a href="EditItems(SV).php">uppdatera/ta bort</a></td>
                </tr>
                
            </table>
        </div>
        <div class="ex12">
        <form action="Items.php" method="POST">
                <table>
                <tr>
                <td>Föremålsnamn:</td>
                <td><input type="text" name="Iname"></td>
                </tr>
                <tr>
                <td>Pris:</td>
                <td><input type="text" name="Price"></td>
                </tr>
                <tr>
                <td>biografi:</td>
                <td> <input type="text" name="bio"></td>
                </tr>
                <tr>
                <td>Kvantitet:</td>
                <td><input type="text" name="Quantity"></td> 
                </tr>
                <tr>
                    <td><input type="file" id="myFile" name="filename"></td>
                </tr>
                <td><input type="Submit" name="ADD" Value="uppdatering"></td>
            </table>
        </form>
    </div>
    <script src="myScript1.js"></script>        
</body>
<?php include('footer(SV).php');?>
</html>