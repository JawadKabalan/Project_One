<?php
$query = "DELETE from cart where userID = '{$_GET['Pay']}'";
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
header("Location: http://localhost/ISD-project/shoppingcart(AR).php");



?>